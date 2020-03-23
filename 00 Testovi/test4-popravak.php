<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">

<style>
</style>
</head>
<body>
<?php

//1.zadatak

function razlika($n, $m)
{
    $zbirParnih=0;
    $brojBrojeva=0;
    for($i=$n; $i<=$m; $i++)
    {
        if ($i%2==0 and $i%3==0)
        {
            $zbirParnih += $i;   
        }

        if ($i%4==0 and $i%8!=0)
        {
            $brojBrojeva++;
        }
    }
    $razlika = $zbirParnih - $brojBrojeva;
    return $razlika;
    
}

$Rezultat = razlika(1,10);
echo "<p>Razlika brojeva je $Rezultat</p>";

//2. zadatak

function redovan($godRodjenja, $godStudija)
{
    $trenutnaGod = date('Y');
    $brojGod = $trenutnaGod - $godRodjenja;
    if  (
        ($brojGod>=18 and $brojGod<=20 and $godStudija==1) or
        ($brojGod>=19 and $brojGod<=21 and $godStudija==2) or
        ($brojGod>=20 and $brojGod<=22 and $godStudija==3)
        )
    {
        echo "<p><div style = 'color:green'>$brojGod god. $godStudija. godina</div><br>
        Student je redovan.</p>";
    }
    else
    {
        echo "<p><div style = 'color:red'>$brojGod god. $godStudija. godina</div><br>
        Student nije redovan.</p>";
    }
}


redovan (1998, 1);


?>




</body>

</html>