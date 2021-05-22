<?php
session_start(); 
include("infoConnection.php");
$bdd = new PDO("mysql:host=$serverName;dbname=$database;charset=utf8", $user, $password);

	if (@$_SESSION["id"] == @intval($_GET["iduser"])){
	
		$idBien = intval($_GET["id"]); 
		$typeBien = $_GET["type"];

		$sql = "DELETE * FROM ".$typeBien." WHERE id_Appartement=".$idBien;
		echo $sql ;
		$request = $bdd->prepare($sql);
		$request->execute();

		echo "données supprimé !" ;

			
		}

	}
	else{

		echo "Vous vous etes perdu ?";

	}


 ?>