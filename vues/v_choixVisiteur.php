﻿ <div id=boite_choix_visiteur>
 	<form method="POST" action="index.php?uc=validationFrais&action=choisirMoisVisiteur">

        <label id="leslabels" for="nom">Visiteur :</label><br />
        <select id="listeVisiteur" name="listeVisiteur">
        	<?php
        	$req = $pdo->selectionVisiteur();
        	while($data = $req->fetch()){
        		//on vérifie si le comptable a déjà choisie un visiteur
        		if(isset($idVisiteur)){
        			if($data['id'] == $idVisiteur){
        				?>
        				<option value="<?php echo $data['id'] ?>" selected><?php echo $data['nom'],"&nbsp",$data['prenom']; ?></option><?php
        			}
        		}
        		?>
        		<option value="<?php echo $data['id'] ?>"><?php echo $data['nom'],"&nbsp",$data['prenom']; ?></option><?php
        	}
        ?>
        </select>
        <input type="submit" value="<?php if(isset($idVisiteur)){ print("Modifier le visiteur"); }else{ print("Choisir le visiteur"); }?>" >
    </form>
</div>