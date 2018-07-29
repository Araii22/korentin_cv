<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <!-- Bootstrap -->
    <link href="public/css/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="public/css/style.css" rel="stylesheet">
	  
  </head>
  <body class="background">
	  <div class="container mt-5">
		  
		  <!--Titre-->
		<div class="row pt-4 mb-3">
			<div class="col-12 col-md-8">
			<h1>Korentin Chaume</h1>
			</div>
			<div class="col-12 col-md-8">
				<img src="public/images/400X200.gif" alt="" class="img-fluid"/>
			</div>
			
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
    <script  src="public/js/popper.min.js"></script>
    <script  src="public/js/bootstrap-4.0.0.js"></script>
  </body>
</html>