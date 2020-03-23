<?php 
echo "<h1>Zdravo svete!</h1>";
echo "Zdravo svete!";
echo "<br>";


/* ovo je
viselinijski komentar*/

//Dodela vrednosti promenljivama
$ime = "rec";
echo $ime;
$prviBroj = 1;
$drugiBroj = 3;
// + - * / aritmetičke operacije
$zbir = $prviBroj + $drugiBroj*2;
echo "<br>";
echo $zbir;


$x=5;
$y=10;

echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
// promeniti mesta promenljivama ($temp je treca casa koju privremeno koristimo da u nju prebacimo jednu od vrednosti)
$temp=$x;
$x=$y;
$y=$temp;
echo "zamenjena mesta";
echo "<br>";
echo $x;
echo "<br>";
echo $y;

echo "<br>";
echo "----------------------------------------------------------------------------";
echo "<br>";
/* 1.   Za unetu cenu robe, unetu novcanicu kojom kupac placa racun
        ispisati koliki je kusur kasirka treba da mu vrati */

echo "1.zadatak";
echo "<br>";
$cenaRobe = 753;
$novcanica = 2000;
$kusur = $novcanica - $cenaRobe;
echo "<br>";
echo $kusur." RSD";
echo "<br>";
echo "$kusur  RSD"; // isto je
echo "<br>";

$ime = "Aleksa";
$prezime = "Stojanovic";
$godine = 24;

echo $ime . " " . $prezime; 
echo "<br>";
echo "$ime $prezime";

echo "<br>";
echo "----------------------------------------------------------------------------";
echo "<br>";
echo "2.zadatak";
echo "<br>";
/* 2.   Za uneto vreme u satima i minutima, izračunati koliko minuta
        je prošlo od ponoči. */

$unetiSati = 01;
$unetiMinuti = 20;
$konvertovaniMinuti = $unetiSati * 60;

$Proslo = $konvertovaniMinuti + $unetiMinuti;
echo $Proslo;

echo "<br>";
echo "----------------------------------------------------------------------------";
echo "<br>";
echo "3.zadatak";
echo "<br>";
/* 3.   Za vreme sa kompjutera u satima i minutima, izračunati koliko minuta
        je prošlo od ponoči. */


date_default_timezone_set('Europe/Belgrade');
$trenutnoSati = date('G');
$trenutnoMinuta = date('i');

echo $trenutnoSati;
echo "<br>";
echo $trenutnoMinuta;
















?>