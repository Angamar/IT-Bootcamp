<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">


<?php echo "<h1>Zadaci sa klasama 3/3</h1>";

class Automobil
{
    private $tip;
    private $boja;

    //konstruktor se poziva SAMO JEDNOM prilikom kreiranja novog objekta
    public function __construct($tip, $boja)
    {
        $this->setTip($tip); //$this->tip =$tip; 
        $this->setBoja($boja); //$this->boja =$boja; 
    }

    public function getTip()
    {
        return $this->tip;
    }

    public function getBoja()
    {
        return $this->boja;
    }

    public function setTip($tip)
    {
        $this->tip =$tip;
    }

    public function setBoja($boja)
    {
        $this->boja =$boja;
    }

    public function ispisi()
    {
        //echo "Automobil tipa " . $this->tip . " boje " . $this->boja; ILI
        echo "Automobil tipa " . $this->getTip() . " boje " . $this->boja;
    }
}
/*
$auto1 = new Automobil('karavan', "teget");
$auto1->ispisi();
$auto1->setTip('kabriolet');
$auto1->ispisi();
*/



$a1 = new Automobil ("kabriolet","crvena");
$a2 = new Automobil ("kabriolet","bela");
$a3 = new Automobil ("karavan","teget");
$a3 = new Automobil ("limuzina","crvena");



$nizAutomobila = array($a1, $a2, $a3);
foreach ($nizAutomobila as $auto)
{
    $auto->ispisi();
    echo "<br>";
}

//Ispis samo tipova automobila iz $nizAutomobila

foreach ($nizAutomobila as $a)
{
    echo $a->getTip();
    echo "<br>";
}

//Ispis automobila iz niza $nizAutomobila koji su crvene boje;

foreach ($nizAutomobila as $a)
{
    if ($a->getBoja()== "crvena")
    {
        $a->ispisi();
        echo "<br>";
    }
}
?>




</body>

</html>