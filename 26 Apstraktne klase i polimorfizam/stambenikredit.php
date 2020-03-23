
<?php 

    require_once "kredit.php";

    class StambeniKredit extends Kredit
    {
        public function __construct($kam, $osn, $brg) 
        {
            parent::__construct($kam, $osn, $brg, "Stambeni kredit");
        }
    
    }
    
    //ako u potklasi napravimo metodu sa istim imenom kao u osnovnoj klasi, 
    //mi zapravo pravimo VERZIJU (override) te metode iz osnovne klase.






?>

