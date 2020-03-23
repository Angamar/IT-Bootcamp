<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">
</head>

<body>
<?php 

    class Osoba
    {

        /* 
        Nivoi pristupa:
        1)public: atributima i funkcijama mozemo pristupati i u klasi i izvan nje;
        2)private: atributima i funkcijama mozemo pristupati SAMO UNUTAR klase;
        3)protected:  atributima i funkcijama mozemo pristupati u klasi i klasama koje su izvedene iz nje (naslednice);
        */
        protected $ime;
        protected $prezime;
        protected $godRodjenja;

        public function __construct($a, $b, $c)
        {
        $this->setIme($a);
        $this->setPrezime($b);
        $this->setGodRodjenja($c);
        }

        public function setIme($a)
        {
            $this->ime = $a;
        }

        public function setPrezime($b)
        {
            $this->prezime = $b;
        }

        public function setGodRodjenja($c)
        {
            $this->godRodjenja = $c;
        }

        public function getIme()
        {
            return $this->ime;
        }

        public function getPrezime()
        {
            return $this->prezime;
        }

        public function getGodRodjenja()
        {
            return $this->godRodjenja;
        }

        public function ispisiOsobu()
        {
            echo "Ime: " . $this->getIme() . "<br>" .
                 "Prezime: " . $this->getPrezime() . "<br>" .
                 "Godina rodjenja: " . $this->getGodRodjenja() . "<br>";
        }
    }

?>

</body>

</html>