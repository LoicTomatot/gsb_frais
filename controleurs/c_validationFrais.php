<?php
include("vues/v_sommaireComptable.php");
$action = $_REQUEST['action'];
switch($action){
	//on affiche le choix des visiteurs
	case 'choisirVisiteur':{
		include('vues/v_choixVisiteur.php');
		break;
	}
	case 'choisirMoisVisiteur':{
		if(isset($_REQUEST['listeVisiteur'])){
			$idVisiteur = $_REQUEST['listeVisiteur'];
			$_SESSION['idVisiteur'] = $idVisiteur;
		}
		include('vues/v_choixVisiteur.php');
		include("vues/v_listeMoisValidationFiche.php");
		break;
	}
	case 'afficherFiches':{
		if(isset($_SESSION['idVisiteur'])){
			$idVisiteur = $_SESSION['idVisiteur'];
		}
		if(isset($_REQUEST['lstMois'])){
			$moisChoisi = $_REQUEST['lstMois'];
			$_SESSION['moisChoisi'] = $moisChoisi;
		}
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$moisChoisi);
		$lesFraisForfait= $pdo->getLesFraisForfait($idVisiteur,$moisChoisi);
		include('vues/v_choixVisiteur.php');
		include("vues/v_listeMoisValidationFiche.php");
		include("vues/v_validerFiche.php");
		break;
	}
}

?>