<?php
require_once 'src/Game.php';

session_start();
if (!isset($_SESSION['game'])){
  $_SESSION['game'] = new Game();  
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Wakken en ijsberen</h1>

    <form action="index.php" method="post">
        <label for="aantalDb">Aantal dobbelstenen:</label><br>
        <input type="text" id="aantalDb" name="aantalDb"><br>
        <input type="submit" value="Gooi dobbelstenen" name="gooiDobbelstenen"><br>
        <label for="raadWakken">Raad wakken:</label><br>
        <input type="text" id="raadWakken" name="raadWakken"><br><br>
        <label for="raadIjsberen">Raad ijsberen:</label><br>
        <input type="text" id="raadIjsberen" name="raadIjsberen"><br><br>
        <input type="submit" value="Raad" name="raad">
        <input type="submit" value="Geef oplossing" name="geefOplossing">
    </form>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['raad'])){
    $_SESSION['game']->guess();  
  }
  if(isset($_POST['geefOplossing'])){
    $_SESSION['game']->showResults();  
  }
  if(isset($_POST['gooiDobbelstenen'])){
    $_SESSION['game']->play();  
  }
}




?>

</body>

</html>