<?php
    require_once "dm_header.php";
    $id = $_SESSION['id'];
    $sql = "SELECT profiles.name, profiles.dob, users.username
            FROM profiles
            INNER JOIN users
            ON users.id = profiles.user_id
            WHERE profiles.user_id = $id";
    $result = $conn->query($sql);
    $pom = $result->fetch_assoc();
    $imeValue = $pom['name'];
    $dobValue = $pom['dob'];
    $usernameValue = $pom['username'];

    $imeErr = $datumErr = $usernameErr = "*";

    if(isset($_POST["potvrdi"])) //if(!empty($_POST["potvrdi"]))
    {
        $ime = $conn->real_escape_string($_POST["ime"]);
        $datum = $conn->real_escape_string($_POST["datum"]);
        $username = $conn->real_escape_string($_POST["username"]);
        
        if(empty($ime))
        {
            $imeErr = "Niste uneli ime i prezime";
        }
        if(empty($datum))
        {
            $datumErr = "Niste uneli datum";
        }
        if(empty($username))
        {
            $usernameErr = "Niste uneli korisničko ime";
        }
        else
        {
            // Dohvatamo sva korisnicka imena
            // drugih korisnika, i proveravamo da nije 
            // doslo do poklapanja
            $sql = "SELECT username FROM users
                    WHERE id != $id
                    AND username = '$username'";
            $result = $conn->query($sql);
            if($result->num_rows > 0)
            {
                $usernameErr = "Korisnicko ime je zauzeto!";
            }
        }
                
        if($imeErr == "*" && $datumErr == "*" && $usernameErr=="*")
        {
            $sql = "UPDATE profiles
                    SET name='$ime', dob='$datum'
                    WHERE user_id = $id";
            $conn->query($sql);

            $sql = "UPDATE users
                    SET username='$username'
                    WHERE id = $id";
            $conn->query($sql);

            // Nakon update-a, azuriramo i promenljive
            // cije vrednosti upisujemo u inpute u formi
            $imeValue = $ime;
            $dobValue = $datum;
            $usernameValue = $username;
        }
    }
?>

    <form action="dm_izmeni_profil.php" method="POST">
        Ime i prezime: 
        <input type="text" name="ime" value=" <?php echo $imeValue; ?>" >
        <span class="error"> <?php echo $imeErr; ?> </span>
        <br><br>
        Datum rođenja:
        <input type="date" name="datum" value= "<?php echo $dobValue; ?>">
        <span class="error"> <?php echo $datumErr; ?> </span>
        <br><br>
        Korisničko ime:
        <input type="text" name="username" value= "<?php echo $usernameValue; ?>">
        <span class="error"> <?php echo $usernameErr; ?> </span>
        <br><br>
        <input type="submit" name="potvrdi" value="Potvrdi">
    </form>
</body>       

</html>