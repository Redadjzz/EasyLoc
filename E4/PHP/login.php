<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="index.js"></script>
	<!------ Include the above in your HEAD tag ---------->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<title>Login</title>
</head>
<body>

	<?php include("../include/header.php")?>
	<br/><br/>

	<div id="Connexion" style="background-color: rgba(0, 0, 0, 0.5);  border-radius: 10px; margin-top: 13%; height: 300px;width: 420px; margin-right: auto;margin-left: auto;display: block;"  >
		<h1 style="color: white;margin-bottom: -35px;" class="d-flex justify-content-center" >Connexion</h1><br> 		<br>
		<form action="verif.php" method="POST">
			<fieldset>

			<table class="d-flex justify-content-center" >	

				<tr>

					<td>

						<p ><span class="fa fa-user fa-2x" style="float: top;"></span><input  type="text" name="username" id="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" style="width: 270px;">
					</td>
				</tr>
	
				<tr>

					<td>
						<p><span class="fa fa-lock fa-2x" style="float: top;margin-right: 8px;"></span><input  type="password" name="passwordConnexion" id="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping" style="width: 270px;" ><p>
					</td>

				</tr>
				

			</fieldset>
			</table>
			<div class="d-flex justify-content-center">
			<input style="margin-top: 20px;"  type="submit" name="formConnexion" value="Connexion" class="btn btn-light d-grid gap-2 col-4 mx-auto">
			<input style="margin-top: 20px; margin-left: 50px;"  type="button" onclick="window.location.href='inscription.php';"name="inscription" value="Inscription" class="btn btn-light d-grid gap-2 col-4 mx-auto" >
		</form>
		<?php
		if(isset($erreur)){
			echo '<font color="red">' .$erreur ;
		}
		?>
	</div>
	</div>

	
</body>

<footer>
</footer>
</html>