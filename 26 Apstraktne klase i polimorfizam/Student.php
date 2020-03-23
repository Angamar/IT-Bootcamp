
<?php 

abstract class Student  //cela klasa mora da bude abstract ako ima barem jednu apstraktnu metodu;
                        //nema implementacije: nemoguce je kreirati objekat apstraktne klase!
                        //implementacija MORA da postoji u izvedenoj klasi;
{
    protected $ime;
    protected $osvESPB;
    protected $prosecnaocena;

    public function __construct($ime, $osvESPB, $prosecnaocena)
    {
        $this->ime = $ime;
        $this->osvESPB = $osvESPB;
        $this->prosecnaocena = $prosecnaocena;
    }

    public abstract function info();

    public abstract function skolarina($ESPB);
    

    public abstract function prijavaispita();



}



?>

