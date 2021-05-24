<?php  
session_start(); 
include("infoConnection.php");
$bdd = new PDO("mysql:host=$serverName;dbname=$database;charset=utf8", $user, $password);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
  <title>Ajout d'utilisateur</title>
  <?php include("../include/header.php")?>
</head>
<body>


  <br/><br/>

<div class="d-flex justify-content-center">
  <div class="login" align="center" style="background-color: rgba(0, 0, 0, 0.5);  border-radius: 10px; margin-top: 10%; height: 600px;width: 700px;">
    <h2 style=" padding: 15px 15px 15px 15px ; color: white; font-size: 3em;">Ajout d'utilisateur</h2>
    <br><br>
    <form id="myForm" action="" method="POST">
      
      <table align="center">
        <tr>
          <td>
            <input type="text" name="Nom" id="Nom" class="form-control" placeholder="Nom" aria-label="Nom" aria-describedby="addon-wrapping" style="width: 500px">
            <br>
            <span id="error"></span>
          </td>
        </tr>

        <tr>
          <td>
            <input type="text" name="Prenom" id="Prenom" class="form-control" placeholder="Prenom" aria-label="Prenom" aria-describedby="addon-wrapping" style="width: 500px">
            <br>
            <span id="errorPrenom"></span>
          </td>
        </tr>


        <tr>
          <td>
            <input type="text" name="Pseudo" id="Pseudo" class="form-control" placeholder="Pseudo" aria-label="Pseudo" aria-describedby="addon-wrapping" style="width: 500px">
            <br>
            <span id="errorPseudo"></span>
          </td>
        </tr>

        <tr>
          <td>
            <input type="email" name="Email" id="Email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping" style="width: 500px">
            <br>
            <span></span>
          </td>
        </tr>

        <tr>

          <td>
            <span class="fa fa-lock" style="float: left;margin-right: -3%;"></span><input type="password" name="Password" id="Password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping" style="width: 500px">
            <br>
            <span id="erroPass"></span>
          </td>
        </tr>
        <tr>
          <td>
          <span class="fa fa-lock" style="float: left;margin-right: -3%;"></span><input type="password" name="Verification Password" id="VerifPassword" class="form-control" placeholder="Verification Password" aria-label="Verification Password" aria-describedby="addon-wrapping" style="width: 500px">
            <br>
            <span id="erroPassVerif"></span>
          </td>
        </tr> 

        <tr>
          <td>
            <label>Admin</label>
            <input type="radio" id="Admin" name="isAdmin" value="Admin">

        
             <label>Non Admin</label>
             <input type="radio" id="NonAdmin" name="isAdmin" value="Non_admin">
          </td>
        </tr>

      </table>

      <button  class="btn btn-light d-grid gap-2 col-6 mx-auto" name ="AjoutUtilisateur" type="submit" value="AjoutUtilisateur" style="color: black; ">Ajout d'utilisateur</button>
      
      
    </form>
  </div>
</div>
  <script src="../js/jsForm.js"></script>


<?php


  if(isset($_POST["AjoutUtilisateur"]))
  {  
    $nom = htmlspecialchars($_POST['Nom']);
    $prenom = htmlspecialchars($_POST['Prenom']);
    $pseudo = htmlspecialchars($_POST['Pseudo']);
    $passwordUser = $_POST['Password'];
    $passwordhash = password_hash($passwordUser,PASSWORD_DEFAULT);

    if($_POST["isAdmin"] == "Admin")
    {
      $is_admin = 1 ;
    }else
    {
      $is_admin = 0 ;
    }

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
    

     echo '<h1 style="text-align: center;">Insertion Validé</h1><br><br>';
      echo "<a href='Q85W5YZpwLVcBZPs.php?id=".$_SESSION['id']."'>Retour</a>"; 
      
}



?>

  
</body>
<footer>

</footer>
</html>