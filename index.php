<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	//stylesmission3.css
	case 'connexion':{
		include("vues/v_entete.php") ;
		include("controleurs/c_connexion.php");break;
	}
	//stylesmission3_2.css
	case 'gererFrais' :{
		include("vues/v_entete2.php") ;
		include("controleurs/c_gererFrais.php");break;
	}
	//stylesmission3_3.css
	case 'etatFrais' :{
		include("vues/v_entete3.php") ;
		include("controleurs/c_etatFrais.php");break; 
	}

	case 'validationFrais' :{
		include("vues/v_entete2.php") ;
		include("controleurs/c_validationFrais.php");break;
	}
}
include("vues/v_pied.php") ;
?>

