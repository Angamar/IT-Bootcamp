
<?php 

    class Kredit
    {
        protected $godKamata;
        protected $osnovica;
        protected $brGodina;
        protected $tip;
        private static $podrazumevanaGodKamata = 30;//nije polje objekta, nego polje klase: to je zajednicko polje za sve objekte, svi krediti mogu da pristupe ovom zajednickom polju. 
        private static $podrazumevanaOsnovica = 666;
        private static $brojKredita = 0;
        private const PODRAZUMEVANBRGODINA = 5; 

        
        public function __construct($kam, $osn, $brg, $tip)
        {
            self::$brojKredita++;
            $this->setGodKamata($kam);
            $this->setOsnovica($osn);
            $this->setBrGodina($brg);
            $this->setTip($tip);
        }

        public static function setPodrazumevanaGodKamata($kam)
        {
            if ($kam >=20 and $kam <=100)
            {
                self::$podrazumevanaGodKamata = $kam;
            }
        }

        public static function setPodrazumevanaOsnovica($osn)
        {
            if ($osn >=0)
            {
                self::$podrazumevanaOsnovica = $osn;
            }
        }

        public function setGodKamata($kam)
        {
            if($kam >= 0 and $kam <= 100)
            {
            $this->godKamata = $kam;
            }
            else
            {
            //$this->godKamata = $this->podrazumevanaGodKamata;   NE!
            //$this->godKamata = Kredit::$podrazumevanaGodKamata; //DA
            $this->godKamata = self::$podrazumevanaGodKamata; //DA
            }
        }

        public function setOsnovica($osn)
        {
            if ($osn > 0)
            {
            $this->osnovica = $osn;
            }
            else
            {
            $this->osnovica = self::$podrazumevanaOsnovica;
            }
        }

        public function setBrGodina($brg)
        {
            if ($brg > 0)
            {
            $this->brGodina = $brg;
            }
            else
            {
            $this->brGodina = self::PODRAZUMEVANBRGODINA;
            }
        }

        public function setTip($tip)
        {
            $this->tip = $tip;
        }

        public function getGodKamata()
        {
            return $this->godKamata;
        }

        public function getOsnovica()
        {
            return $this->osnovica;
        }

        public function getBrGodina()
        {
            return $this->brGodina;
        }

        public function getTip()
        {
            return $this->tip;
        }

        public static function getPodrazumevanaGodKamata()
        {
            return self::$podrazumevanaGodKamata;
        }

        public static function getPodrazumevanaOsnovica()
        {
            return self::$podrazumevanaOsnovica;
        }

        public static function getBrojKredita()
        {
            return self::$brojKredita;
        }

        public function mesecnaRata()
        {
            return 100;
        }

        public function stampaj()
        {
            echo "<p>";
            echo "Tip kredita: " . $this->getTip() . "<br>" .
                 "Godišnja kamata: " . $this->getGodKamata() . "%<br>" .
                 "Osnovica: " . $this->getOsnovica() . "<br>" .
                 "Broj godina: " . $this->getBrGodina() . "<br>" .
                 "Mesecna rata: " . $this->mesecnaRata() . "<br>" ;
            echo "</p>";    
        }
    }

?>

