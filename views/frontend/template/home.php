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
	  <div class="container mt-5">
		  
		  <!--Titre-->
		<div class="row pt-4 mb-3">
			<div class="col-12 col-md-8">
			<h1>Korentin Chaume</h1>
			</div>
			<div class="col-12 col-md-4">
				<img src="public/images/400X200.gif" alt="" class="img-fluid"/>
			</div>
			
		  </div>
		  
		  <!-- content -->
		 <?= $content ?>
		  
		  
	  </div>
	  
	  

   
	  
	 <?php include('footer.php') ?>
    
  </body>
	    

</html>