<!doctype html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin – Autod</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

  <!-- NAVBAR (admin) -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Autorent admin</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="adminMenu">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#">Autod</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Reserveeringud</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kasutajad</a></li>
        </ul>

        <div class="d-flex gap-2">
          <a href="#" class="btn btn-sm btn-outline-secondary">Logout</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- SISU -->
  <div class="container my-4">

    <!-- Pealkiri + Lisa nupp -->
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
      <div>
        <h1 class="h4 mb-0">Autod</h1>
        <div class="text-muted small">Halda autorendi autode nimekirja.</div>
      </div>
      <a href="#" class="btn btn-dark btn-sm">Lisa auto</a>
    </div>

    <!-- Tabel -->
    <div class="card shadow-sm">
      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
          <thead class="table-light">
            <tr>
              <th style="width: 90px;">Pilt</th>
              <th>Auto</th>
              <th style="width: 140px;">Mootor</th>
              <th style="width: 120px;">Kütus</th>
              <th style="width: 140px;">Hind</th>
              <th style="width: 260px;">Kirjeldus</th>
              <th class="text-end" style="width: 180px;">Tegevused</th>
            </tr>
          </thead>

          <tbody>
            <!-- RIDA 1 -->
            <tr>
              <td>
                <img src="https://loremflickr.com/120/80/audi" class="img-thumbnail" alt="Auto pilt">
              </td>
              <td>
                <div class="fw-semibold">Audi Q8</div>
                <div class="text-muted small">2019</div>
              </td>
              <td class="small">V6</td>
              <td class="small">Bensiin</td>
              <td class="small">120 € / päev</td>
              <td class="small text-muted">
                Mugav ja ruumikas crossover igapäevaseks kasutuseks.
              </td>
              <td class="text-end">
                <div class="btn-group btn-group-sm" role="group" aria-label="Tegevused">
                  <a href="#" class="btn btn-outline-primary">Muuda</a>
                  <a href="#" class="btn btn-outline-danger">Kustuta</a>
                </div>
              </td>
            </tr>

            <!-- RIDA 2 -->
            <tr>
              <td>
                <img src="https://loremflickr.com/120/80/mercedes" class="img-thumbnail" alt="Auto pilt">
              </td>
              <td>
                <div class="fw-semibold">Mercedes A-Class</div>
                <div class="text-muted small">2020</div>
              </td>
              <td class="small">V4</td>
              <td class="small">Bensiin</td>
              <td class="small">90 € / päev</td>
              <td class="small text-muted">
                Linnasõbralik ja ökonoomne auto lühikesteks sõitudeks.
              </td>
              <td class="text-end">
                <div class="btn-group btn-group-sm" role="group" aria-label="Tegevused">
                  <a href="#" class="btn btn-outline-primary">Muuda</a>
                  <a href="#" class="btn btn-outline-danger">Kustuta</a>
                </div>
              </td>
            </tr>

            <!-- RIDA 3 -->
            <tr>
              <td>
                <img src="https://loremflickr.com/120/80/sportscar" class="img-thumbnail" alt="Auto pilt">
              </td>
              <td>
                <div class="fw-semibold">Audi R8 Spyder</div>
                <div class="text-muted small">2021</div>
              </td>
              <td class="small">V10</td>
              <td class="small">Bensiin</td>
              <td class="small">250 € / päev</td>
              <td class="small text-muted">
                Premium cabrio eriliseks elamuseks ja üritusteks.
              </td>
              <td class="text-end">
                <div class="btn-group btn-group-sm" role="group" aria-label="Tegevused">
                  <a href="#" class="btn btn-outline-primary">Muuda</a>
                  <a href="#" class="btn btn-outline-danger">Kustuta</a>
                </div>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>

    <!-- Lisa nupp ka alla (mugavus) -->
    <div class="d-flex justify-content-end mt-3">
      <a href="#" class="btn btn-dark btn-sm">Lisa auto</a>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>