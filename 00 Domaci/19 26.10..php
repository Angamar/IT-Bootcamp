<html>
    <head>
        <style>
        .error {
            color: red;
            font-weight: bold;
            font-size: 28px;
        }
        </style>
    </head>

    <body>
        <?php 

        $servername = "localhost";
        $username = "Angamar";
        $password = "Tritacke123";
        $database = "ambulanta";

        $conn2 = new mysqli ($servername, $username, $password, $database);
        if ($conn2->connect_error)
        {
            die ("<div class='error'>Desila se greska: " . $conn2->connect_error . "</div>");
        }

//Prikazati tri tabele sa svim pacijentima, u jednoj su pacijenti sortirani po visini, u drugoj po težini, a u trećoj po godini rođenja (sve tri u opadajućem redosledu).
echo "<br><h3>Opadajuce, po visini</h3><br>";
        $sql = "SELECT DISTINCT * FROM pacijenti ORDER BY visina DESC";
        $result = $conn2->query($sql);

        if($result->num_rows == 0)
        {
            echo "<p>Nema pacijenata u bazi!</p>";
        }
        else
        {
            echo "<table>
            <tr><th>Ime</th> <th>Prezime</th> <th>Datum rodjenja</th> <th>pol</th> <th>Visina</th> <th>Tezina</th> <th>Broj Kartona</th> </tr>";
            while ($row = $result->fetch_assoc())
            {
                echo    "<tr>";
                echo    "<td>" .$row['ime'] . "</td>" .
                        "<td>" .$row['prezime'] . "</td>" .
                        "<td>" .$row['datum_rodjenja'] . "</td>" .
                        "<td>" .$row['pol'] . "</td>" .
                        "<td>" .$row['visina']. "</td>" .
                        "<td>" .$row['tezina']. "</td>" .
                        "<td>" .$row['broj_kartona'] . "</td>" . "</tr>";
            }
                 echo "</table>";
        }
        echo "<br><h3>Opadajuce, po tezini</h3><br>";
        $sql = "SELECT DISTINCT * FROM pacijenti ORDER BY tezina DESC";
        $result = $conn2->query($sql);

        if($result->num_rows == 0)
        {
            echo "<p>Nema pacijenata u bazi!</p>";
        }
        else
        {
            echo "<table>
            <tr><th>Ime</th> <th>Prezime</th> <th>Datum rodjenja</th> <th>pol</th> <th>Visina</th> <th>Tezina</th> <th>Broj Kartona</th> </tr>";
            while ($row = $result->fetch_assoc())
            {
                echo    "<tr>";
                echo    "<td>" .$row['ime'] . "</td>" .
                        "<td>" .$row['prezime'] . "</td>" .
                        "<td>" .$row['datum_rodjenja'] . "</td>" .
                        "<td>" .$row['pol'] . "</td>" .
                        "<td>" .$row['visina']. "</td>" .
                        "<td>" .$row['tezina']. "</td>" .
                        "<td>" .$row['broj_kartona'] . "</td>" . "</tr>";
            }
                 echo "</table>";
        }
        echo "<br><h3>Opadajuce, po datumu rodjenja</h3><br>";
        $sql = "SELECT DISTINCT * FROM pacijenti ORDER BY datum_rodjenja DESC";
        $result = $conn2->query($sql);

        if($result->num_rows == 0)
        {
            echo "<p>Nema pacijenata u bazi!</p>";
        }
        else
        {
            echo "<table>
            <tr><th>Ime</th> <th>Prezime</th> <th>Datum rodjenja</th> <th>pol</th> <th>Visina</th> <th>Tezina</th> <th>Broj Kartona</th> </tr>";
            while ($row = $result->fetch_assoc())
            {
                echo    "<tr>";
                echo    "<td>" .$row['ime'] . "</td>" .
                        "<td>" .$row['prezime'] . "</td>" .
                        "<td>" .$row['datum_rodjenja'] . "</td>" .
                        "<td>" .$row['pol'] . "</td>" .
                        "<td>" .$row['visina']. "</td>" .
                        "<td>" .$row['tezina']. "</td>" .
                        "<td>" .$row['broj_kartona'] . "</td>" . "</tr>";
            }
                 echo "</table>";
        }

        //Prikazati sve pacijente rodjene u 21. veku.
        echo "<br><h3>21. vek</h3><br>";
        $sql = "SELECT DISTINCT * FROM pacijenti WHERE YEAR(datum_rodjenja) > 2000";
        $result = $conn2->query($sql);

        if($result->num_rows == 0)
        {
            echo "<p>Nema pacijenata rodjenih u 21. veku u bazi!</p>";
        }
        else
        {
            echo "<table>
            <tr><th>Ime</th> <th>Prezime</th> <th>Datum rodjenja</th> <th>pol</th> <th>Visina</th> <th>Tezina</th> <th>Broj Kartona</th> </tr>";
            while ($row = $result->fetch_assoc())
            {
                echo    "<tr>";
                echo    "<td>" .$row['ime'] . "</td>" .
                        "<td>" .$row['prezime'] . "</td>" .
                        "<td>" .$row['datum_rodjenja'] . "</td>" .
                        "<td>" .$row['pol'] . "</td>" .
                        "<td>" .$row['visina']. "</td>" .
                        "<td>" .$row['tezina']. "</td>" .
                        "<td>" .$row['broj_kartona'] . "</td>" . "</tr>";
            }
                 echo "</table>";
        }


        //Prikazati sve pacijente čije prezime počinje na neko slovo, sortirane po imenu. 
        //(Potrebno je prikazati samo ona početna slova prezimena koja postoje u bazi)
        echo "<br><h3>Neko pocetno slovo</h3><br>";

        $sql = "SELECT DISTINCT LEFT(prezime,1) AS slovo FROM pacijenti ORDER BY prezime";
        $result = $conn2->query($sql);

        if($result->num_rows == 0)
        {
            echo "<p>Nema prezimena u bazi!</p>";
        }
        else
        {
            while ($row = $result->fetch_assoc())
            {
                $slovo = $row['slovo'];
                $sql1 = "SELECT * FROM pacijenti WHERE prezime LIKE '$slovo%' ORDER BY ime";
                $result1 = $conn2->query($sql1);
                echo "<table>";
                echo "<tr><h3>Prezimena na $slovo</h3></tr>";
                echo "<tr><th>Ime</th> <th>Prezime</th> <th>Datum rodjenja</th> <th>pol</th> <th>Visina</th> <th>Tezina</th> <th>Broj Kartona</th> </tr>";
                    while ($row = $result1->fetch_assoc())
                    {
                    echo    "<tr>";
                    echo    "<td>" .$row['ime'] . "</td>" .
                            "<td>" .$row['prezime'] . "</td>" .
                            "<td>" .$row['datum_rodjenja'] . "</td>" .
                            "<td>" .$row['pol'] . "</td>" .
                            "<td>" .$row['visina']. "</td>" .
                            "<td>" .$row['tezina']. "</td>" .
                            "<td>" .$row['broj_kartona'] . "</td>" . "</tr>";
                    }
                }
                echo "</table>";
            }

        ?>
    </body>

</html>
