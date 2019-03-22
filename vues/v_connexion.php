<div id="contenu">
      <h2>Identification utilisateur</h2>


<form method="POST" action="index.php?uc=connexion&action=valideConnexion">
   
    
			<p>
       <label id="leslabels" for="nom">Nom d'utilisateur :</label><br />
       <input id="login" type="text" name="login" placeholder="Saisir un nom d'utilisateur" size="30" maxlength="45">
      </p>
			<p>
				<label id="leslabels" for="mdp">Mot de passe :</label><br />
			  <input id="mdp"  type="password" placeholder="Saisir un mot de passe" name="mdp" size="30" maxlength="45">
      </p>
      <input type="checkbox" name="souvenir" id="cochersouvenir" /><label for="souvenir">Se souvenir de moi</label><br />
         <div id="boutonconnexion"><input type="submit" value="Connexion" name="valider"></div>
      </p>
</form>
      <br /><br /><br />
<div id="version">Version 0.1.0</div></div>
</div>