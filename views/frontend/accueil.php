<?php $title = 'Accueil - Korentin Chaume '; ?>

<?php ob_start(); ?>

<div class="row pt-5 mb-5 pb-5">
	<div class="col-1 col-sm-2"></div>
		<div class="col-10 col-sm-8 mt-5">
			  <div class="article mt-5">
				<p>Actuellement étudiant en deuxième année de BTS Système Numérique avec le CNED, je suis à la recherche d'un stage d'un mois pour septembre..  </p>
			  </div>
		</div>
	<div class="col-1 col-sm-2"></div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('views/frontend/template/pages.php'); ?>