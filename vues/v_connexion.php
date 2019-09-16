<div id="contenu">
      <h2>Identification utilisateur</h2>


<form method="POST" action="index.php?uc=connexion&action=valideConnexion">
   
    
			<p>
       <label id="leslabels" for="nom">Nom d'utilisateur :</label><br />
       <input id="login" type="text" name="login" placeholder="Saisir un nom d'utilisateur" size="30" maxlength="45" value=<?php print($_SESSION['login'])?>>
      </p>
			<p>
				<label id="leslabels" for="mdp">Mot de passe :</label><br />
			  <input id="mdp"  type="password" placeholder="Saisir un mot de passe" name="mdp" size="30" maxlength="45" value=<?php print($_SESSION['mdp'])?>>
      </p>
      <input type="checkbox" name="souvenir" id="cochersouvenir" <?php if(isset($_SESSION['checked'])) {print($_SESSION['checked']);unset($_SESSION['checked']);}?>/><label for="souvenir">Se souvenir de moi</label><br />
         <div id="boutonconnexion"><input type="submit" value="Connexion" name="valider"></div>
      </p>
</form>
      <br /><br /><br />
<div id="version">Version 0.1.2_beta</div></div>
</div>