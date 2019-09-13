<?php
include("vues/v_sommaireComptable.php");
$action = $_REQUEST['action'];
switch($action){
	case 'choisirVisiteur':{
		include('vues/v_choixVisiteur.php');
		break;
	}
	case 'choisirMoisVisiteur':{
		if(isset($_REQUEST['listeVisiteur'])){
			$idVisiteur = $_REQUEST['listeVisiteur'];
		}
		include('vues/v_choixVisiteur.php');
		break;
	}
}

?>