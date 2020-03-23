<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">
</head>

<body>
<?php 

    require_once "kredit.php";

    class ObicanKredit extends Kredit
    {
        public function __construct($kam, $osn, $brg) 
        {
            parent::__construct($kam, $osn, $brg, "Obican kredit");
        }
    

        public function mesecnaRataObican()
        {
            $kamata = $this->osnovica*$this->brGodina*($this->godKamata / 100);
            return ($this->osnovica + $kamata)/ ($this->brGodina * 12);
        }
    }
    






?>

</body>

</html>