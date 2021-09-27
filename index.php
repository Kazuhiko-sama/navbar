<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Paperless</title>
  </head>
  <div class="container">
  <body>
    <h1><img src="loggo.jpg" style="width:20%; height:20%"></h1>
    <form class="d-flex justify-content-end">
        <input class="form-control me-2 justify-content-end" type="search" placeholder="Search" aria-label="Search" style="width:20%">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->

  </body>
</div>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#000080">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php?p=news">Library News</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Area Anggota
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#000080">
            <li><a class="dropdown-item text-secondary" href="index.php?p=member">Login Member</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-secondary" href="index.php?p=daftar_online">Registrasi Member</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-secondary" href="index.php?p=survei">Survei</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-secondary" href="index.php?p=usul_buku">Usul Buku</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Katalog
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#000080">
            <li><a id="fc" class="dropdown-item text-secondary" href="https://paperless.umkt.ac.id/">Paperless</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-secondary" href="https://dspace.umkt.ac.id/">Repository</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-secondary" href="http://b.id/mobi/">E-Book</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Tentang Kami
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#000080">
            <li><a class="dropdown-item text-secondary" href="index.php?p=librarianr">Librarian</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-secondary" href="index.php?p=profil">Profil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-secondary" href="index.php?p=fasilitas">Fasilitas Perpustakaan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-secondary" href="index.php?p=layanan">Layanan Perpustakaan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-secondary" href="index.php?p=peta" class="openPopUp" width="600" height="400">Library Location</a></li>
          </ul>
        </li>
     
      </ul>
      </div>
    </div>
  </div>
</nav>
</html>