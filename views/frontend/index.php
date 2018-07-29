<?php $title = 'Korentin Chaume '; ?>

<?php ob_start(); ?>

 <div class="row index-button">
	<div class="col-12 col-md-3"></div>
		  	<div class="col-12 col-md-6 mt-5 pr-2 pl-2">
				  <a class="btn btn-danger" href="accueil">Découvrir mon CV</a>
			</div>
	<div class="col-12 col-md-3"></div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('views/frontend/template/home.php'); ?>