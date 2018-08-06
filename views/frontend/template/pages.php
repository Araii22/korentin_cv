<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <!-- Bootstrap -->
	<?php include('public/css/style.css') ?>
	<?php include('public/css/bootstrap-4.0.0.css') ?>
	  
  </head>
  <body class="background">
	  <div class="container">
		  
		  <!--Titre-->
		<div class="row mt-4 mb-3 d-none d-md-block">
			  <div class="col-6 ">
				<h1>Korentin Chaume</h1>
			  </div>
		  </div>
		  
		 <!-- menu-->
	  	<div class="row mb-5">
 			<div class="col-3"></div>
			  <div class="col-12 col-md-6">
				  <nav class="navbar navbar-expand-md navbar-korentin bg-crimson">
					  
					  <a class="navbar-brand d-md-none text-center" href="#">Korentin <br />Chaume</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
												<span class="navbar-toggler-icon"></span>
											  </button>
					  <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
						<ul class="navbar-nav mx-auto mt-2 mt-lg-0 nav-fill">
						  <li class="nav-item active ">
							<a class="nav-link" href="accueil">Accueil<span class="sr-only">(current)</span></a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="formations">Formations</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="divers">Divers</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="contact">Contact</a>
						  </li>
						</ul>
					  </div>
					</nav>
				</div>
			  <div class="col-3"></div>
		</div>
		  
		  <!-- content -->
		  
		  <?= $content ?>
		  
		  
	  </div>
	  
	  

   
	  
	  
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © MyWebsite. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="public/js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script  async src="public/js/popper.min.js"></script>
    <script async src="public/js/bootstrap-4.0.0.js"></script>
  </body>

</html>