<html>
 <head>
        <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
   <?php
                        
        require_once "dm_konekcija.php";

        $logged_id=1; //$id - id logovanog korisnika
                        
         $sql = "SELECT u.id, u.username, p.user_id, p.name
                 FROM users AS u
                 INNER JOIN profiles AS p ON u.id = p.user_id
                 WHERE u.id != $logged_id
                 ORDER BY p.name"; //svi korisnici osim logovanog
                
                        
         $result = $conn->query($sql);
         if ($result->num_rows == 0)
         {
                 echo "<div class='error'> Vasa drustvena mreza nema nijednog korisnika :(</div>";
         }
         else
         {
                echo "<ul>";
                while($row = $result->fetch_assoc())
                {
                        $friend_id = $row['id'];
                        echo "<li>";
                        echo $row['name'];
                        echo " (" . $row['username'] .")";
                        echo "<a href='dm_prati.php?friend_id=$friend_id'>Zaprati</a>&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo "<a href='dm_otprati.php?friend_id=$friend_id'>Otprati</a>";
                        echo "</li>";
                }
                echo "</ul>";
         }
         ?>
 </body>
</html>