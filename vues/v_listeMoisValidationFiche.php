 <?php $lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0]; ?>
 <div id="boite_choix_visiteur" style="height: 110px;">
      <form action="index.php?uc=validationFrais&action=afficherFiches" method="post">
      <div class="corpsForm">

        <label for="lstMois" accesskey="n" style="font-size: 15px;">Fiche de <?php
        $visiteur = $pdo->selectionVisiteurId($_SESSION['idVisiteur']);$visiteurChoisi = $visiteur->fetch();
        echo $visiteurChoisi['prenom']." ".strtoupper($visiteurChoisi['nom']);
        ?></label>
        <select id="lstMois" name="lstMois" style="margin-top: 5px;">
            <?php
			foreach ($lesMois as $unMois)
			{
			    $mois = $unMois['mois'];
				$numAnnee =  $unMois['numAnnee'];
				$numMois =  $unMois['numMois'];
				if($mois == $moisChoisi){
				?>
				<option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
			
			}
           
		   ?>    
            
        </select>
      </div>
      <div class="piedForm">
        <input type="submit" value="<?php if(isset($moisChoisi)){ print("Modifier le mois"); }else{ print("Valider le mois"); }?>" size="20" />
      </div>
        
      </form>