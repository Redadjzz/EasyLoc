<?php
session_start(); 
include("infoConnection.php");
$bdd = new PDO("mysql:host=$serverName;dbname=$database;charset=utf8", $user, $password);


if(isset($_GET['id']) AND $_GET['id'] > 0)
{
  $getid = intval($_GET['id']);
  $requestUser = $bdd->prepare('SELECT * FROM Users WHERE id_user = ?');
  $requestUser->execute(array($getid));
  $userinfo = $requestUser->fetch();

}

?>

<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <meta charset="utf-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="..\css\index.css">
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
     


             <?php
          include('../include/header.php')
            ?>
                 
</head>


<body>

<?php 

  if($_SESSION['id'] == @$userinfo['id_user'] and !empty($userinfo['id_user'])) // si l'id de l'utilisateur correspond a l'id de session et qu'il n'est pas vide j'affiche le contenue de la page 
  {

  ?>


<div id="formBien">
  <br><br>
    <h3>Informations sur les biens</h3>
    <br>
    <form action="" method="POST">
      <label>Choissisez le type de bien à afficher</label>
      <select name="bien">
          <option>--choisissez une option--</option>
          <option value="Appartement">Appartement</option>
          <option value="Maison">Maison</option>
          <option value="Bateau">Bateau</option>
          <option value="Studio">Studio</option>
          <option value="Penthouse">Penthouse</option>
      </select>
      <input type="submit" value="valider" name="data_bien"> 
    </form> 
</div>


<div id="InfoUser">
  <h1>Informations sur les Utilisateurs</h1>
</div>

<?php 
}

if(isset($_POST["data_bien"])){

  $bien = htmlspecialchars($_POST['bien']);
  $request = $bdd->query('SELECT * FROM '.$bien.'');
  $DataExist = $request->rowCount();

    echo "<div id=infoSup> 

    <table class='table table-dark justify-content-center'>
      <thead>
        <tr>
          <th scope='col'>Titre</th>
          <th scope='col'>Prix</th>
          <th scope='col'>Nombre de piece</th>
          <th scope='col'>Disponible</th>
          <th scope='col'>Adresse</th>
          <th scope='col'>Superficie</th>
        </tr>
      </thead>";
      while ($data = $request->fetch())
      {

        if($data["Dispo"] == 1){
            $Disponible ="Oui";
        }else{
            $Disponible="Non";
        }  


        echo '
          <tbody>
        <tr>
         <td>'.$data['Titre'].'</td>
          <td>'.$data['Prix'].'€/semaines</td>
          <td>'.$data['Nb_piece'].'</td>
          <td>'.$Disponible.'</td>
          <td>'.$data['Adresse'].'</td>
          <td>'.$data['Superficie'].'</td>
        </tr>
      </tbody>
      ';
              
      }
    
echo "</table>
     </div>";
  }

?>






           
   
</body>
</html>