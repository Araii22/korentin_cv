<?php 
//ici affichage des pages
function postPage()
{
	
		if ($_GET['page'] == 'accueil') 
		{
			require('views/frontend/accueil.php');
		}
		elseif ($_GET['page'] == 'formations') 
		{
			require('views/frontend/formations.php');
		}
		elseif ($_GET['page'] == 'divers') 
		{
			require('views/frontend/divers.php');
		}
		
		elseif ($_GET['page'] == 'mentions-legales') 
		{
			require('views/frontend/mentions-legales.php');
		}
		else {
			require('views/frontend/accueil.php');
		}
}

//ici envoie d'email <br>
function sendMail()
{
	/*// Ma clé privée
	$secret = "6Le09F4UAAAAACJTdvLGrlnvpuujo16-_XIPMdV8";
	// Paramètre renvoyé par le recaptcha
	$response = $_POST['g-recaptcha-response'];
	// On récupère l'IP de l'utilisateur
	$remoteip = $_SERVER['REMOTE_ADDR'];
	
	$api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" 
	    . $secret
	    . "&response=" . $response
	    . "&remoteip=" . $remoteip ;
	
	$decode = json_decode(file_get_contents($api_url), true);
	
	if ($decode['success'] == true) {*/
		// C'est un humain
		$adress = "allan@toketa.com";

$TO = $adress;

//ça c'est de la paperasse pour l'en-tête du message et pour que tout s'envoie bien
$head ="From:".$adress."\n";
$head .="X-Sender:<".$adress.">\n";
$head .="X-Mailer: PHP\n";
$head .="Return-Path:<".$adress.">\n";
$head .="Content-Type: text/plain; charset=utf-8\n";

//ensuite on passe les données dans des variables
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email_adress'];
$message = $_POST['message'];
	
//Maintenant on fait les trucs relou il faut tout sécurisé
	
   
    $nom=htmlspecialchars($_POST['nom']);
    $nom=trim($nom);
	
    $prenom=htmlspecialchars($_POST['prenom']);
    $prenom=trim($prenom);
	
	
	
	
    $email=htmlspecialchars($_POST['email_adress']);
    $email=trim($email);
	
	
	$message=htmlspecialchars($_POST['message']);
    $message=trim($message);
	
	
//là on définit le sujet du message qui apparaitra dans le mail
$sujet ="CV Korentin";

	
//Ensuite on écrit le message que l'on souhaite
	
	
$informations ="Bonjour,

".$prenom." ".$nom." souhaite te contacter



Son message :

".$message."

Vous pouvez prendre contact  par mail ".$email."

Allez hop ! au boulot !

";

//maintenant on envoie le mail !
$res = mail($TO, $sujet, $informations, $head);
	
$message_error = "Votre message a été envoyé";
$message_color = "success";
require('views/frontend/contact.php');
	
	}
	
	/*else {
		// C'est un robot ou le code de vérification est incorrecte
		$message_error = "Valider le Captcha";
		require('views/frontend/contact.php');
	}*/


