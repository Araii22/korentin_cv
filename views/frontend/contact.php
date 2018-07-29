<?php $title = 'Contact - Korentin Chaume '; ?>

<?php ob_start(); ?>

<section>
<div class="container-fluid">
	<div class="row pt-4">
		<div class="col-12 col-md-3">&nbsp;</div>
		<div class="col-12 col-md-6"> 	
				<div class="row">
				  <form action="contact" method="post" class="col-12">
						<div class="text-center title-img col-12 mb-1">
						<h1>Prenons Contact !</h1>
						<?php if($message_error) {?>
							<h2><?= $message_error ?></h2>
							<?php } ?>
					 </div>

					  <div class="row">
						  <!--nom -->
							<div class="col-12 col-md-6">
								<div class="form-group">
								 <label for="nom">Nom</label>
								 <input name="nom" type="text" class="form-control" id="nom" title="Renseignez votre nom">
								 </div>
						   </div>
						  <!--prenom-->
						   <div class="col-12 col-md-6">
							  <div class="form-group">
								<label for="prenom">Prénom</label>
							  <input class="form-control" type="text" id="prenom" name="prenom" title="Renseignez votre prénom">
							</div>
						   </div>
					  </div>
				
						  <!--code postal-->
					  <div class="form-group">
						<label for="email_adress">Email</label>
						<input name="email_adress" type="email" class="form-control" id="email_adress" placeholder="nom@exemple.com" title="Votre e-mail">
					  </div>
					  
					 <!-- message-->
					  <div class="form-group">
						<label for="message">Message</label>
						<textarea name="message" rows="3" class="form-control" id="message" placeholder="Bonjour, je souhaite être contacté(e) au plus vite !" title="Votre message"></textarea>
					  </div>
							
					  <!--Captcha -->
					  <!--<div class="g-recaptcha" data-sitekey="6Le09F4UAAAAAFCpKKsT9k2SHdzrBWDknAw9oPQq"></div>-->
					  <br />
						<div class="form-group">
							<input type="submit" class="btn btn-outline-light" value="Envoyer">
						</div>
						<h6><i>**Les informations renseignées nous sont transmises pour faciliter la prise de contact, elles ne sont ni sauvegardées ni réutilisées après lecture du message.</i></h6>
					</form>
				</div>
			
	</div>
		<div class="col-12 col-md-3">&nbsp;</div>
	</div>
</div>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('views/frontend/template/pages.php'); ?>

