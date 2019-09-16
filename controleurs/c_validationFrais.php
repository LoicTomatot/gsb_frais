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
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0];
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
		include('vues/v_choixVisiteur.php');
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0];
		include("vues/v_listeMoisValidationFiche.php");
		break;
	}
}

?>