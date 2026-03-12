<!-- nimepusle, iga täht 2€ + 24% -->
<!DOCTYPE html>
<html lang="et">
<head>

</head>
<body>
<?php
if (!empty($_GET['s1'])) {
    $nimi = $_GET['s1'];
    echo strtoupper($nimi) . "<br>";
    $hind = 2;
    $summa = $hind * strlen($nimi) * 1.24;
    echo($summa) . "€";
}

?>
<form action="" method="" enctype="">
vaartus1 <input type="text" name="s1"><br>
<input type="submit" value="arvuta"><br><br>
</form>
</body>
</html>
