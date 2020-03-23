<html>
    <head>

        <title> Kalkulator </title>
        <style>
        </style>
    
    </head>

    <body>
    <?php 
    
   
    $b1 = $_POST["br1"];
    $b2 = $_POST["br2"];
    $o = $_POST["operacija"];

    switch($o)
    {
        case "+":
            $rez = $b1 + $b2;
        break;

        case "-":
            $rez = $b1 - $b2;
        break;

        case "*":
            $rez = $b1 * $b2;
        break;
        case "/":
            if ($b2 != 0)
            {
            $rez = $b1 / $b2;
            }
            else
            {
            $rez= "Nije dozvoljeno deliti nulom";
            }
        break;
        
        default: 
        $rez = "Loš unos";
    }

    /*
    if ($o == "+")
    {
        $rez = $b1 + $b2;
    }
    elseif ($o == "-")
    {
        $rez = $b1 - $b2;
    }
    elseif ($o == "*")
    {
        $rez = $b1 * $b2;
    }
    elseif ($o == "/")
    {
        if ($b2 != 0)
        {
        $rez = $b1 / $b2;
        }
        else
        {
        $rez =  "<span style='color: red';>nemoguc. Nije moguce deliti nulom!</span>";
        }
    }
    */
    ?>
    <html>
    <head>
        <style>
       
        </style>
    </head>

    <body>


<p> Rezultat je <?php echo $rez; ?> </p>
 
    </body>

</html>
        
