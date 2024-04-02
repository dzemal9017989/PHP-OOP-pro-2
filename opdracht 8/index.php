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
<h2>Dobbelsteen spel</h2>

<form action="index.php" method="post">

  <input type="submit" value="werp" name="werp">
  <input type="submit" value="reset" name="reset">
</form>


<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['werp'])){
    $_SESSION['game']->play();  
  }
  if(isset($_POST['reset'])){
    $_SESSION['game']->reset();  
  }
}




?>

</body>
</html>