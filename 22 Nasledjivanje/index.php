<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">
</head>

<body>
<?php echo "<h1>Zadaci sa nasledjivanjem</h1>";

    class Vozilo
    {
        private $regBroj;
        private $tip;

        public function __construct($regBroj, $tip)
        {
        $this->setRegBroj($regBroj);
        $this->setTip($tip);
        }

        public function setRegBroj($regBroj)
        {
            $this->regBroj = $regBroj;
        }

        public function setTip($tip)
        {
            $this->tip = $tip;
        }

        public function getRegBroj()
        {
            return $this->regBroj;
        }

        public function getTip()
        {
            return $this->tip;
        }

        public function ispisiVozilo()
        {
            echo "Registarski broj: " . $this->getRegBroj() . 
                 " tip vozila: " . $this->getTip() . "<hr>";
        }
    }

    class DrumskaVozila extends Vozilo
    {
        private $brSedista;

        public function __construct($regBroj, $tip, $brSedista)
        {
            parent::__construct($regBroj, $tip);
            $this->setBrSedista($brSedista);
        }

        public function setBrSedista($brSedista)
        {
            $this->brSedista = $brSedista;
        }

        public function getBrSedista()
        {
            return $this->brSedista;
        }

        public function ispisiDrumskoVozilo()
        {
            echo "Drumsko vozilo "; 
            echo "Registarski broj: <i>" . $this->getRegBroj() . 
                 "</i> tip vozila: <i>" . $this->getTip() . 
                 "</i> broj sedista: <i>" . $this->getBrSedista() ."</i><hr>"; 
        }
    }

    class LetecaVozila extends Vozilo
    {
        private $brSedista;
        private $imaKrila;

        public function __construct($regBroj, $tip, $brSedista, $imaKrila)
        {
            parent::__construct($regBroj, $tip);
            $this->setBrSedista($brSedista);
            $this->setImaKrila($imaKrila);
        }

        public function setBrSedista($brSedista)
        {
            $this->brSedista = $brSedista;
        }

        public function getBrSedista()
        {
            return $this->brSedista;
        }

        public function setImaKrila($imaKrila)
        {
            $this->imaKrila = $imaKrila;
        }

        public function getImaKrila()
        {
            return $this->imaKrila;
        }

        public function ispisiLeteceVozilo()
        {
            echo "Letece vozilo "; 
            echo "<i>" . $this->ispisiVozilo() .
                 "</i> broj sedista: <i>" . $this->getBrSedista() .
                 "</i> Krila? <i>";
           if($this->getImaKrila()==true)
                 { 
                     echo "ima </i><hr>";
                 }
                 else
                 {
                     echo "nema </i><hr>";
                 } 
                 ; 
        }
    }

    class Avion extends LetecaVozila
    {
        private $godProizvodnje;
        public function __construct($regBroj, $tip, $brSedista, $imaKrila, $godProizvodnje)
        {
            parent::__construct($regBroj, $tip, $brSedista, $imaKrila);
            $this->setGodProizvodnje($godProizvodnje);
        }
        
        public function setGodProizvodnje($godProizvodnje)
        {
            $this->godProizvodnje = $godProizvodnje;
        }

        public function getGodProizvodnje()
        {
            return $this->godProizvodnje;
        }

        public function ispisiAvion()
        {
            echo "Avion " . $this->ispisiLeteceVozilo() .
            " godina proizvodnje: " . $this->getGodProizvodnje();
        }

    }


    $vozilo1 = new Vozilo("NI-123CX", "Automobil");
    $vozilo1->ispisiVozilo();

    $drumskoVozilo1 =  new DrumskaVozila("BG-674IP", "Skuter", 1);
    $drumskoVozilo1->ispisiDrumskoVozilo();
    $drumskoVozilo1->ispisiVozilo();

    $vazdusnoVozilo1 =  new LetecaVozila("BG-674IP", "Avion", 130, false);
    $vazdusnoVozilo1->ispisiLeteceVozilo();

    $avion1 = new Avion("INI-56", "Avion", 130, false, 2012);
    $avion1->ispisiAvion();

?>
</body>

</html>