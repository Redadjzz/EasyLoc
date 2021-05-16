<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Inscription</title>
</head>
<body>


	<br/><br/>

	<div class="login" align="center">
		<h2>Inscription</h2>
		<br><br>
		<form id="myForm" action="traitement.php" method="POST">
			
			<table align="center">
				<tr>
					<td>
						<label for="Nom">Nom :</label>
					</td>
					<td>
						<input placeholder="Nom" type="text" name="Nom" id="Nom">
						<br>
						<span id="error"></span>
					</td>
				</tr>

				<tr>
					<td>	
						<label for="Prenom">Prénom :</label>
					</td>
					<td>
						<input placeholder="Prenom" type="text" name="Prenom" id="Prenom">
						<br>
						<span id="errorPrenom"></span>
					</td>
				</tr>


				<tr>
					<td>	
						<label for="Pseudo">Pseudo :</label>
					</td>
					<td>
						<input placeholder="Pseudo" type="text" name="Pseudo" id="Pseudo">
						<br>
						<span id="errorPseudo"></span>
					</td>
				</tr>

				<tr>
					<td>	
						<label for="Email">Email :</label>
					</td>
					<td>
						<input placeholder="Email" type="email" name="Email" id="Email">
						<br>
						<span></span>
					</td>
				</tr>

				<tr>
					<td>	
						<label for="Password">Password :</label>
					</td>
					<td>
						<input placeholder="Password" type="password" name="Password" id="Password">
						<br>
						<span id="erroPass"></span>
					</td>
				</tr>
				<tr>
					<td>	
						<label for="VerifPassword">Verification Password :</label>
					</td>
					<td>
						<input placeholder="Password" type="password" name="VerifPassword" id="VerifPassword">
						<br>
						<span id="erroPassVerif"></span>
					</td>
				</tr>	

			</table>
			<br>

			<button type="submit" value="Inscription">Inscription</button>
			
			
		</form>
	</div>
	<script src="../js/jsForm.js"></script>

	
</body>
<footer>

</footer>
</html>