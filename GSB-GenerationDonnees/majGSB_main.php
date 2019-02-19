 Programme d'actualisation des lignes des tables,  
 cette mise à jour peut prendre plusieurs minutes...
<?php

include("include/fct.inc.php");

/* Modification des paramètres de connexion */

$serveur='mysql:host=localhost';
$bdd='dbname=gsb_frais';   		
$user='root' ;    		
$mdp='' ;	

/* fin paramètres*/

try {
    $pdo = new PDO($serveur.";".$bdd, $user, $mdp);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

try{$pdo->exec("SET CHARACTER SET utf8"); 
	echo "<br>c'est en cours!";}

catch(PDOException $e)
    {
    echo "pb utf8: " . $e->getMessage();
    }
set_time_limit(0);

try{
	creationFichesFrais($pdo);
	echo "<br>fiches frais ok";
	}
catch(PDOException $e)
    {
    echo "pbcreationfichesfrais: " . $e->getMessage();
    }
try{
	creationFraisForfait($pdo);
	echo "<br> fraisforfaitok";
	}
catch(PDOException $e)
    {
    echo "pbcreationfraisforfait: " . $e->getMessage();
    }
   
try{
	creationFraisHorsForfait($pdo);
	echo "<br>frais hors forfait ok";
	}
catch(PDOException $e)
    {
    echo "<br>pbcreationfraishorsforfait: " . $e->getMessage();
    }
    
try{
	majFicheFrais($pdo);
	echo "<br>fiches frais ok";
	}
catch(PDOException $e)
    {
    echo "<br>pbmajFicheFrais: " . $e->getMessage();
    }

?>
