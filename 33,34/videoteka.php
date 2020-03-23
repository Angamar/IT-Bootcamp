<html>
    <head>
        <style>
        .error {
            color: red;
            font-weight: bold;
            font-size: 28px;
        }

        table
        {
            background: lightgrey;
            padding: 5px;
            border: 1px black solid;
            margin: 10px;
        }

        th 
        {
            color: darkred;
            text-align: left;
        }

        td {
            padding: 5px;
        }
        </style>
    </head>

    <body>
        <?php 

        $servername = "localhost";
        $username = "Angamar";
        $password = "Tritacke123";
        $database = "videoteka";

        $conn = new mysqli ($servername, $username, $password, $database);
        $conn->set_charset('utf8');
        if ($conn->connect_error)
        {
            die ("<div class='error'>Desila se greska: " . $conn->connect_error . "</div>");
        }

        $sql = "SELECT * FROM filmovi ORDER BY naslov ASC";
        $result = $conn->query($sql);

        if ($result === false)
        {
            echo "<div class='error'>Greska u upitu: $conn->connect_error </div>";
        }
        else
        {
            //upit je dobar, promenljiva $result je objekat.
            if ($result->num_rows == 0)
            {
                echo "Nijedan red ne zadovoljava uslove upita";
            }
            else 
            {
                echo "<table>
                    <tr>
                    <th>Naslov</th>
                    <th>Reziser</th>
                    <th>Godina izdavanja</th>
                    <th>Zanr</th>
                    <th>Ocena</th>
                    </tr>";
                while ($row = $result->fetch_assoc())
                {
                echo "<tr>";
                echo "<td>". $row['naslov']."</td>";
                echo "<td>". $row['reziser']."</td>";
                echo "<td>". $row['god_izdavanja']."</td>";
                echo "<td>". $row['zanr']."</td>";
                echo "<td>". $row['ocena']."</td>";
                echo "</tr>";
                }
                echo "</table>";
            }
        }

        $sql = "SELECT DISTINCT zanr FROM filmovi ORDER BY naslov ASC";
        $result = $conn->query($sql);

        if($result->num_rows == 0)
        {
            echo "<p>Nema filmova u bazi!</p>";
        }
        else
        {
            while ($row = $result->fetch_assoc())
            {
                $zanr = $row['zanr'];
                $sql1 = "SELECT * FROM filmovi WHERE zanr = '$zanr' ORDER BY naslov";
                $result1 = $conn->query($sql1);
                echo "<table>";
                echo "<tr><th colspan='4'>Filmovi sa zanrom: $zanr</th></tr>";
                echo "<tr><th>Naslov</th> <th>Reziser</th> <th>Ocena</th> <th>Godina</th></tr>";
                while ($row1 = $result1->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>" . $row1['naslov'] . "</td>";
                    echo "<td>" . $row1['reziser'] . "</td>";
                    echo "<td>" . $row1['ocena'] . "</td>";
                    echo "<td>" . $row1['god_izdavanja'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        }

        $sql = "SELECT DISTINCT god_izdavanja FROM filmovi ORDER BY god_izdavanja DESC";
        $result = $conn->query($sql);

        if($result->num_rows == 0)
        {
            echo "<p>Nema filmova u bazi!</p>";
        }
        else
        {
            while ($row = $result->fetch_assoc())
            {
                $god = $row['god_izdavanja'];
                $sql1 = "SELECT * FROM filmovi WHERE god_izdavanja = $god ORDER BY god_izdavanja";
                $result1 = $conn->query($sql1);
                echo "<table>";
                echo "<tr><th colspan='4'>Filmovi iz $god. godine</th></tr>";
                echo "<tr><th>Naslov</th> <th>Reziser</th> <th>Ocena</th> <th>Godina</th></tr>";
                while ($row1 = $result1->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>" . $row1['naslov'] . "</td>";
                    echo "<td>" . $row1['reziser'] . "</td>";
                    echo "<td>" . $row1['ocena'] . "</td>";
                    echo "<td>" . $row1['god_izdavanja'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
      
        ?>
    </body>

</html>