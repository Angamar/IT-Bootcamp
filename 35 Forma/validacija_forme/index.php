<html>
    <head>
        <title> Kalkulator </title>
        <style>
      form {
          border: 1px solid black;
          padding:15px;
          margin: 10px;
          width: 300px;
          background: lightgray;
      }

      label {
          padding: 10px;
          width: 100px;
          color: blue;
          margin: 10px 0;
      }

.error {
    color: red;
}

        </style>
    </head>

    <body>

    <html>
    <head>
        <style>
       
        </style>
    </head>

    <body>
<h2> PHP Validacija forme</h2>
<hr>

<?php 
$imeErr = $prezimeErr = $komentarErr = $polErr = $pravilaErr = "*";
?>
    <form action="" method="post">
        <label>Ime:</label>
        <input type="text" name = "ime" placeholder="unesite ime">
        <span class="error"><?php echo $imeErr;?></span>
        <br><br>

        <label>Prezime:</label>
        <input type="text" name = "prezime" placeholder="unesite prezime">
        <span class="error"><?php echo $prezimeErr;?></span>
        <br><br>

        <label>Komentar:</label>
        <textarea name="komentar"></textarea>
        <span class="error"><?php echo $komentarErr;?></span>
        <br><br>

        <label>Pol:</label>
        <input type="radio" name="pol" value="z">Zenski
        <input type="radio" name="pol" value="m">Muski
        <input type="radio" name="pol" value="d" checked>Drugo
        <br><br>

        <label>Prihvatite pravila koriscenja:</label>
        <input type="checkbox">
        <span class="error"><?php echo $pravilaErr;?></span>
        <br><br>

        <input type="submit" name="posalji" value="Posalji">
        <br><br>
    </form>
    <?php 
    if(isset($_POST["posalji"]))
    {
        $pol = $_POST["pol"];
        if ($pol == "z")
        {
            $pol = "zenski";
        }
        elseif ($pol == "m")
        {
            $pol = "muski"; 
        }
        else
        {
            $pol= "Korisnik se nije opredelio";
        }
        echo "<h2> Uneti podaci:</h2>";
        echo "<p>Korisnik: " .$_POST["ime"] . " ". $_POST["prezime"] .  "</p>";
        echo "<p>Komentar: " . $_POST["komentar"] . "</p>";
        echo "<p>Pol: " . $_POST["pol"] . "</p>";
        echo "<p>Pravila prihvacena: " . "</p>";
    }
    ?>




    </body>
</html>
        
