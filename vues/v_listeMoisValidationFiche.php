 <div id="boite_choix_visiteur">
      <form action="index.php?uc=validationFrais&action=afficherFiches" method="post">
      <div class="corpsForm">
	 
        <label for="lstMois" accesskey="n">Mois : </label>
        <select id="lstMois" name="lstMois">
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
        <input type="submit" value="Valider le mois" size="20" />
      </div>
        
      </form>