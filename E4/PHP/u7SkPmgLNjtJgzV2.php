<?php  
session_start(); 
include("infoConnection.php");
$bdd = new PDO("mysql:host=$serverName;dbname=$database;charset=utf8", $user, $password);
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
  <div class="d-flex justify-content-center">
  <div class="login" align="center" style="background-color: rgba(0, 0, 0, 0.5);  border-radius: 10px; margin-top: 10%; height: 600px;width: 700px;">
    <h2 style=" padding: 15px 15px 15px 15px ; color: white; font-size: 3em;">Inscription</h2>
    <br>
    <form id="InsertionData" action="" method="POST">
      
      <table align="center">
        <tr>
          <td>
            <input type="text" name="Titre" id="Titre" class="form-control" placeholder="Titre" aria-label="Titre" aria-describedby="addon-wrapping" style="width: 500px">
            <br>
          </td>
        </tr>

        <tr>
          <td>
            <input type="text" name="Adresse" id="Adresse" class="form-control" placeholder="Adresse" aria-label="Adresse" aria-describedby="addon-wrapping" style="width: 500px">
            <br>
          </td>
        </tr>


        <tr>
          <td>
            <input type="number" name="Nb-piece" id="Nb-piece" class="form-control" placeholder="Nombre de piece" aria-label="Nb-piece" aria-describedby="addon-wrapping" style="width: 500px">
            <br>
          </td>
        </tr>

        <tr>
          <td>
            <input type="number" name="Prix" id="Prix" class="form-control" placeholder="Prix" aria-label="Prix" aria-describedby="addon-wrapping" style="width: 500px">
            <br>
          </td>
        </tr>

        <tr>

          <td>
          <input type="text" name="Image" id="Image" class="form-control" placeholder="lien image" aria-label="Image" aria-describedby="addon-wrapping" style="width: 500px">
            <br>
          </td>
        </tr>
        <tr>
          <td>
          <textarea name="Description" id="Description" class="form-control" placeholder="Description" aria-label="Description" aria-describedby="addon-wrapping" style=" height:50px ;width: 500px"> 
          </textarea>
               
          </td>
        </tr> 

      </table>
      <br>

      <button  class="btn btn-light d-grid gap-2 col-6 mx-auto" type="submit" name ="data_insertion" value="Valider" style="color: black; ">Valider</button>
      
      
    </form>
  </div>
</div>



<?php
  
  if(isset($_POST["data_insertion"])){

    $typeBien = $_GET["type"];
    $Titre = htmlspecialchars($_POST['Titre']);
    $Adresse = htmlspecialchars($_POST['Adresse']);
    $Nb_piece = htmlspecialchars($_POST['Nb-piece']);
    $Prix =  htmlspecialchars($_POST['Prix']);
    $Dispo = 1 ; 
    $Lien_img = $_POST["Image"];
    $Description = $_POST["Description"];
    
      if ($typeBien == "appartement") {
        
      
        $request = $bdd->prepare("INSERT INTO appartement(Titre,Adresse,Nb_piece,Prix,Dispo,Image,Description) VALUES(:titre, :adresse,:nb_piece, :prix, :dispo, :lien_img, :description)");
        $request->execute(array(
          ':titre' => $Titre ,
          ':adresse' => $Adresse, 
          ':nb_piece' => $Nb_piece, 
          ':prix' => $Prix,
          ':dispo' => $Dispo,
          ':lien_img' => $Lien_img,
          ':description' => $Description 
       ));
      

           echo '<h1 style="text-align: center;">Insertion Validé</h1><br><br>';
          echo "<a href='Q85W5YZpwLVcBZPs.php?id=".$_SESSION['id']."'>Retour</a>";
      }

      else if($typeBien =="maison"){

         $request = $bdd->prepare("INSERT INTO maison(Titre,Adresse,Nb_piece,Prix,Dispo,Image,Description) VALUES(:titre, :adresse,:nb_piece, :prix, :dispo, :lien_img, :description)");
         $request->execute(array(
          ':titre' => $Titre ,
          ':adresse' => $Adresse, 
          ':nb_piece' => $Nb_piece, 
          ':prix' => $Prix,
          ':dispo' => $Dispo,
          ':lien_img' => $Lien_img,
          ':description' => $Description 
          ));
      

           echo '<h1 style="text-align: center;">Insertion Validé</h1><br><br>';
          echo "<a href='Q85W5YZpwLVcBZPs.php?id=".$_SESSION['id']."'>Retour</a>";
      }

      else if($typeBien == "bateau"){
        $request = $bdd->prepare("INSERT INTO bateau(Titre,Adresse,Nb_piece,Prix,Dispo,Image,Description) VALUES(:titre, :adresse,:nb_piece, :prix, :dispo, :lien_img, :description)");
         $request->execute(array(
          ':titre' => $Titre ,
          ':adresse' => $Adresse, 
          ':nb_piece' => $Nb_piece, 
          ':prix' => $Prix,
          ':dispo' => $Dispo,
          ':lien_img' => $Lien_img,
          ':description' => $Description 
          ));
      

          echo '<h1 style="text-align: center;">Insertion Validé</h1><br><br>';
          echo "<a href='Q85W5YZpwLVcBZPs.php?id=".$_SESSION['id']."'>Retour</a>";

      }

      else if($typeBien == "penthouse"){
        $request = $bdd->prepare("INSERT INTO penthouse(Titre,Adresse,Nb_piece,Prix,Dispo,Image,Description) VALUES(:titre, :adresse,:nb_piece, :prix, :dispo, :lien_img, :description)");
         $request->execute(array(
          ':titre' => $Titre ,
          ':adresse' => $Adresse, 
          ':nb_piece' => $Nb_piece, 
          ':prix' => $Prix,
          ':dispo' => $Dispo,
          ':lien_img' => $Lien_img,
          ':description' => $Description 
          ));
      

           echo '<h1 style="text-align: center;">Insertion Validé</h1><br><br>';
          echo "<a href='Q85W5YZpwLVcBZPs.php?id=".$_SESSION['id']."'>Retour</a>";
      }

      else if($typeBien == "studio"){
        $request = $bdd->prepare("INSERT INTO studio(Titre,Adresse,Nb_piece,Prix,Dispo,Image,Description) VALUES(:titre, :adresse,:nb_piece, :prix, :dispo, :lien_img, :description)");
         $request->execute(array(
          ':titre' => $Titre ,
          ':adresse' => $Adresse, 
          ':nb_piece' => $Nb_piece, 
          ':prix' => $Prix,
          ':dispo' => $Dispo,
          ':lien_img' => $Lien_img,
          ':description' => $Description 
          ));
      
          echo '<h1 style="text-align: center;">Insertion Validé</h1><br><br>';
          echo "<a href='Q85W5YZpwLVcBZPs.php?id=".$_SESSION['id']."'>Retour</a>";
      }
      


  }else{
      }
  ?>



</body>
</html>