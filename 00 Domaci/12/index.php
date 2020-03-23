<html>
<head>
<link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
<?php

class Kompozicija 
{
    private $kompozicija;
    private $kompozitor;
    private $godinaIzlaska;

    public function __construct($nk, $ik, $g)
    {
        $this->SetKompozicija($nk);
        $this->SetKompozitor($ik);
        $this->SetGodinaIzlaska($g);
    }

    public function SetKompozicija($a)
    {
        $this->kompozicija = $a;
    }

    public function SetKompozitor($a)
    {
        $this->kompozitor = $a;
    }

    public function SetGodinaIzlaska($a)
    {
        $this->godinaIzlaska = $a;
    }

    public function info()
    {
        echo   "<p>Kompozicija: $this->kompozicija <br>";
        echo   "Kompozitor: $this->kompozitor <br>";
        echo   "Godina: $this->godinaIzlaska.</p>";
    }

    public function barok()
    {
        if ($this->godinaIzlaska>=1600 and $this->godinaIzlaska<=1750)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function betoven()
    {
         if (stripos($this->kompozitor, 'Betoven')!==false)
            {
                return true;
            }
            else
            {    
                return false;
            }
    }
    
}

$komp1 = new Kompozicija ('Simfonija br.5','Betoven',1800);
$komp1->info();
$komp1->barok();
$komp1->betoven();

$komp2 = new Kompozicija ('Čarobna frula','Mocart',1791);
$komp2->info();
$komp2->barok();
$komp2->betoven();

$komp3 = new Kompozicija ('Četiri godišnja doba','Vivaldi',1723);
$komp3->info();
$komp3->barok();
$komp3->betoven();

?>

</body>

</html>