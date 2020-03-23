<?php 
session_start();
require_once "dm_konekcija.php";

//Provera da li je logovan
if(empty($_SESSION['id']))
{
        header('Location: dm_login.php');
}
?>

<html>
 <head>
    <link rel="stylesheet" type="text/css"
             href="css/style.css">
 </head>
 <body> 
        <ul class='menu'>
        <li>Zdravo, <?php echo $_SESSION['name'] ?>
        </li>
         <li>
          <a href = 'dm_prijatelji2.php'>Prijatelji</a>
         </li>
         <li>
          <a href = 'dm_izmeniprofil.php'>Izmeni podatke</a>
         </li>
         <li>
          <a href = 'dm_privatnost.php'>Privatnost</a>
         </li>
         <li>
          <a href = 'dm_logout.php'>Logout</a>
         </li>
        </ul>
