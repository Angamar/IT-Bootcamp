<html>
<head>
<link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
<?php
class Pacijent
{
    private $ime;
    private $visina;
    private $tezina;

    function __construct($i, $t, $v)
    {
        $this->setIme($i);
        $this->setVisina($v);
        $this->setTezina($t);
    }

    function Stampaj()
    {
        echo "<b>".$this->ime ."<br></b>";
        echo $this->visina ."m <br>";
        echo $this->tezina ."kg <br>";
    }

    public function Bmi()
    {
        $bmi = $this->tezina / ($this->visina*$this->visina); 
        return $bmi;
    }

    function setIme($a)
    {
        $this->ime = $a;
    }

    function getIme()
    {
        return $this->ime;
    }

    function setVisina($a)
    {
        if ($a>=0 and $a <= 2.5)
        {
            $this->visina = $a;
        }
        elseif($a<0.1)
        {
            $this->visina =0;
        }
        else
        {
            $this->visina = 2.5;
        }
    }

    function getVisina()
    {
        return $this->visina;
    }

    function setTezina($a)
    {
        if ($a<0.1)
        {
            $this->tezina = 0;
        }
        elseif($a <=550)
        {
            $this->tezina =$a;
        }
        else
        {
            $this->tezina = 550;
        }
    }

    function getTezina()
    {
        return $this->tezina;
    }
}

$pacijent1 = new Pacijent("Zika Radovanovic", 70, 1.68);
$pacijent2 = new Pacijent('Slavica Pešić', 66,  1.76);
$pacijent3 = new Pacijent ("Slaviša Nikolić", 112, 1.80);
$pacijent1->Stampaj();
$pacijent2 ->Stampaj();
$pacijent3->Stampaj();
echo "<hr>";

$nizPac = array ($pacijent1, $pacijent2, $pacijent3);
$maxbmi = 0;
$NajveciBmiPac=$nizPac[0];
foreach ($nizPac as $pac)
{
    if ($pac->Bmi()>$maxbmi)
    {
        $maxbmi = $pac->Bmi();
        $NajveciBmiPac = $pac;
    }
}

echo "<p>Pacijent sa najvecom bmi vrednoscu (" . $NajveciBmiPac->Bmi() .") je " .
        $NajveciBmiPac->getIme() . ", visine " . 
        $NajveciBmiPac->getVisina() . "m i tezine " .
        $NajveciBmiPac->getTezina(). "kg.</p><hr>";

?>

</body>

</html>