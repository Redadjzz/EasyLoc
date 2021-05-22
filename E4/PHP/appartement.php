<?php
session_start(); 
//connexion a la base de donnée
	include("infoConnection.php");
	$bdd = new PDO("mysql:host=$serverName;dbname=$database;charset=utf8", $user, $password);
	$uid = $_GET["id"]; // je recupere le paramete id passer en parametre pour recupere les donnés correspondant a cette id dans la table Appartement
 $logged = $_SESSION['logged']; 
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="..\css\index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="..\js\index.js"></script>
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
     <script src="../js/animMenu.js"></script>
	<title>Appartement</title>
	 <?php include("../include/header.php")?>
</head>

<body>

<div class='justify-content-center1'>
<?php

$request = $bdd->prepare("SELECT * FROM appartement where id = ?"); // requete preparé qui recupere les infos dans la table Apparetment avec l'id 
	$request->execute(array($uid));
 	while ($data = $request->fetch()){ // dans qu'il ya des donnés dans la tables j'affiche les inforamtions 

    if($data["Dispo"] == 1){ // si appart dispo 

      $Disponible ="Oui";
    }else{ // sinon
      $Disponible="Non";
    }

echo "<div id='carouselExampleControls' class='carousel slide ' data-bs-ride='carousel '>
  <h1 style='text-align: center; padding: 25px;'>".$data['Titre']."</h1>
  <div class='carousel-inner' style='width:50%; margin-left:auto; margin-right:auto; display:block; margin-bottom:20px;'>
    <div class='carousel-item active' >
      <img src='../".$data["Other_image"]."' class='d-block w-100' alt='...''>
    </div>
    <div class='carousel-item'>
      <img src='../".$data["Other_image2"]."' class='d-block w-100' alt='...''>
    </div>
 </div>
<button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleControls'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Previous</span>
  </button>

  <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleControls'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Next</span>
  </button>
</div>";

echo"<div id='Description'><p>".$data['Description']."</p></div>";

echo "<div id=infoSup> 

    <table class='table table-dark justify-content-center'>
      <thead>
        <tr>
          <th scope='col'>Prix</th>
          <th scope='col'>Nombre de piece</th>
          <th scope='col'>Disponible</th>
          <th scope='col'>Adresse</th>
          <th scope='col'>Superficie</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>".$data['Prix']."€/semaines</td>
          <td>".$data['Nb_piece']."</td>
          <td>".$Disponible."</td>
          <td>".$data['Adresse']."</td>
          <td>".$data['Superficie']."</td>
        </tr>
  
      </tbody>
</table>


    </div>";

}

if ($logged == true){
    echo "<input type='button' onclick='window.location.href='inscription.php';'name='inscription' value='Contacter l'agence' class='btn btn-light d-grid gap-2 col-4 mx-auto' >";
}
 	
?>



<!--FOOTER !-->
        <?php include("../include/footer.php")  ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <!-- Jquery needed -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="js/scripts.js"></script>
    </div>
</body>
</html>