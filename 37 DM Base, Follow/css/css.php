<html>
 <head>
        <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
   <?php
                        
        require_once "dm_konekcija.php";
                        
         $sql = "SELECT u.id, u.username, p.user_id, p.name
                 FROM users AS u
                 INNER JOIN profiles AS p ON u.id = p.user_id
                 ORDER BY p.name
                 ";
                        
         $result = $conn->query($sql);
         if ($result->num_rows == 0)
         {
                 echo "<div class='error'> Vasa drustvena mreza nema nijednog korisnika :(</div>";
         }
         ?>
 </body>
</html>