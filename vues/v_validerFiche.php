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
<div id="contenu">
      <h2>Modification éventuelles des éléments forfaitisés</h2>
         
      <form method="POST"  action="index.php?uc=gererFrais&action=validerMajFraisForfait">
      <div class="corpsForm">
          
          <fieldset>
            <legend>Eléments forfaitisés
            </legend>
			<?php
				foreach ($lesFraisForfait as $unFrais)
				{
					$idFrais = $unFrais['idfrais'];
					$libelle = $unFrais['libelle'];
					$quantite = $unFrais['quantite'];
			?>
					<p>
						<label for="idFrais"><?php echo $libelle ?></label>
						<input type="text" id="idFrais" name="lesFrais[<?php echo $idFrais?>]" size="10" maxlength="5" value="<?php echo $quantite?>" >
					</p>
			
			<?php
				}
			?>
			
			
			
			
           
          </fieldset>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
      </form>
  </div>