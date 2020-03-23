<html>
 <head>
        <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
   <?php
         //1) povezivanje na bazu         
        require_once "dm_konekcija.php"; //ne sme da se izvrsava nadalje ako nema konekcije/ once - najvise jedan obj. konekcija conn
        //Prikazati sve korisnike sem mene
      
      //2) Prikazati sve korisnike osim logovanog
        $id=5; //neka vrednost iz kolone id tabele users (users.id)

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



        $sql =  "SELECT  u.username, p.name, p.dob, u.id
                 FROM users AS u
                 INNER JOIN profiles AS p ON u.id = p.user_id
                 WHERE u.id != $id
                 ORDER BY p.name";

        $sql1 = "SELECT YEAR(dob) AS year FROM profiles
                 WHERE user_id !=$id";

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
                while ($row= $result->fetch_assoc())
                {
                        $god = date("Y", strtotime($row['dob']));
                        echo "<ul>";
                                if ($god % 2 ==0)
                                {
                                echo "<li class ='blue'>".($br++). $row['name'] . " (" . $row['username'] . ") ";
                                }
                                else
                                {
                                echo "<li class ='black'>".($br++) . $row['name'] . "  (" . $row['username'] . ") ";   
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
                                
                        };
                        
                                 echo "</ul>";    
                                }
                               

                }
        }

   ?>
 </body>
</html>