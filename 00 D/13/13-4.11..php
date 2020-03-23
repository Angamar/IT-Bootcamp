<html>
<head>
<link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
<?php

class Brojevi 
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->setPrviBroj($a);
        $this->setDrugiBroj($b);
    }

    public function setPrviBroj($a)
    {
        $this->a = $a;
    }

    public function setDrugiBroj($b)
    {
        $this->b = $b;
    }

    public function getPrviBroj()
    {
        return $this->a;
    }

    public function getDrugiBroj()
    {
        return $this->b;
    }

    public function saberi()
    {
        $zbir = $this->a+$this->b;
        return $zbir;
    }

    public function oduzmi()
    {
        $razlika = $this->b-$this->a;
        return $razlika;
    }

    public function pomnozi()
    {
        $proizvod = $this->a*$this->b;
        return $proizvod;
    }

    public function podeli()
    {
        if($this->b==0)
        {
            echo "Unesite drugi imenilac!";
        }
        else
        {
        $kolicnik = $this->a/$this->b;
        return $kolicnik;
        }

    }  
}

$br = new Brojevi (2,2);
echo $br->pomnozi(). "<br>";
echo $br->podeli() . "<br>";
echo $br->saberi() . "<br>";
echo $br->oduzmi() . "<br>";

?>

</body>

</html>