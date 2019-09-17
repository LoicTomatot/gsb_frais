<div id="validerFiche">
	<form action="index.php?uc=vlidationFrais&action=validerFicheFrais" method=post>
		<label accesskey="n">Fiche de <?php
        $visiteur = $pdo->selectionVisiteurId($_SESSION['idVisiteur']);$visiteurChoisi = $visiteur->fetch();
        $mois = substr($_REQUEST['lstMois'],4);
        $annee = substr($_REQUEST['lstMois'],0,4);
        echo $visiteurChoisi['prenom']." ".strtoupper($visiteurChoisi['nom'])." au mois de ".$mois."/".$annee;
        ?></label><br />
        <?php
        $fichefrais = $pdo->getLesInfosFicheFrais($_SESSION['idVisiteur'],$_REQUEST['lstMois']);
        ?>
        <span id="montantValiderText">Montant actuellement validé : <?php echo $fichefrais['montantValide'] ?> €</span>
        <br />
        <input type="submit" value="Valider la fiche">
    </form>
</div>
