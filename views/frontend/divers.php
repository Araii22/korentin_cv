<?php $title = 'Divers - Korentin Chaume '; ?>

<?php ob_start(); ?>
	<div class="row pt-5 mb-5 pb-5">
		  
		  	<div class="col-12 mt-5">
				  <div class="article mt-5">
				     <!-- mise en page du header-->
					<div class="row header-post">
						<div class="col-12 col-md-4">&nbsp;</div>
						<div class="col-12 col-md-4">
							<p>Informatique et réseaux </p>
						</div>
						<div class="col-12 col-md-4"> &nbsp;</div>
					</div>
						<hr>
						 <!-- mise en page contenu -->
					<div class="row pt-4">
						<div class="col-12 col-md-8"> &nbsp;</div>
					 	<div class="col-12 col-md-8">
						 	<p>Depuis longtemps passioné par l'informatique et les réseaux, j'ai commencé à apprendre le fonctionnement d'un ordinateur ainsi que 
							des réseaux de manières autonomes sur plusieurs sites spécialisés.</p>
						</div> 
					</div>
				</div>
				<div class="article mt-5">
					<!--mise en page du header -->
					<div class="row header-post">
						<div class="col-12 col-md-4"> &nbsp; </div>
						<div class="col-12 col-md-4">
							<p> Sports </p>
						</div>
						<div class="col-12 col-md-4"> &nbsp;</div>
					</div>
					<hr>
					<!-- mise en page du contenu-->
					<div class="row pt-4">
						<div class="col-12 col-md-8"> &nbsp; </div>
						<div class="col-12 col-md-8"> 
							<p> Je pratique le Judo depuis 15 ans, le Jiu-Jitsu depuis 8 ans et l'Art du Déplacement depuis 3 ans. </p>
						</div>
					</div>
				</div>
				<div class="article mt-5">
					<!-- mise en page du header -->
					<div class="row header-post">
						<div class="col-12 col-md-4"> &nbsp; </div>
						<div class="col-12 col-md-4"> 
							<p> Photographie </p>
						</div> 
					</div>
					<hr>
					<!-- mise en page du contenu-->
					<div class="row pt-4">
						<div class="col-12 col-md-8"> &nbsp; </div>
						<div class="col-12 col-md-8">
							<p> </br> Je suis photographe amateur depuis plus d'un an. </p> 
						</div>
						<div class="col-12 col-md-4">
							<a href="https://www.flickr.com/photos/162820224@N05/" target="_blank"> <img src="public/images/flickr.png" width="50%" class="img_fluid" alt=""></a>
						</div>
					</div>
				</div>
				
			</div>

<?php $content = ob_get_clean(); ?>

<?php require('views/frontend/template/pages.php'); ?>
