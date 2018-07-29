<?php 
session_start();

require_once('controller/frontend.php');
require_once('controller/backend.php');

try 
{ 
	//affichage des pages du site
	if ( isset($_GET['page']))
	{
	//on affiche les pages sauf contact
	    if ($_GET['page'] != 'contact' && $_GET['page'] != 'membres' && $_GET['page'] != 'membre' && $_GET['page'] != 'EnaVANTbusineSSGuinGamp') 
		{
        	postPage($_GET['page']);
		} 
		// affichage des membres
		elseif ($_GET['page'] == 'membres') 
		{
        	listMembers();
		}
		//affichage d'un membre
		elseif ($_GET['page'] == 'membre') 
		{
			if (isset($_GET['entreprise']))
			{
				membre();	
			}
			else 
			{	
				listMembers();
			}
        	
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
           		$message_error = "Les champs : Nom, Prénom, E-mail, et Message sont obligatoires ainsi que le Captcha.";
			    
				require('views/frontend/contact.php');
			}
			//si le formulaire n'as jamais été rempli
			else {
				$message_error = '';
				require('views/frontend/contact.php');
			}
		}
		elseif ($_GET['page'] == 'EnaVANTbusineSSGuinGamp') {
			
			
				 //on redemande si les variable existe
				 if (!empty($_POST['email']) && !empty($_POST['passwd']))
				 {
					 //on affiche le bon controlleur
					 postConnect($_POST['passwd'],$_POST['email']);
				 }
				 elseif (!empty($_SESSION['email']) && !empty($_SESSION['passwd']))
				 {
					 //on fais la même chose qu'au dessus
					 postConnect($_SESSION['passwd'],$_SESSION['email']);
				 }
				 
				else {
					$message_error = "merci de remplir le formulaire";
					require('views/backend/connexion.php');
				}
			
		}
    	else {
			
        require('views/frontend/accueil.php');
			
		}
		
	}
	else {
		
	require('views/frontend/accueil.php');
     
	}
}

 catch(Exception $e) 
 { // S'il y a eu une erreur, alors...
    $errorMessage = $e->getMessage();
	require('erreurs/views/template/errorView.php');
}