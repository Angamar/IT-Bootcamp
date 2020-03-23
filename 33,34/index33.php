
<?php 

$servername = "localhost";
$username = "Angamar";
$password = "Tritacke123";
$database = "videoteka";






































$conn = new mysqli($servername, $username, $password, $database);
/*
if($conn->connect_error)
{
    die("Desila se greska: " . $conn->connect_error);
}

echo "<p>Uspešna konekcija!</p>";

$sql = "INSERT INTO filmovi(naslov, reziser, god_izdavanja, zanr, ocena)
        VALUES ('Kil Bil', 'Kventin Tarantino', 2003, 'Akcija', 8.1)";

if ($conn->query($sql))
{
  echo  "<p>Uspesno dodat red u tabeu filmovi</p>";
}
else
{
    echo "Desila se greska: " . $conn->error;
}

*/

$conn1 = new mysqli ($servername, $username, $password);

$sql = "CREATE DATABASE IF NOT EXISTS ambulanta
        CHARACTER SET utf16 COLLATE utf16_slovenian_ci";

        echo "<br>";
        if ($conn1->query($sql))
        {
            echo "Uspesno kreirana baza ambulanta, ili vec postoji!";
        }
        else
        {
            echo "Desila se greska: " . $conn1->error;
        }

        
$sql = "USE ambulanta;";
//moze i $sql = $sql . 
$sql .= "CREATE TABLE IF NOT EXISTS pacijenti
        (
        id INT AUTO_INCREMENT,
        ime VARCHAR(60) NOT NULL,
        prezime VARCHAR(120) NOT NULL,
        broj_kartona CHAR(10),
        visina DECIMAL(5,2),
        tezina DECIMAL(5,2),
        pol CHAR(1),
        PRIMARY KEY (id)
        );";

echo "<br>";
if($conn1->multi_query($sql))
{
    echo "Uspesno izvrseni upiti!";
}
else 
{
    echo "Desila se greska: " . $conn1->error;
}

?>

