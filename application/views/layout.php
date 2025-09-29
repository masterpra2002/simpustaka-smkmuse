<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contoh Halaman</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<header>
		<h1 >Selamat Datang di <span style="color: blue;">Situs Kami</span></h1>
	</header>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<main>

  <div class="container text-center">
  <div class="row">
    <div class="col-3 bg-primary text-white">
      
     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contoh.html">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tentang.html">Tentang</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link" href="galeri.html">Galeri</a>
        </li>
       
      </ul>
    </div>
    <div class="col-9 bg-warning">
      		<section>
            <?php
                //kode php disini
                $this->load->view('admin');

            ?>


        </section>
    
    </div>
   
    </div>
  </div>
</div>



	</main>

	<footer>
		<p>Hak Cipta &copy; 2025</p>
	</footer>
	</div>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>