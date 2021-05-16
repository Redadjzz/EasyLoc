<?php
	require "require.php";
	init_php_session();
		$serverName="localhost";
		$user="Easyloc_user";
		$password="pass123";
		$database="Easyloc";

		$bdd = new PDO("mysql:host=$serverName;dbname=$database;charset=utf8", $user, $password);

		if(isset($_POST['formConnexion']))
		{
			$username = htmlspecialchars($_POST['username']);
			$password = $_POST['passwordConnexion'];
			$passwordHash = sha1($password);

			if(!empty($username) AND !empty($passwordHash))
			{
				$requestConn = $bdd->prepare("SELECT * FROM Users where Pseudo = ? AND Password = ? ");
				$requestConn->execute(array($username,$passwordHash));
				$userinfo = $requestConn->fetch();
				$userexist = $requestConn->rowCount();

				if($userexist == 1 && $userinfo['is_admin'] == 1 ){
				
					$_SESSION['id'] = $userinfo['id_user'];
					$_SESSION['pseudo']= $userinfo['Pseudo'];
					header("location:Q85W5YZpwLVcBZPs.php?id=".$_SESSION['id']);
				}

				else if($userexist == 1 && $userinfo['is_admin'] == 0 )
				{
					
					$_SESSION['id'] = $userinfo['id_user'];
					$_SESSION['pseudo']= $userinfo['Pseudo'];

					echo $_SESSION['id'];
					header("location:../Index.php?id=".$_SESSION['id']);

				}

				else
				{
					$erreur ="Mauvais pseudo ou mauvais mot de passe";
					echo $erreur;
				}
			}

			else {
				$erreur = "Tous les champs doivent être complétés ";
				echo $erreur;
			}
		}


?>