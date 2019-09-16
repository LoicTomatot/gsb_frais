<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		if(isset($_REQUEST['login']) && isset($_REQUEST['mdp']))
		{
			$login = $_REQUEST['login'];
			$mdp = $_REQUEST['mdp'];
		}
		$visiteur = $pdo->getInfosVisiteur($login,$mdp);
		if (isset($_POST['souvenir']) == true)
		{
			$_SESSION['login'] = $login;
			$_SESSION['mdp'] = $mdp;
			$_SESSION['checked'] = "checked";
		}
		else{
			$_SESSION['login'] = "";
			$_SESSION['mdp'] = "";
		}
		if(!is_array( $visiteur)){
			$comptable = $pdo->getInfosComptable($login,$mdp);
			if(!is_array( $comptable)){
				ajouterErreur("Login ou/et mot de passe incorrect");
				include("vues/v_erreurs.php");
				include("vues/v_connexion.php");
		}
		else
		{
			$id = $comptable['id'];
			$nom =  $comptable['nom'];
			$prenom = $comptable['prenom'];
			connecter($id,$nom,$prenom);
			include("vues/v_sommaireComptable.php");
			?>
			<div style = "
    text-align: center;
    font-size: 30px;
    ">Vous êtes connecté !
    <div style = "
    text-align: center;
    font-size: 15px;
    margin-bottom: 200px;
    margin-top: 20px;
    ">Votre profil Comptable est activé.</div>
    </div><?php
			}
		}

		else{
			$id = $visiteur['id'];
			$nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
			connecter($id,$nom,$prenom);
			include("vues/v_sommaire.php");
			?>
			<div style = "
    text-align: center;
    font-size: 30px;
    ">Vous êtes connecté !
    <div style = "
    text-align: center;
    font-size: 15px;
    margin-bottom: 200px;
    margin-top: 20px;
    ">Votre profil Utilisateur est activé.</div>
    </div><?php
		}
		break;
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>