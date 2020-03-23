<?php
        //1) pozivamo header
        require_once "dm_header.php";
         //2) povezivanje na bazu         
        require_once "dm_konekcija.php"; //ne sme da se izvrsava nadalje ako nema konekcije/ once - najvise jedan obj. konekcija conn
        //Prikazati sve korisnike sem mene
      
      //3) Prikazati sve korisnike osim logovanog
      $id= $_SESSION['id']; //neka vrednost iz kolone id tabele users (users.id)

        if(!empty($_GET['dodaj'])) //vrednost ne sme da bude prazna, zato testiramo NOT EMPTY
        {
                $fid = $conn->real_escape_string($_GET['dodaj']);
                $sql1 = "SELECT * FROM follow
                         WHERE user_id = $id
                         AND friend_id = $fid";
                $result1 = $conn->query($sql1);
                if($result1->num_rows == 0)
                {
                        $sql2 = "INSERT INTO follow(user_id, friend_id)
                        VALUE ($id, $fid)";
                        $result2 = $conn->query($sql2);
                        if(!$result2)
                        {
                                echo "<span class='error'>Neuspesno dodavanje: " . $conn->error . "</span>";
                        }
                }
        }

        if(!empty($_GET['brisi']))
        {
                $fid =$conn->real_escape_string($_GET['brisi']);
                $sql1 ="DELETE FROM follow
                        WHERE user_id = $id
                        AND friend_id = $fid";
                $result1 = $conn->query($sql1);
                if(!$result1)
                {
                        echo "<span class ='error'>Neuspesno brisanje:" . $conn->error . "</span>";
                }
        }



        $sql = "SELECT  u.username, p.name, p.dob, u.id
              FROM users AS u
              INNER JOIN profiles AS p ON u.id = p.user_id
              WHERE u.id != $id
              ORDER BY p.name";

        $result = $conn->query($sql); //ako se ne izvrsi uspesno, rezulat je FALSE
        if(!$result)
        {
                die("<span class ='error'>Greska u upitu: " . $conn->error . "</span></body></html>");
        }
        else 
        {
                if($result->num_rows == 0)
                {
                        echo "<span class ='error'>Drustvena mreza nema nijednog korisnika</span>";
                }
                else
                {
                        //ima korisnika i treba ih prikazati
                        $br=1;
                        echo "<table>";
                                echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th> Ime i prezime</th>";
                                        echo "<th> Korisnicko ime </th>";
                                        echo "<th> Akcije </th>";
                                echo "</tr>";
                                $trenutnoS = strtotime("now");
                                while ($row= $result->fetch_assoc())
                                {
                                echo "<tr>";
                                        echo "<td>".($br++)."</td>"; //++$br prvo povecava vrednost, pa radi; a $br++ prvo radi, pa povecava;
                                        echo "<td>" . $row['name'] . "</td>";
                                        //$rrow['dob'] -> 'yyyy-mm-dd'
                                        $osobaS = strtotime($row['dob']);
                                        if ($trenutnoS - $osobaS >= 18*365*24*60*60)
                                        {
                                                echo "<td class ='blue'>" . $row['username'] . "</td>";
                                        }
                                        else
                                        {
                                                echo "<td class ='green'>" . $row['username'] . "</td>";   
                                        }
                                        $friend_id = $row['id'];

                                        //Ispitujemo da li pratim korisnika

                                        $sql1 ="SELECT * FROM follow
                                                WHERE user_id = $id
                                                AND friend_id = $friend_id";
                                        $result1 = $conn->query($sql1);
                                        $jatebe = $result1->num_rows; //0 ili 1

                                        //Ispitujemo da li korisnik prati mene

                                        $sql2 ="SELECT * FROM follow
                                        WHERE user_id = $friend_id
                                        AND friend_id = $id";
                                         $result2 = $conn->query($sql2);
                                        $timene = $result2->num_rows; //0 ili 1


                                        echo "<td>";
                                        if($jatebe == 0)
                                        {
                                                if($timene == 0)
                                                {
                                                        echo "<a href='dm_prijatelji2.php?dodaj=$friend_id'>Zaprati</a>";
                                                }
                                                else
                                                {
                                                        echo "<a href='dm_prijatelji2.php?dodaj=$friend_id'>Uzvrati pracenje</a>";
                                                }
                                        }
                                        else
                                        {
                                                echo "<a href='dm_prijatelji2.php?brisi=$friend_id'>Otprati</a>";
                                                
                                        }
                                        echo "</td>";
                                       
                                       
                                echo "</tr>";
                                }
                               
                        echo "</table>";

                }
        }

   ?>
 </body>
</html>