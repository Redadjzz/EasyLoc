<?php 
	include("infoConnection.php");
	$bdd = new PDO("mysql:host=$serverName;dbname=$database;charset=utf8", $user, $password);
	$uid = $_GET["id"];
	
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
<div class="d-flex justify-content-center">
<?php
echo $uid;
$request = $bdd->prepare("SELECT * FROM Appartement where id_Appartement = ?");
	$request->execute(array($uid));
 	while ($data = $request->fetch()){

  
 echo 
        "<div>
        <p class='titreAppart'>".$data["Adresse"]."
        <br><br><br></div>";


echo "<img class='image1 ' src='../oiAppart/appart1int.jpg'".$data["autreImageAppart"]." class='card-img-top '>";
echo  "<img class='image2' src='../oiAppart/appart1ext.jpg'".$data["autreImageAppart2"]." class='card-img-top'>";
    "<p class='descAppart5'>
        GOLDEN BEACH EST UNE PLAGE PRIVÉE DANS UNE COMMUNAUTÉ FERMÉE EXCLUSIVE. En 2016, un joyau tropical moderne et unique en son genre a été créé. AUCUNE ÉCONOMIE N'A ÉTÉ FAITE ! QUARTIERS DU PERSONNEL INCLUS DANS LES 8 CHAMBRES EN-SUITE. PLUS DE 800 M² sur un terrain de 1530 M² avec une belle piscine et un quai privé entièrement équipé.À travers un environnement ZEN-LIKE avec de hauts plafonds, des jardins intérieurs, et de belles sculptures à travers tout, entrez par l'IMPRESSIONNANTE PORTE FRONTALE conçue par l'architecte. La luxueuse voie d'eau est surplombée par la cuisine ultramoderne avec un large coin-repas. Une chambre familiale exclusive avec des boiseries personnalisées et un bureau/librairie avec des fenêtres.
    </p>";
 	}
?>


</div>


<!--FOOTER !-->
        <?php include("../include/footer.php")  ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <!-- Jquery needed -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="js/scripts.js"></script>
</body>
</html>