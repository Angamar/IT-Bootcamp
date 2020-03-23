<?php session_start();?>
<html>
    <head>
    <link rel="stylesheet" type="text/css"
             href="style.css">
    </head>
    <body>
    <?php
    require_once "dm_konekcija.php";


    $usernameErr = $passwordErr = "*";
 //da li smo dosli post metodom

 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
         //korisnik je poslao username i password i pokusava logovanje
         $username = $conn->real_escape_string($_POST['username']);
         $password = $conn->real_escape_string($_POST['password']);
         if(empty($username))
         {
                 $usernameErr = "Korisnicko ime ne sme biti prazno";
         }
         if(empty($password))
         {
                 $passwordErr = "Lozinka ne sme biti prazna";
         }
         if (!empty($username) and !empty($password))
        {
                $sql = "SELECT * FROM users WHERE username='$username'";
                $result = $conn->query($sql);
                if ($result->num_rows == 0)
                {
                        $usernameErr = "Ne postoji korisnik sa unetim korisnickim imenom";
                }
                else
                {
                        //postoji korisnicko ime, treba proveriti sifru
                        $row = $result->fetch_assoc();
                        $sifra = $row['password'];
                        if ($sifra != md5($password))
                        {
                                $passwordErr = "Pogresna lozinka";
                        }
                        else
                        {
                        //ovde vrsimo logovanje
                        $_SESSION['id'] = $row['id']; //sesija je asocijativni niz, mi biramo kako cemo da nazovemo kljuc i koju vrednost da mu dodelimo
                        $id = $_SESSION['id'];
                        $sql1 = "SELECT name FROM profiles
                                 WHERE user_id = $id";
                        $result1 = $conn->query($sql1);
                        $row1 = $result1->fetch_assoc();
                        $_SESSION['name'] = $row1['name'];
                        $name = $_SESSION['name'];
                        header('Location: dm_prijatelji2.php');
                        }
                }
        }
}

?>


        <form action="dm_login.php" method="POST">
            Korisničko ime:
            <input type="text" name="username">
            <span class="error"> <?php echo $usernameErr; ?> </span>
            <br><br>
            Lozinka:
            <input type="password" name="password">
            <span class="error"> <?php echo $passwordErr; ?> </span>
            <br><br>
            <input type="submit" name="prijavi_se" value="Prijavi se">
        </form>
    </body>       

</html>