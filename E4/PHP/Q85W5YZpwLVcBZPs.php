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
      <br><br><br>
      <h3>Informations sur les biens</h3>
      <br>
      <form action="" method="POST">
        <label>Choissisez le type de bien à afficher</label>
        <select name="bien">
          <option value="appartement">Appartement</option>
          <option value="maison">Maison</option>
          <option value="bateau">Bateau</option>
          <option value="studio">Studio</option>
          <option value="penthouse">Penthouse</option>
        </select>
        <input type="submit" value="valider" name="data_bien"> 
      </form> 
    </div>

    <?php 


    if(isset($_POST["data_bien"]))
    {

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
      <th scope='col'>supprimer</th>
      </tr>
      </thead>";

      while ($data = $request->fetch())
      {

        $idBien = $data['id'];

        if($data["Dispo"] == 1)
        {
          $Disponible ="Oui";
        }else
        {
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
        <td>';
        echo "<a href='EatT9UuY68GP7cgy.php?id=".$idBien."&type=".$bien."&iduser=".$getid."'>Supprimer</a>
        </td>
        </tr>
        </tbody>
        ";
      }

      echo "</table>
      </div>
      <a href='u7SkPmgLNjtJgzV2.php?iduser=".$getid."&type=".$bien."'>Ajouter information</a>";
    }


    ?>


    <div id="formUsers">
      <h3>Information utilisateur</h3>
      <form action="" method="POST">
        <label>Afficher les informations des utilisateurs</label>
        <br>
        <label>Admin</label>
        <input type="radio" id="Admin" name="isAdmin" value="Admin">

        
        <label>Non Admin</label>
        <input type="radio" id="NonAdmin" name="isAdmin" value="Non_admin">
        <br><br> 
        <input type="submit" name="infoUser" value="Valider"> 

      </form>
    </div>

    <?php  
    if(isset($_POST['infoUser']))
    {

      $is_admin = $_POST['isAdmin'];

      if($is_admin == "Admin")
      {

        $requestUser = $bdd->query("SELECT * FROM Users where is_admin = 1");
        echo "<div id=infoSup> 

        <table class='table table-dark justify-content-center'>
        <thead>
        <tr>
        <th scope='col'>Nom</th>
        <th scope='col'>Prénom</th>
        <th scope='col'>Pseudo</th>
        <th scope='col'>Email</th>
        <th scope='col'>password</th>
        <th scope='col'>supprimer</th>
        </tr>
        </thead>";


        while ($data = $requestUser->fetch())
        {

          $idUserTable = $data["id_user"];
          echo '
          <tbody>
          <tr>
          <td>'.$data['Nom'].'</td>
          <td>'.$data['Prenom'].'</td>
          <td>'.$data['Pseudo'].'</td>
          <td>'.$data["Email"].'</td>
          <td>'.$data['Password'].'</td>
          <td>';
          echo "<a href='RY9pzYX9fTwnqrqn.php?idUserTable=".$idUserTable."&iduser=".$getid."'>Supprimer</a>
          </td>
          </tr>
          </tbody>
          ";
        }


      }else 
      {
       $requestUser = $bdd->query("SELECT * FROM Users where is_admin = 0");
       echo "<div id=infoSup> 

       <table class='table table-dark justify-content-center'>
       <thead>
       <tr>
       <th scope='col'>Nom</th>
       <th scope='col'>Prénom</th>
       <th scope='col'>Pseudo</th>
       <th scope='col'>Email</th>
       <th scope='col'>password</th>
       <th scope='col'>supprimer</th>
       </tr>
       </thead>";
       while ($data = $requestUser->fetch())
       {

        $idUserTable = $data["id_user"];
        echo '
        <tbody>
        <tr>
        <td>'.$data['Nom'].'</td>
        <td>'.$data['Prenom'].'</td>
        <td>'.$data['Pseudo'].'</td>
        <td>'.$data["Email"].'</td>
        <td>'.$data['Password'].'</td>
        <td>';
        echo "<a href='RY9pzYX9fTwnqrqn.php?idUserTable=".$idUserTable."&iduser=".$getid."'>Supprimer</a>
      
        </td>
        </tr>
        </tbody>
        ";
      }

    }

    echo "</table>
    </div>
    <a href='xnmgYVM5qxgvamSZ.php?iduser=".$getid."'>Ajouter information</a>";



  }
}


?>

</body>
</html>