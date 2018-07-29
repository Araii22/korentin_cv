<?php 

require_once('controller/frontend.php');

try 
{ 
	//affichage des pages du site
	if (isset($_GET['page']) && !empty($_GET['page']))
	{
	//on affiche les pages sauf contact
	    if ($_GET['page'] != 'contact') 
		{
        	postPage($_GET['page']);
		} 
		// on affiche contact
		elseif (isset($_GET['page']) && $_GET['page']  == 'contact')
		{
			//Si le formulaire à été rempli alors on execute
		  if  (isset($_POST) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email_adress']) && !empty($_POST['message']))
		    {
		 	  sendMail($_POST);
		    }
			// si le formulaire à été rempli mais pas compléter
		  elseif (!empty($_POST) && empty($_POST['nom']) && empty($_POST['prenom']) && empty($_POST['email_adress']) && empty($_POST['message']))
			{
           		$message_error = "Les champs : Nom, Prénom, E-mail, et Message sont obligatoires";
			    
				require('views/frontend/contact.php');
			}
			//si le formulaire n'as jamais été rempli
			else {
				$message_error = '';
				require('views/frontend/contact.php');
			}
		}
    	else {
			
        require('views/frontend/accueil.php');
			
		}
		
	}
	else {
		
	require('views/frontend/index.php');
     
	}
}


//voir plus tard : 
 catch(Exception $e) 
 { // S'il y a eu une erreur, alors...
    $errorMessage = $e->getMessage();
	require('erreurs/views/template/errorView.php');
}