<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">

<style>


div
{
    padding: 10px;
    background: gray;
    width: 200px;
    color: white;
}

.row:before,
.row:after { 
clear:both;
display:table;
content:"";
} 
img 
{
    float: left;
    width: 100px;
    clear: left;
}


</style>
</head>



<body>

<?php echo "<h1>Zadaci sa klasama</h1>";


// Napraviti klasu Auto koja od polja ima marka, boja i imaKrov, kao metodu sviraj()

//kasa
class Auto
{
    private $marka;
    private $boja = 'white';
    private $imaKrov = true;

    function  __construct($m, $b, $ik)
    {
        $this->setMarka($m);
        $this->setBoja($b);
        $this->setImaKrov($ik);
    }
    function setMarka($a)
    {
        $this->marka = $a;
    }
    function getMarka()
    {
        return $this->marka;
    }

    function setBoja($a)
    {
        $this->boja = $a;
    }
    function getBoja()
    {
        return $this->boja;
    }

    function setImaKrov($a)
    {
        $this->imaKrov = $a;
    }
    function getImaKrov()
    {
        return $this->imaKrov;
    }
    function sviraj()
    {
        echo "Beep! Beep!";
    }

    function vozi()
    {
        echo "<p>Vozimo vozilo marke " . $this->marka
            . ", boje " . $this->boja; 

            if ($this->imaKrov==true)
            {
                echo ", sa krovom.</p>";
            }
            else
            {
                echo ", kabriolet.</p>";
            }
    }
//substr($str1, $pos, $lenght) - trazi string koji pocinje na odredjenoj poziciji i ima odredjenu duzinu
//pr. "Jelelelena" substr('Jelelena', 1,5); -> elele
    function audi()
    {
        if (substr($this->marka, 0, 4) === "Audi")
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
}

//objekti (realizacija klase)
$auto1 = new Auto ('Audi','Blue', true);

$auto1->sviraj();
$auto1->vozi();

class Film 
{
    private $naslov;
    private $reziser;
    private $godinaIzdanja;
    private $slika;

    function __construct($n, $r, $gi, $s)
    {
        $this->setNaslov($n);
        $this->setReziser($r);
        $this->setGodinaIzdanja($gi);
        $this->setSlika($s);
    }
    function setNaslov($n)
    {
        $this->naslov = $n;
    }
    function getNaslov()
    {
        return $this->naslov;
    }

    function setReziser($r)
    {
        $this->reziser = $r;
    }
    function getReziser()
    {
        return $this->reziser;
    }

    function setGodinaIzdanja($gi)
    {
        $this->godinaIzdanja = $gi;
    }
    function getGodinaIzdanja()
    {
        return $this->godinaIzdanja;
    }
    function setSlika($s)
    {
        $this->naslov = $s;
    }

    function stampaj()
    {
        echo "<div class='row'>";
        echo "<img src='$this->setSlika($s)' alt='$this->setNaslov()'>";
        echo "<p>";
        echo $this->getNaslov() ."<br>";
        echo $this->getReziser() ."<br>";
        echo $this->getGodinaIzdanja()."<br>";
        echo "</div>";
        echo "</p>";
    
    }
}

$film1=new Film ('Kill Bill','Tarantino','2002','as');
$film1->stampaj();



//ENKAPSULACIJA -> nivoi pristupa (public, private)
class Pacijent
{
    private $ime;
    private $visina;
    private $tezina;
    private $slika;

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
        if($this->kritican()==true)
        {
            echo "Kritican BMI! <br>";
        }
        else
        {
            echo "Normalan BMI. <br>";
        }
    }

    public function Bmi()
    {
        $bmi = $this->tezina / ($this->visina*$this->visina); 
        return $bmi;
    }

    public function Kritican()
    {
        if ($this->Bmi()<15 or $this->Bmi()>40)
        {
            return true;
        }
        else
        {
            return false;
        }
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

$pacijent1 = new Pacijent("Zika Radovanovic", 150, 4);
//$pacijent1->setIme('Zika Radovanovic');
//$pacijent1->setVisina(1.70);
//$pacijent1->setTezina(120);
//$pacijent1 -> Stampaj();
$pacijent1->stampaj();
if ($pacijent1->kritican())
{
    echo "Pacijent " . $pacijent1->getIme() . " ima kritican bmi!";
}
else
{
    echo "Pacijent " . $pacijent1->getIme() . " nema kritican bmi.";
}

$pacijent2 = new Pacijent('Slavica Pešić', 66,  1.76);
//$pacijent1->ime = "Dragan Stojanović";
//$pacijent2->setIme('Slavica Pešić');
//$pacijent1->visina = 1.80;
//$pacijent2->setTezina(76);
//$pacijent2->setVisina(1.76);
$pacijent2 -> Stampaj();






?>




</body>

</html>