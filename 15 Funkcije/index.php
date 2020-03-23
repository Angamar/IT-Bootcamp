<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">
</head>



<body>


<?php 
    echo "<h1>Zadaci sa funkcijama</h1>"; 

    function mojaFunkcija()
    {
        echo "<p>Zdravo svete!</p>";
    }
?>


<h3>Poziv funkcije mojaFunkcija</h3>

<?php

mojaFunkcija(); //poziv funkcije;
?>
<a href="">Google</a>

<?php
mojaFunkcija();
mojaFunkcija();
mojaFunkcija();
function drugaFunkcija($text)
{
    echo "<p>$text</p>";
}

drugaFunkcija("Danas je cetvrtak.");
drugaFunkcija("Jesen je kao da je prolece :)");
$a = "Danas je 24.10.2019.";
drugaFunkcija($a);

function korisnik ($ime, $prezime, $god)
{
    if(($god%10==1) and ($god!=11))
    {
    echo "<p>Korisnik: $ime $prezime ima $god godinu.</p>";
    }
    elseif (($god%10>=2) and ($god % 10 <= 4) and ($god!=12) and ($god!=13) and ($god!=14))
    {
        echo "<p>Korisnik: $ime $prezime ima $god godine.</p>";
    }
    else 
    {
        echo "<p>Korisnik: $ime $prezime ima $god godina.</p>";
    }
}

korisnik ("Ana","Atic","50");
korisnik ("Bojana", "Bokic","1");
korisnik ("Vuk", "Vulic","22");


function zbir ($a, $b)
{
    $rez = $a+$b;
    return $rez;
}

$rezultat = zbir(5,17);
echo $rezultat;
//sabrati 4 broja funkcijom od 2

//1. nacin

$c = zbir (2,3);
$d = zbir (1,4);
$rezultat = zbir($c, $d);
echo "<p>rezultat je $rezultat</p>";

//2. nacin

echo zbir(zbir(1,2),zbir(3,4));

//3.   napisati funkciju neparan koja za uneti ceo broj n vraca 
//     tacno ukoliko je neparan ili netacno ukoliko nije neparan

function neparan($b)
{
    if($b%2==0)
    {
        return false;
    }
    else
    {
        return true;
    }
}

$broj = neparan(3);

if ($broj=false)
{
    echo "<p>Broj $broj je paran</p>";
}
else
{
    echo "<p>Broj $broj je neparan</p>";
}

function slika ($img)
{
    echo "<img src='$img' width='200px'>";
}


//5. zadatak
slika ('images/ruze.jpg');

//6. zadatak napraviti funkciju koja za unetu boju na 
//engleskom jeziku boji tekst paragrafa u tu boju


function boja($color)
{
    $text = 'Neki tekst';
    echo "<p style='color:$color'>$text</p>";
    
}


boja('red');


// 7. Napraviti funkciju kojoj se prosledjuje ceo broj a ona ispisuje tekst koji ima prosledjenu velicinu fonta


function velicinaFonta($fontSize)
{
    $text = 'Neki tekst';
    echo "<p style='font-size:$fontSize'>$text</p>";  
}


velicinaFonta('20');


//1. Zadatak
function digitron($cif1, $cif2, $operacija)
{
    if ($operacija=='+')
    {
        $rezultat = $cif1 + $cif2;
        echo "$cif1 + $cif2 = $rezultat";
    }
    elseif ($operacija=='-')
    {
        $rezultat = $cif1 - $cif2;
        echo "$cif1 - $cif2 = $rezultat";
    }
    elseif ($operacija=='*')
    {
        $rezultat = $cif1 * $cif2;
        echo "$cif1 * $cif2 = $rezultat";
    }
    elseif ($operacija=='/') 
    {
        $rezultat = $cif1 / $cif2;
        echo "$cif1 / $cif2 = $rezultat";
    }
    
}
digitron(7,2,'+');

//2. Zadatak
$niz = array(1,2,3,4,5,6,7,8,9,10);
$brojB = count($niz);
$zbirNB=0;
$brojNB=0;
for ($x=0; $x<$brojB; $x++)
{
    if ($niz[$x]%2==1)
    {
        $zbirNB+=$niz[$x];
        $brojNB++;
    }
}

$srvNB = $zbirNB/$brojNB;
echo "<p>Srednja vrednost neparnih elemenata niza <br> je $srvNB</p>";

?>



</body>

</html>