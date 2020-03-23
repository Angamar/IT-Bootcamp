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
display:block;
content:"";
} 
img 
{
    float:left;
    width: 100px;
}

.info{
    float: left;
    margin-left: 30px;
}

</style>
</head>



<body>

<?php echo "<h1>Zadaci sa klasama</h1>";


// Napraviti klasu Auto koja od polja ima marka, boja i imaKrov, kao metodu sviraj()

//kasa
class Auto
{
    var $marka;
    var $boja = 'white';
    var $imaKrov = true;

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
$auto1 = new Auto;
$auto2 = new Auto;

$auto1->marka = 'BMW';
$auto2->marka = 'Audi';
$auto2->boja = 'blue';
$auto2->imaKrov = false;
$auto1->sviraj();
$auto2->sviraj();
$auto1->vozi();
$auto2->vozi();

class Film 
{
    var $naslov;
    var $reziser;
    var $godinaIzdanja;
    function stampaj()
    {
        echo "<div class='row'>";
        echo "<img src='$this->slika' alt='$this->naslov'>";
        echo "<p class='info'>";
        echo $this->naslov ."<br>";
        echo $this->reziser ."<br>";
        echo $this->godinaIzdanja ."<br>";
        echo "</div>";
        echo "</p>";
    
    }
}

$film1= new Film;
$film2= new Film;
$film3= new Film;

$film1->naslov = "Kill Bill";
$film1->reziser = "Tarantino";
$film1->godinaIzdanja = "2002";
$film1->slika = "killbill.jpg";
$film1->stampaj();


class Pacijent
{
    var $ime;
    var $visina;
    var $tezina;
    var $slika;
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

    function Bmi()
    {
        $bmi = $this->tezina / ($this->visina*$this->visina); 
        return $bmi;
    }

    function Kritican()
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
}

$pacijent1 = new Pacijent;
$pacijent2 = new Pacijent;
$pacijent3 = new Pacijent;

//$pacijent1->ime = "Dragan Stojanović";
$pacijent1->setIme('DraganStojanovic');
$pacijent2->ime = "Slavica Pešić";
$pacijent3->ime = "Dragan Đorđević";
//$pacijent1->visina = 1.80;
$pacijent1->setVisina(2);
$pacijent2->setVisina(2);
$pacijent3->visina = 1.88;
$pacijent1->tezina = 88;
$pacijent2->tezina = 76;
$pacijent3->tezina = 100;
$pacijent1 -> Stampaj();
$pacijent2 -> Stampaj();
$pacijent3 -> Stampaj();



?>




</body>

</html>