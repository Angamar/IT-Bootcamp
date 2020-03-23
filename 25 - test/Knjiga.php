<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">

<style>
</style>
</head>
<body>

<?php


class Knjiga 
{
    private $naslov;
    private $autor;
    private $brojstrana;
    private $cena = 2500;

    public function __construct($nas, $aut, $brstr, $cen)
    {

        $this->setNaslov($nas);
        $this->setAutor($aut);
        $this->setBrojStrana($brstr);
        $this->setCena($cen);
    }

    public function setNaslov($nas)
    {
        $this->naslov = $nas;
    }

    public function getNaslov()
    {
        return $this->naslov;
    }

    public function setAutor($aut)
    {
        $this->autor = $aut;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setBrojStrana($brstr)
    {
        $this->brojstrana = $brstr;
    }

    public function getBrojStrana()
    {
        return $this->brojstrana;
    }

    public function setCena($cen)
    {
        $this->cena = $cen;
    }

    public function getCena()
    {
        return $this->cena;
    }

    public function info()
    {
        echo $this->getNaslov() . "<br>";
        echo $this->getAutor() . "<br>";
        echo $this->getBrojStrana() . " str. <br>";
        echo $this->getCena(). " dinara. <br>";
    }

    public function skupa()
    {
        if ($this->cena > 4000)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function dugoIme()
    {
        if (strlen($this->autor)>18)
        {
            echo "<p style='color:red'>" . $this->autor . "</p>";
        }
        else
        {
            echo "<p style='color:blue'>" . $this->autor . "</p>";
        }
    }
}

//Kreiranje objekata i niza objekata
$knjiga1 = new Knjiga ('Hari Poter i Red feniksa', 'Dž. K. Roulin', 750, 4001);
$knjiga2 = new Knjiga ('Proces', 'Franc Kafka', 250, 720);
$knjiga3 = new Knjiga ('Buka i bes', 'Vilijem Fokner', 480, 1050);
$nizKnjiga = array($knjiga1, $knjiga2, $knjiga3);

//funkcija 
function natprosecnaKnjiga($nizKnjiga)
{
   
    $zbirCena = 0;
    $zbirBrojStrana = 0;

    foreach ($nizKnjiga as $knjiga)
    {
        $zbirCena+=$knjiga->getCena();
        $zbirBrojStrana+=$knjiga->getBrojStrana();
    }

    $prosCena = $zbirCena/count($nizKnjiga);
    $prosBrojStrana = $zbirBrojStrana/count($nizKnjiga);

    foreach ($nizKnjiga as $knjiga)
    {
        if ($knjiga->getCena()>$prosCena and $knjiga->getBrojStrana()>$prosBrojStrana)
        {
            echo "<p> Natprosecne knjige: <br>";
            echo $knjiga->info() . "</p>";
        }
    }
}
//pozivanje metoda i funkcija
$knjiga1->info();
echo $knjiga1->skupa();
$knjiga1->dugoime();
natprosecnaKnjiga($nizKnjiga);




































?>




</body>

</html>