<?php 



//affichage des pages
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
		else {
			require('views/frontend/accueil.php');
		}
}


//Page contact 
function sendMail()
{
	// Ma clé privée
	/*$secret = "6Le09F4UAAAAACJTdvLGrlnvpuujo16-_XIPMdV8";
	// Paramètre renvoyé par le recaptcha
	$response = $_POST['g-recaptcha-response'];
	// On récupère l'IP de l'utilisateur
	$remoteip = $_SERVER['REMOTE_ADDR'];
	
	$api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" 
	    . $secret
	    . "&response=" . $response
	    . "&remoteip=" . $remoteip ;
	
	$decode = json_decode(file_get_contents($api_url), true);
	
	if ($decode['success'] == true) { */
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
$civilite = $_POST['civilite'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$tel = $_POST['telephone'];
$email = $_POST['email'];
$sujet_message = $_POST['sujet'];
$message = $_POST['message'];
$adhesion = $_POST['adhesion'];
	
//Maintenant on fait les trucs relou il faut tout sécurisé
	
    $civilite=htmlspecialchars($_POST['civilite']);
    $civilite=trim($civilite);
	
    $nom=htmlspecialchars($_POST['nom']);
    $nom=trim($nom);
	
    $prenom=htmlspecialchars($_POST['prenom']);
    $prenom=trim($prenom);
	
	$entreprise=htmlspecialchars($_POST['entreprise']);
    $entreprise=trim($entreprise);
	
	$codepostal=htmlspecialchars($_POST['codepostal']);
    $codepostal=trim($codepostal);
	
    $tel=htmlspecialchars($_POST['tel']);
    $tel=trim($tel);
	
    $email=htmlspecialchars($_POST['email_adress']);
    $email=trim($email);
	
	$sujet_message=htmlspecialchars($_POST['sujet']);
    $sujet_message=trim($sujet_message);
	
	$message=htmlspecialchars($_POST['message']);
    $message=trim($message);
	
	
//là on définit le sujet du message qui apparaitra dans le mail
$sujet ="Korentin Web site ".$sujet_messsage."\n";

	
//Ensuite on écrit le message que l'on souhaite
	
	
$informations ="Bonjour,

".$civilite." ".$prenom." ".$nom." travaillant chez ".$entreprise." souhaite des informations au sujet de ".$sujet_message."


Son message :

".$message."

Vous pouvez prendre contact au ".$tel." ou par mail ".$email."

Allez hop ! au boulot !
".$codepostal."
";

//maintenant on envoie le mail !
$res = mail($TO, $sujet, $informations, $head);
	
$message_error = "Votre message a été envoyé";
require('views/frontend/contact.php');
	/*}
	
	else {
		// C'est un robot ou le code de vérification est incorrecte
		$message_error = "Valider le Captcha";
		require('views/frontend/contact.php');
	}
*/
}