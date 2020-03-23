<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">
</head>

<body>
<?php 

//require "kredit.php"; ako fajl ne postoji, izbacice gresku
//include "kredit.php"; ako fajl ne postoji, sve je ok <3
//require_once "kredit.php"; //ako je fajl vec pozvan, ne poziva 
//include_once "kredit.php"; ako je fajl vec ubacen, ne poziva

require_once "obicankredit.php";
require_once "amortizovankredit.php";

$k1 = new Kredit (25, -1, 1, "Građanski kredit");
$k1->stampaj();
Kredit::setPodrazumevanaGodKamata(49); //ovo polje pripada klasi, nije vezano za objekat, niti nam je on neophodan
echo "Podrazumevana godišnja kamata je " . Kredit::getPodrazumevanaGodKamata();
echo "<br>";
echo "Broj realiovanih kredita je " .Kredit::getBrojKredita();

$k2 = new ObicanKredit (25, 4000, 5);
$k2->stampaj();
echo $k2->mesecnaRataObican();

$k3 = new AmortizovanKredit (25, 4000, 5);
$k3->stampaj();
echo $k3->mesecnaRataAmortizovan();
?>


</body>

</html>