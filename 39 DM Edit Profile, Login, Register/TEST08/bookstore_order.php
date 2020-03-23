<?php require_once "bookstore_connection.php"; ?>

<html>
<head>
<style>
.error{
    color: white;
    background: red;
}
</style>
</head>


<body>

<?php 
$first_name = $last_name = $street_address = $city =$country = $delivery_option = "";
$first_nameErr = $last_nameErr = $street_addressErr = $cityErr = "*";
$valid = false;

if($conn->connect_error)
		{
			die("<p> Došlo je do greške" . $conn->connect_error . "</p>");
        }
        else
        {
            if(isset($_POST["submit"]))
			{
				$first_name = $conn->real_escape_string($_POST["first_name"]);
				$last_name = $conn->real_escape_string($_POST["last_name"]);
				$street_address = $conn->real_escape_string($_POST["street_address"]);
                $city = $conn->real_escape_string($_POST["city"]);
                $country = $conn->real_escape_string($_POST["country"]);
                $delivery_option = $conn->real_escape_string($_POST["delivery_option"]);
              
				
				//Validacija za ime
				if(empty($first_name))
				{
					$first_nameErr = "Tell us your name";
				}
				elseif(!ctype_alpha($first_name)) 
				{
					$first_nameErr = "Name cannot contain numbers";
				}
				
				//Validacija za prezime
                if(empty($last_name))
                 {
                    $last_nameErr = "Tell us your last name";
                }
                elseif(!ctype_alpha($last_name)) 
                {
                    $last_nameErr = "Last name cannot contain numbers";
                }
				
                //Validacija za ulicu
				if(strlen($street_address) < 2)
				{
					$street_addressErr = "Street address is missing or too short";
                }
                
                //Validacija za grad
				if(strlen($city) < 2)
				{
					$cityErr = "City name is missing or too short";
				}
				
				//Validacija za tip paketa
				if($delivery_option == "paperback")
				{
					$delivery_option_echo = "Paperback";
				}
				elseif($delivery_option == "decorative_paper")
				{
					$delivery_option_echo = "Decorative paper";
				}
				else
				{
					$delivery_option_echo = "Greeting card";
				}
				
				
				//Promena promenljive $prikaz ukoliko nije bilo grešaka za unose
				if($first_nameErr == "*" && $last_nameErr == "*" && $street_addressErr == "*" && $cityErr == "*")
				{
					$valid = true;
                }
                else 
                {
                    $valid = false;
                }			
        
        }    }
		
?>

<form action="" method="post">
		
		<label>First name:</label>
		<input type="text" name="first_name">
		<span class="error"><?php echo $first_nameErr; ?></span>
		<br><br>
		
		<label>Last name</label>
		<input type="text" name="last_name">
		<span class="error"><?php echo $last_nameErr; ?></span>
		<br><br>
		
		<label>Street address:</label>
		<input type="text" name="street_address">
		<span class="error"><?php echo $street_addressErr; ?></span>
		<br><br>

        <label>City:</label>
		<input type="text" name="city">
		<span class="error"><?php echo $cityErr; ?></span>
		<br><br>

        <label>Country</label>
        <select name="country">
        <option value = "Serbia">Serbia</option>
        <option value = "Montenegro">Montenegro</option>
        <option value = "Bosnia">Bosnia</option>
        <option value = "Macedonia">Macedonia</option>
        </select>
        <br><br>
		
		<label>Delivery options:</label>
		<input type="radio" name="delivery_option" value="paperback" checked>Paperback
		<input type="radio" name="delivery_option" value="decorative_paper">Decorative paper
		<input type="radio" name="delivery_option" value="greeting_card" checked>Greeting card
		<br><br>
		
		
		<input type="submit" name="submit" value="Submit">
	</form>
<?php
    //INSERT
        if($valid = true)
        {
            $order_time = date("Y-m-d H:i:s");
			$sql = "INSERT INTO bookstore.orders(first_name, last_name, address, city, country, delivery_option, order_time)
					VALUES('$first_name', '$last_name', '$street_address', '$city', '$country', '$delivery_option', '$order_time');";
					
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
        }
		$conn->close();
?>
</body>




</html>
