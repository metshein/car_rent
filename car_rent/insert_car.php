<!doctype html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin – Lisa auto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Autorent admin</a>
    <div class="ms-auto">
      <a href="#" class="btn btn-sm btn-outline-secondary">Logout</a>
    </div>
  </div>
</nav>

<div class="container my-4">

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h4 mb-0">Lisa auto</h1>
    <a href="#" class="btn btn-outline-secondary btn-sm">Tagasi</a>
  </div>

  <div class="card shadow-sm">
    <div class="card-body p-4">

      <!-- NB! enctype vajalik faili jaoks -->
      <form action="#" method="post" enctype="multipart/form-data">

        <div class="row g-3">

          <div class="col-md-6">
            <label class="form-label">Mark</label>
            <input type="text" name="mark" class="form-control" required>
          </div>

          <div class="col-md-6">
            <label class="form-label">Mudel</label>
            <input type="text" name="model" class="form-control" required>
          </div>

          <div class="col-md-6">
            <label class="form-label">Mootor</label>
            <input type="text" name="engine" class="form-control" required>
          </div>

          <div class="col-md-6">
            <label class="form-label">Kütus</label>
            <select name="fuel" class="form-select" required>
              <option value="" disabled selected>Vali</option>
              <option value="Bensiin">Bensiin</option>
              <option value="Diisel">Diisel</option>
              <option value="Hübriid">Hübriid</option>
              <option value="Elekter">Elekter</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="form-label">Hind (€ / päev)</label>
            <input type="number" name="price" class="form-control" min="0" step="0.01" required>
          </div>

          <!-- Pildi üleslaadimine -->
          <div class="col-md-6">
            <label class="form-label">Auto pilt</label>
            <input type="file" name="image" class="form-control" accept="image/*" required>
            <div class="form-text">
              Lubatud formaadid: JPG, PNG, WEBP.
            </div>
          </div>

        </div>

        <hr class="my-4">

        <div class="d-flex gap-2">
          <button type="submit" class="btn btn-dark">Salvesta</button>
          <a href="#" class="btn btn-outline-secondary">Tühista</a>
        </div>

      </form>

    </div>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>