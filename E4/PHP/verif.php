<?php
//connexion a la base de donnée
	require "require.php";
	init_php_session();
	include("infoConnection.php");
	$bdd = new PDO("mysql:host=$serverName;dbname=$database;charset=utf8", $user, $password);

		

		if(isset($_POST['formConnexion'])) // si formulaire est envoyer 
		{
			// je recuper les données du forulaire 
			$username = htmlspecialchars($_POST['username']); 
			$password = htmlspecialchars($_POST['passwordConnexion']);

			

			if(!empty($username) AND !empty($password)) // si les champs username et password ne sont pas vide 
			{
				$requestConn = $bdd->prepare("SELECT Password FROM Users where Pseudo = ? "); // j'interoge la base de données pour recupere le hash du password
				$requestConn->execute(array($username));
				$PasswordInfo = $requestConn->fetch(); // je stocke les donnés dans un tableaux
				$verifPass = $PasswordInfo["Password"];//  je stocke le hash du password 

				if(password_verify($password,$verifPass)){
					$newRequest = $bdd->prepare("SELECT * FROM Users where Pseudo = ?");
					$newRequest->execute(array($username));
					$userinfo = $newRequest->fetch();
					$userexist = $newRequest->rowCount(); // je recupere le nombre de colonne corespondant a ma requete 

					if($userexist == 1 && $userinfo['is_admin'] == 1 ){ // si il 1 corresspondance et que c'est un admin 
					
						$_SESSION['id'] = $userinfo['id_user']; // je stocke l'id de l'user dans une session id 
						$_SESSION['pseudo']= $userinfo['Pseudo']; // je stocke le pseudo dans une session pseudo
						header("location:Q85W5YZpwLVcBZPs.php?id=".$_SESSION['id']); // je redirige l'admin sur une page secrete avec son id en parametre pour pouvoir controler que personne d'autre que l'admin ne puisse avoir accés au contenue de cette page
					}

					else if($userexist == 1 && $userinfo['is_admin'] == 0 ) // si l'utilisateur n'est pas un admin 
					{
						
						$_SESSION['id'] = $userinfo['id_user'];
						$_SESSION['pseudo']= $userinfo['Pseudo'];
						$_SESSION['logged'] = true ;

						echo $_SESSION['id'];
						header("location:../Index.php?id=".$_SESSION['id']); // je le redirige vers la page d'accueil 

					}

				}
				else
				{
					
					$_SESSION['logged'] = false;
					$erreur ="Mauvais pseudo ou mauvais mot de passe";
					echo $erreur;
				}
			

			}else {
				$erreur = "Tous les champs doivent être complétés ";
				echo $erreur;
			}
		}


?>