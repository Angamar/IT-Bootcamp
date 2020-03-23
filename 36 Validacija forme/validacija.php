<html>
<head>
	<style>
		.error
		{
			color: red;
		}
	</style>
</head>

<body>
	<?php
		$imeErr = $prezimeErr = $komentarErr = $pravilaErr = "*";
		$ime = $prezime = $komentar = $pol = $pravila = "";
		$prikaz = false;
		
		$servername="localhost";
		$username="root";
		$password="";
		$database="korisnici";
		$conn = new mysqli($servername, $username, $password, $database);
		
		if($conn->connect_error)
		{
			die("<p> Došlo je do greške" . $conn->connect_error . "</p>");
		}
		else
		{
			if(isset($_POST["posalji"]))
			{
				$ime = $_POST["ime"];
				$prezime = $_POST["prezime"];
				$komentar = $_POST["komentar"];
				$pol = $_POST["pol"];
				
				//Validacija za ime
				if(empty($ime))
				{
					$imeErr = "Niste uneli ime";
				}
				elseif(!ctype_alpha($ime)) //isto je i koristiti ctype_alpha($ime) == false
				{
					$imeErr = "Ime može sadržati samo slova";
				}
				
				//Validacija za prezime
				if(empty($prezime))
				{
					$prezimeErr = "Niste uneli prezime";
				}
				elseif(!ctype_alpha($prezime))
				{
					$prezimeErr = "Prezime može sadržazi samo slova";
				}
				
				//Validacija za komentar
				if(strlen($komentar) < 15)
				{
					$komentarErr = "Komentar mora biti duži od 15 karaktera";
				}
				
				//Validacija za pol
				if($pol == "z")
				{
					$pol_ispis = "ženski";
				}
				elseif($pol == "m")
				{
					$pol_ispis = "muški";
				}
				else
				{
					$pol_ispis = "korisnik se nije opredelio";
				}
				
				//Validacija za pravila korišćenja
				if(!isset($_POST["pravila"]))
				{
					$pravilaErr = "Pravila moraju biti prihvaćena";
				}
				
				//Promena promenljive $prikaz ukoliko nije bilo grešaka za unose
				if($imeErr=="*" && $prezimeErr=="*" && $komentarErr=="*" && $pravilaErr == "*")
				{
					$prikaz = true;
				}				
			}
		}
	?>

	<h2>PHP validacija forme</h2>
	
	<form action="" method="post">
		
		<label>Ime:</label>
		<input type="text" name="ime" placeholder="Unesite ime">
		<span class="error"><?php echo $imeErr; ?></span>
		<br><br>
		
		<label>Prezime:</label>
		<input type="text" name="prezime" placeholder="Unesite prezime">
		<span class="error"><?php echo $prezimeErr; ?></span>
		<br><br>
		
		<label>Komentar:</label>
		<textarea name="komentar"></textarea>
		<span class="error"><?php echo $komentarErr; ?></span>
		<br><br>
		
		<label>Pol:</label>
		<input type="radio" name="pol" value="z">Ženski
		<input type="radio" name="pol" value="m">Muški
		<input type="radio" name="pol" value="d" checked>Drugo
		<br><br>
		
		<label>Prihvatite pravila korišćenja:</label>
		<input type="checkbox" name="pravila">
		<span class="error"><?php echo $pravilaErr; ?></span>
		<br><br>
		
		<input type="submit" name="posalji" value="Pošalji">
		<input type="reset" name="obrisi" value="Obriši podatke">
	</form>
	
	<?php
		
		if($prikaz) //ili if($prikaz === true)
		{
			echo "<h2>Uneti podaci</h2>";
			echo "<p> Korisnik:" . $ime . " " . $prezime . "</p>";
			echo "<p>Komentar korisnika:" . $komentar . "</p>";
			echo "<p>Pol korisnika:" . $pol_ispis . "</p>";
			echo "<p>" . $pravila . "</p>";
			
			//INSERT upit za unos korisnika u bazu podataka
			$sql = "INSERT INTO korisnici.profili(ime, prezime, komentar, pol)
					VALUES('$ime', '$prezime', '$komentar', '$pol')";
					
			if($conn->query($sql))
			{
				echo "<p>Uspešno unet korisnik u bazu!</p>";
			}
			else
			{
				echo "<p> Došlo je do greške prilikom unosa korisnika u bazu </p>";
				echo "<p>" . $sql . "</p>";
				echo "<p>". $conn->error ."</p>";
			}
			
			$conn->close();
		}
	?>
	
	
</body>

</html>