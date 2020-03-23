<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">

<style>
</style>
</head>
<body>

<?php

require_once 'Knjiga.php';


class ZbirkaZadataka extends Knjiga 
{
    private $brojzadataka;

    public function __construct($nas, $aut, $brstr, $cen, $brzad)
    {
        parent::__construct($nas, $aut, $brstr, $cen);
        $this->SetBrojZadataka($brzad);
    }

    public function setBrojZadataka($brzad)
    {
        $this->brojzadataka = $brzad;
    }

    public function getBrojZadataka()
    {
        return $this->brojzadataka;
    }

    public function infoZbirkaZadataka()
    {
        parent::info();
        echo $this->getBrojZadataka() . " zadataka. <br>";
    }
}

//Kreiranje objekata i niza objekata
$zbirka1 = new ZbirkaZadataka ('Zbirka zadataka iz matematike I', 'Vene Bogoslavov', 200, 899, 620);
$zbirka2 = new ZbirkaZadataka ('Zbirka zadataka iz matematike II', 'Vene Bogoslavov', 220, 899, 890);
$zbirka3 = new ZbirkaZadataka ('Zbirka zadataka iz matematike I-IV', 'Vene Bogoslavov', 1002, 4005, 5000);
$nizZbirki = array($zbirka1, $zbirka2, $zbirka3);

//funkcije

function brojZadatakaPoStrani($zbirka)
{
$ZadaciPoStrani = $zbirka->getBrojZadataka()/$zbirka->getBrojStrana();
return $ZadaciPoStrani;
}

//SPECIJALNE ZBIRKE:
//skupe zbirke
//imaju brojZadatakaPoStrani veci od broja k
function specijalneZbirke($nizZbirki, $k)
{
   foreach ($nizZbirki as $zbirka)
   {
       if ($zbirka->skupa() === true and brojZadatakaPoStrani($zbirka)>$k)
       {
        echo "Specijalna zbirka: <br>";
        echo $zbirka->infoZbirkaZadataka();
       }
   }
}

//pozivanje metoda i funkcija
$zbirka1->info();
echo "<hr>";
$zbirka2->infoZbirkaZadataka();
echo "<hr>";
echo $zbirka1->skupa();
echo "<hr>";
$zbirka1->dugoime();
echo "<hr>";
echo brojZadatakaPoStrani($zbirka1) . "<br>";
echo brojZadatakaPoStrani($zbirka2) . "<br>";
echo brojZadatakaPoStrani($zbirka3) . "<br>";
echo "<hr>";
specijalneZbirke($nizZbirki, 2);





































?>




</body>

</html>