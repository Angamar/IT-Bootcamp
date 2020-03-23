<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">
</head>

<body>
<?php echo "<h1>Zadaci sa klasama 3/3</h1>";

class Pacijent
       {
           private $ime;
           private $visina;
           private $tezina;
           public function __construct($ime, $visina, $tezina)
           {
               $this->setIme($ime);
               $this->setVisina($visina);
               $this->setTezina($tezina);
           }
           public function setIme($ime)
           {
               $this->ime = $ime;
           }
           public function setVisina($visina)
           {
               $this->visina = $visina;
           }
           public function setTezina($tezina)
           {
               $this->tezina = $tezina;
           }
           public function getIme()
           {
               return $this->ime;
           }
           public function getVisina()
           {
               return $this->visina;
           }
           public function getTezina()
           {
               return $this->tezina;
           }
       }
       $pac1 = new Pacijent("Pera Peric", 186, 79);
       $pac2 = new Pacijent("Mara Martic", 165, 57);
       $pac3 = new Pacijent("Anica Antic", 176, 70);
       $nizPacijenata = array($pac1, $pac2, $pac3);
       //Prosecna visina pacijenata
       function srednjaVisina($niz)
       {
           $s = 0;
           foreach($niz as $elem)
           {
               $s = $s + $elem->getVisina();
           }
           $arsr = $s / count($niz);
           return $arsr;
       }
       echo srednjaVisina($nizPacijenata);
       echo "<br>";
       //Najmanja tezina pacijenta
       //Ispisati podatke o pacijentu sa najmanjom tezinom
       $objekat = $nizPacijenata[0];
       $minTezina = $objekat->getTezina(); //Pretpostavka minimalne tezine
       foreach($nizPacijenata as $p)
       {
           if($minTezina > $p->getTezina())
           {
               $minTezina = $p->getTezina();
               $objekat = $p;
           }
       }
       echo $objekat->getIme() . " " . $objekat->getVisina() . " " . $objekat->getTezina();
       echo "<br>";
       //Ispisate sve pacijente cije ime sadrzi slovo A
       foreach($nizPacijenata as $p)
       {
           $imeTekuceg = $p->getIme();
           if(strpos($imeTekuceg, "A") !== false)
           {
               echo $imeTekuceg;
               echo "<br>";
           }
       }


?>
</body>

</html>