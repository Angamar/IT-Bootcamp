
<?php 

require_once "Student.php";
class BudzetskiStudent extends Student
{
    
    public function skolarina($ESPB)
    {
            $skolarina = (300-$this->osvESPB)*2000;
            return $skolarina;
    }

    public function prijavaispita()
    {
        return 100;
    }

    public function info()
    {
        echo "Budzetski student <br>";
        echo $this->ime . "<br>";
        echo $this->osvESPB . " ESPB<br>";
        echo $this->prosecnaocena . "<br>";
    }
}



?>

