<?php 

//1. zadatak
echo "<p>1.zadatak ----------------------------------------</p>";
$Cel = 0;
echo "<p>$Cel °C</p>";
if ($Cel >= 100){
    echo "<p>Voda ključa.</p>";
}
elseif ($Cel <= 0){
    echo "<p>Voda se ledi.</p>";
}
else{
    echo "<p>Voda je u tečnom stanju.</p>";
}

//2. zadatak
echo "<p>2.zadatak ----------------------------------------</p>";


$temperament = "sangvinik";

      if($temperament == "sangvinik")
      {
          echo "<img src='images/sanguine.jpg'>";
      
      }
      elseif($temperament == "melanholik")
      {
          echo "<img src='images/melancholic.jpg'>";
          
      }
      elseif ($temperament == "flegmatik") 
      {
          echo "<img src='images/phlegmatic.jpg'>";   
      }
      elseif ($temperament == "kolerik"){
          echo "<img src='images/choleric.jpg'>";
      }
      else
      {
          echo "<p>Unesite pravilno svoj temperament!</p>";
      }

//3. zadatak
echo "<p>3.zadatak ----------------------------------------</p>";
$kcal = 1000;
$kJ = $kcal*4.1868;
echo "<p>$kcal kcal je $kJ kJ.</p>";

if ($kJ < 2000){
    echo "<p>Povećajte dnevni unos!</p>";
}
elseif ($kJ > 4000){
    echo "<p>Smanjite dnevni unos!</p>";
}
else {
    echo "<p>Dnevni unos je u redu.</p>";
}
?>
