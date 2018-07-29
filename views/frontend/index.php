<?php $title = 'Korentin Chaume '; ?>

<?php ob_start(); ?>

 <div class="row index-button">
	<div class="col-4"></div>
		  	<div class="col-4 mt-5">
				  <a class="btn btn-danger" href="accueil.html">Découvrir mon CV</a>
			</div>
	<div class="col-4"></div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('views/frontend/template/home.php'); ?>