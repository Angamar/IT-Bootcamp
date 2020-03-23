<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">
</head>

<body>
<?php 

    require_once('Osoba.php');

    class Zaposleni extends Osoba
    {
        private $plata;
        private $pozicija;
 
        public function __construct($a, $b, $c, $d, $e)
        {
        parent::__construct($a, $b, $c);
        $this->setPlata($d);
        $this->setPozicija($e);
        }

        public function setPlata($d)
        {
            $this->plata = $d;
        }

        public function setPozicija($e)
        {
            $this->pozicija = $e;
        }

        public function getPlata()
        {
            return $this->plata;
        }
        public function getPozicija()
        {
            return $this->pozicija;
        }
        
        public function ispisiZaposlenog()
        {
            echo $this->ispisiOsobu();
            echo"Plata: "    . $this->getPlata()    . "e <br>" .
                "Pozicija: " . $this->getPozicija() . "<br>";
        }



    }

    function ekonomista($objekat)
    {
        $zanimanje= $objekat->getPozicija();
        //if(stripos($zanimanje, "ekonomista") !== false)
        if($zanimanje == "ekonomista")
        {
            echo "Zaposlen u ekonomskom sektoru <br>";
        }
        else
        {
            echo "Nije zaposlen u ekonomskom sektoru <br>";
        }
    }

    function prosecnaPlata($nizRadnika)
    {
        $suma = 0;
        foreach($nizRadnika as $radnik)
        {
            $plataRadnika =$radnik->getPlata();
            $suma += $plataRadnika; // $suma+= $radnik->getPlata();
        }
        
        $prosecnaPlata = $suma/count($nizRadnika);
        return $prosecnaPlata;
    }

    //
    function natprosecnaPlata($osoba, $prosecna)
    {
        if ($osoba->getPlata()> $prosecna)
        {
            return true;
        }
        else 
        {
            return false;
        }
    }


$z1 = new Zaposleni ("Anka", "Antic", 1992, 420, 'trgovac');
$z1->ispisiZaposlenog();

?>

</body>

</html>