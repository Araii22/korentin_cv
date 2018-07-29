
	  <!--lien anti cookies pour le fichier template.php-->
		
		<?php 
          if (!isset($_COOKIE['accept_cookie'])) {
         ?>
	  <div class="container-fluid cookie-alert fixed-bottom">
		  <div class="row border-light">
          <div class="col-12 text-center cookiee  m-0">
            <p>En poursuivant votre navigation sur ce site vous accepter l'utilisation des cookies et autres technologies similaire, si vous ne souhaitez pas autorisé le stockage de cookies sur votre navigateur reportez vous à ce <a href="mentions-legales#cookies">document</a> pour voir les solutions qui s'offre à vous. 	<a href="cookie" class="btn btn-outline-light">ok</a></p>
          </div>
       </div>
	  </div>
		  
    <?php 
     }
		  else {
			  echo'';
		  }
     ?>



<footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © MyWebsite. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    