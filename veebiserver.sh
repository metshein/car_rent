#!/bin/bash

# =========================
# MUUDA NEED ENDA JAOKS ÄRA
# =========================
SITE_NAME="demo.local"
WEBROOT="/var/www/html"
PROJECT_REPO="https://github.com/nimi/projekt.git"
PROJECT_DIR="${WEBROOT}/projekt"
MYSQL_ROOT_PASSWORD="MuudaSeeKohe123!"

# =========================
# FUNKTSIOONID
# =========================

install_if_missing() {
  if ! dpkg -s "$1" >/dev/null 2>&1; then
    echo "Paigaldan: $1"
    apt install -y "$1"
  else
    echo "Juba olemas: $1"
  fi
}

start_enable_service() {
  systemctl enable "$1"
  if ! systemctl is-active --quiet "$1"; then
    echo "Käivitan teenuse: $1"
    systemctl start "$1"
  else
    echo "Teenuse $1 juba töötab"
  fi
}

create_if_missing() {
  if [ ! -f "$1" ]; then
    echo "Loon faili: $1"
    echo "$2" > "$1"
  else
    echo "Fail juba olemas: $1"
  fi
}

# =========================
# KONTROLL ROOT
# =========================
if [ "$EUID" -ne 0 ]; then
  echo "Käivita root kasutajana: sudo bash script.sh"
  exit 1
fi

# =========================
# Uuendus
# =========================
apt update -y

# =========================
# PAIGALDUS
# =========================
install_if_missing apache2
install_if_missing mariadb-server
install_if_missing php
install_if_missing libapache2-mod-php
install_if_missing php-mysql
install_if_missing git
install_if_missing phpmyadmin

# =========================
# TEENUSED
# =========================
start_enable_service apache2
start_enable_service mariadb

# =========================
# MARIADB ROOT PAROOL (kui vaja)
# =========================
mysql -u root <<EOF 2>/dev/null || true
ALTER USER 'root'@'localhost' IDENTIFIED BY '${MYSQL_ROOT_PASSWORD}';
FLUSH PRIVILEGES;
EOF

# =========================
# TESTLEHED (kui puuduvad)
# =========================
create_if_missing "${WEBROOT}/index.html" "<h1>Apache töötab</h1><p><a href='/projekt'>Ava projekt</a></p>"
create_if_missing "${WEBROOT}/info.php" "<?php phpinfo(); ?>"

# =========================
# GIT PROJEKT
# =========================
if [ ! -d "$PROJECT_DIR" ]; then
  echo "Kloonin projekti..."
  git clone "$PROJECT_REPO" "$PROJECT_DIR"
else
  echo "Projekt juba olemas, teen git pull"
  cd "$PROJECT_DIR"
  git pull
fi

# =========================
# ÕIGUSED
# =========================
chown -R www-data:www-data "$WEBROOT"
chmod -R 755 "$WEBROOT"

# =========================
# APACHE CONFIG (projekt kui alamkaust)
# =========================
if [ ! -f /etc/apache2/sites-available/000-default.conf ]; then
  echo "Apache config puudub? jätan vahele"
else
cat > /etc/apache2/sites-available/000-default.conf <<EOF
<VirtualHost *:80>
    ServerName ${SITE_NAME}
    DocumentRoot ${WEBROOT}

    <Directory ${WEBROOT}>
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog \${APACHE_LOG_DIR}/error.log
    CustomLog \${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
EOF
fi

a2enmod rewrite >/dev/null 2>&1
systemctl reload apache2

# =========================
# VALMIS
# =========================
IP_ADDR=$(hostname -I | awk '{print $1}')

echo ""
echo "======================================"
echo "VALMIS"
echo "======================================"
echo "Ava:"
echo "http://${IP_ADDR}"
echo "http://${IP_ADDR}/projekt"
echo "http://${IP_ADDR}/phpmyadmin"
echo ""
echo "Git projekt:"
echo "${PROJECT_REPO}"
echo "======================================"