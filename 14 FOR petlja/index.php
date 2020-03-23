<?php
    
    $i = 0;
    while($i <= 10)
    {
        echo "<p> $i </p>";
        $i++; //$i += 1; $i = $i + 1;
    }

    for($i=0; $i<=10; $i++)
    {
        echo "<p> $i </p>";
    }

    $n = 0;
    $m = 40;
    for($i=$n; $i<=$m; $i+=2)
    {
        echo "<p> $i </p>";
    }
    
    for($i=5; $i<=30; $i++)
    {
        if($i % 3 == 0 && $i % 5 != 0)
        {
            echo "<p> Broj je $i </p>";
        }
    }


    
    //Ispisati brojeve od 20 do 1
    for($j=20; $j>=1; $j--)
    {
        echo "$j <br>";
    }
    
    //Suma brojeva od 1 do 100
    
    $s = 0;
    for($i=1; $i<=100; $i++)
    {
        $s = $s + $i; //$s += $i;
    }
    echo "$s <br>";
    

    //Suma brojeva od 1 do n
    $s = 0;
    $n = 5;
    for($i=1; $i<=$n; $i++)
    {
        $s = $s + $i; //$s += $i;
    }
    echo "$s <br>";

    //Suma brojeva od n do m
    $s = 0;
    $n = 5;
    $m = 55;
    for($i=$n; $i<=$m; $i++)
    {
        $s = $s + $i; //$s += $i;
    }
    echo "$s <br>";

    //Proizvod brojeva od n do m
    $n = 1;
    $m = 5;
    $pro = 1;
    while($n <= $m)
    {
        $pro = $pro * $n; //$pro *= $n;
        $n++; //$n += 1; $n = $n + 1;
    }
    echo $pro . "<br>";

    $n = 1;
    $m = 5;
    $pro = 1;
    for($i = $n; $i <= $m; $i++)
    {
        $pro *= $i;
    }
    echo $pro . "<br>";
    
    
    //Odrediti proizvod, sumu i broj svih brojeva deljivih sa 11 
    //u intervalu od 20 do 100. Ispisati sve ovakve brojeve.
    $p = 1;
    $s = 0;
    $br = 0;
    for($i = 20; $i <= 100; $i++)
    {
        if($i % 11 == 0)
        {
            $p = $p * $i; //$p *= $i;
            $s += $i; //$s = $s + $i;
            $br++;
            echo $i . " ";
        }
    }
    echo "<br>";
    echo "Suma: " . $s . "<br>";
    echo "Proizvod: " . $p . "<br>";
    echo "Broj brojeva: " . $br . "<br>";
    
    //10
    
    for($i = 1; $i <= 3; $i++)
    {
        echo "<img src='$i.png'>";
        echo "<br>";
    }
    

    
    for($i = 1; $i <= 30; $i++)
    {
        $ost = $i % 3;
        $ost++;
        echo "<img src='$ost.png'>";
        echo "<br>";
    }
    
    
    
    for($j = 1; $j <= 10; $j++)
    {
        for($i = 1; $i <= 3; $i++)
        {
            echo "<img src='$i.png'>";
            echo "<br>";
        }
    }
    
    /*
    $br = 1;
    while($br <= 10)
    {
        for($i = 1; $i <= 3; $i++)
        {
            echo "<img src='$i.png'>";
            echo "<br>";
        }
        $br++;
    }
*/

    //Ispisati aritmetičku sredinu brojeva od n do m.
    
    $n = 5;
    $m = 16;
    $s = 0;
    $br = 0;
    for($i = $n; $i <= $m; $i++)
    {
        $s += $i;
        $br += 1; //$br++;
    }
    $arSr = $s / $br;
    echo  "Aritmeticka sredina je ". $arSr . "<br>";
    
    
    //Prebrojati koliko brojeva od n do m je pozitivno,
    // a koliko njih je negativno.
    $brPoz = 0;
    $brNeg = 0;
    $n = -5;
    $m = 7;
    for($i = $n; $i <= $m; $i++)
    {
        if($i > 0)
        {
            $brPoz++;
        }
        if($i < 0)
        {
            $brNeg++;
        }
    }
    echo "Broj negativnih je: $brNeg <br>";
    echo "Broj pozitivnih je: $brPoz <br>";
    

    //Prebrojati i izračunati sumu brojeva od n do m 
    //kojima je poslednja cifra 4 i parni su.
    
    $suma = 0;
    $br = 0;
    $n = 10;
    $m = 30;
    for($i=$n; $i<=$m; $i++)
    {
        $cifraJedinice = $i % 10;
        if($cifraJedinice == 4) //if($i%10 == 4)
        {
            $suma += $i;
            $br++;
        }
    }
    echo "Suma brojeva je $suma, broj brojeva je $br <br>";
    

    //Ispisati broj brojeva koje treba sabrati od n do m
    //tako da njihova suma bude manja ili jednaka 50
    $n = 1;
    $m = 70;
    $suma = 0;
    $br = 0;
    while($suma <= 50 && $n<$m)
    {
        $suma += $n;
        $n++;
        $br++;
    }
    echo "Broj brojeva je: $br <br>";




?>