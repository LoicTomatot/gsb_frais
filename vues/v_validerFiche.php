<div id="validerFiche">
	<form action="index.php?uc=vlidationFrais&action=validerFicheFrais" method=post>
		<label accesskey="n">Fiche de <?php
        $visiteur = $pdo->selectionVisiteurId($_SESSION['idVisiteur']);$visiteurChoisi = $visiteur->fetch();
        echo $visiteurChoisi['prenom']." ".strtoupper($visiteurChoisi['nom']);
        ?></label><br />
        <?php
        $fichefrais = $pdo->getLesInfosFicheFrais($idVisiteur,$mois);
        $fichefrais-> fetch();
        ?>
        Montant actuellement validé : <?php echo fichefrais['montantValide'] ?>
        <input type="submit" value="Valider la fiche">
    </form>
</div>