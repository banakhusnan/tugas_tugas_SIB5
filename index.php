<?php
$nama = "Bana Khusnan";
$alamat = "Muntilan, Magelang, Jawa Tengah";
$email = "banakhsn04@gmail.com";
$noTelp = "085877109948";
$asalKampus = "Universitas Muhammadiyah Magelang (UNIMMA)";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

  <title>Tugas 1 PHP</title>
</head>

<body>
  <header class="navbar navbar-expand-lg navbar-light bg-light">
    <nav class="container">
      <a class="navbar-brand font-weight-bold" href="#">Bana</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portfolio.php">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <section class="jumbotron">
    <div class="container">
      <h1 class="display-4">
        Hello, Saya <?= $nama; ?>
      </h1>
      <p class="lead">
        Seorang mahasiswa <?= $asalKampus; ?> yang
        berminat pada bidang Web Developer.
      </p>
      <hr class="my-4" />
      <p>Alamat : <?= $alamat; ?></p>
      <p>Email : <?= $email; ?></p>
      <p>No Telp : <?= $noTelp; ?></p>
      <a class="btn btn-primary btn-lg" href="portfolio.php">Portfolio</a>
    </div>
  </section>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>