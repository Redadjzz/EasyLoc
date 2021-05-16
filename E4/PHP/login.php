<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Login</title>
</head>
<body>

	
	<br/><br/>

	<div>
		<h1>Connexion</h1>
		<br>
		<form action="verif.php" method="POST">
			<table align="center">	
				<tr>
					<td>
						<label>Nom d'utilisateur</label>
					</td>

					<td>
						<input type="text" name="username" id="username">
					</td>
				</tr>
	
				<tr>
					<td>
						<label>Mot de passe</label>
					</td>

					<td>
						<input type="password" name="passwordConnexion" id="password">
					</td>
				</tr>

			</table>	
			<input type="submit" name="formConnexion" value="Connexion">
			<input type="button" onclick="window.location.href='inscription.php';"name="inscription" value="Inscription">
		</form>
		<?php
		if(isset($erreur)){
			echo '<font color="red">' .$erreur ;
		}
		?>
	</div>

	
</body>
<footer>

</footer>
</html>