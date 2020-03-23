
<?php 

require_once "Student.php";

class SamofinansirajuciStudent extends Student
{
    
    public function skolarina($ESPB)
    {
        if ($this->prosecnaocena < 8)
        {
            $skolarina = 1900*$ESPB;
            return $skolarina;
        }
        else
        {
            $skolarina = 1600*$ESPB;
            return $skolarina;
        }
    }

    public function prijavaispita()
    {
        return 400;
    }

    public function info()
    {
        echo "Samofinansirajuci student <br>";
        echo $this->ime . "<br>";
        echo $this->osvESPB . " ESPB<br>";
        echo $this->prosecnaocena . "<br>";
    }

}

$s1 = new SamofinansirajuciStudent ("Pera", 50, 8.49);
$s2 = new SamofinansirajuciStudent ("Milan", 60, 10);
$s3 = new SamofinansirajuciStudent ("Slavica", 48, 7.22);
$niz = [$s1, $s2, $s3];
foreach ($niz as $s)
{
    echo "<br>";
    $s->info();
    echo $s->skolarina(60);
    echo "<br>";
    echo $s->prijavaispita();
    echo "<br>";

}


// $s2= new Student ("Dragan", 180, 6.02); // NE MOZE JER SE POZIVA APSTRAKTNA KLASA!


?>

