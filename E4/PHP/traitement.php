<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	include("infoConnection.php");
	$bdd = new PDO("mysql:host=$serverName;dbname=$database;charset=utf8", $user, $password);

		$nom = htmlspecialchars($_POST['Nom']);
		$prenom = htmlspecialchars($_POST['Prenom']);
		$pseudo = htmlspecialchars($_POST['Pseudo']);
		$passwordUser = $_POST['Password'];
		$passwordhash = password_hash($passwordUser,PASSWORD_DEFAULT);

		$is_admin = 0 ; 

		//$passwordhash = password_hash($password, PASSWORD_DEFAULT);
		$email = htmlspecialchars($_POST['Email']);

		$request = $bdd->prepare("INSERT INTO Users(Nom,Prenom,Pseudo,Email,Password,is_admin) VALUES(:nom, :prenom,:pseudo, :email, :password, :is_admin)");
		$request->execute(array(
			':nom' => $nom ,
			':prenom' => $prenom, 
			':pseudo' => $pseudo, 
			':email' => $email,
			':password' => $passwordhash,
			':is_admin' => $is_admin 
		));
		

			echo 'Inscription Valider';
			

			sleep(2);
			




?>

</body>
</html>