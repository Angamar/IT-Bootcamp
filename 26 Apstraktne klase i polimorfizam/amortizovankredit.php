
<?php 

    require_once "kredit.php";

    class AmortizovanKredit extends Kredit
    {
        public function __construct($kam, $osn, $brg) 
        {
            parent::__construct($kam, $osn, $brg, "Amortizovan kredit");
        }
    
        public function mesecnaRata() //varijanta metode iz osnovne klase, ima isto ime kao metoda iz osnovne klase;
        {
            $mesecnaKamata = $this->godKamata/12/100;
            $stepen = pow(1 + $mesecnaKamata, $this->brGodina*12);
            return ($this->osnovica * $mesecnaKamata * $stepen) / ($stepen-1);
        } 
    }

    
?>

