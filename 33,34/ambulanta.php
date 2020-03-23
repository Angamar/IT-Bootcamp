
<?php 

$servername = "localhost";
$username = "Angamar";
$password = "Tritacke123";
$database = "ambulanta";




































$conn1 = new mysqli ($servername, $username, $password, $database);

        
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

$conn1 = new mysqli ($servername, $username, $password, $database);
$sql = "USE ambulanta;";
$sql .= "INSERT INTO ambulanta.pacijenti (ime, prezime, broj_kartona, visina, tezina, pol)
        VALUES 
        ('Tamara', 'Nikolic', '487446', 170, 65, 'z'),
        ('Milos', 'Rancic', '834567', 190, 100, 'm');";

$sql .= "ALTER TABLE pacijenti ADD datum_rodjenja DATE AFTER prezime;";
$sql .= "UPDATE pacijenti SET datum_rodjenja = '1995-09-08' WHERE pacijenti.id = 1; 
         UPDATE pacijenti SET datum_rodjenja = '1990-11-11' WHERE pacijenti.id = 2; 
         UPDATE pacijenti SET datum_rodjenja = '1968-01-30' WHERE pacijenti.id = 3; ";

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


