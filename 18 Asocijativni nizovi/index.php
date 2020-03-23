<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">
</head>



<body>

<?php echo "<h1>Zadaci sa nizovima</h1>";


//FOR EACH
$nizElemenata = array(2,4,-6,5);
foreach($nizElemenata as $element) //u $element se redajju redom elementi iz niza, ono sto je bio $tekuci

{
echo $element . "<br>";
}

$age = array(
    "Peter" => 35,
    "Mary" => 27,
    "Joe" => 22
);

echo $age['Peter'];
$age ['Harry'] = 66;
$age ['Sally'] = "24";
echo "<br>";
echo $age['Harry'];

foreach ($age as $ime => $godine)
{
    echo "Kljuc je: $ime, vrednost je: $godine<br>";
}

//1. Dat je niz elemenata u obliku MarkaAuta/Godiste

//a) Ispisati sve automobile, kao i njihova godista
$auta = array
(
    
    "Opel Corsa" => 2004,
    "Opel Astra" => 1998,
    "Audi A6" => 2003,
    "Toyota Yaris" => 2016,
    "Dacia Sandero" => 2014,
);

function sviAutomobili($a)
{
    foreach ($a as $marka => $god)
    {
       echo "<p>Automobil marke $marka je $god. godiste</p>";
    }
}

//b) Ispisati sve automobile, koji su stariji od 10 god
function starijaGodista ($a)
{
    foreach ($a as $marka => $god)
    {
        if (date('Y') - $god >= 10)
        {
            echo "<p>Automobil marke $marka je stariji od 10 god ($god).</p>";
        }
    }
}
//b) Ispisati sve automobile, čija marka sadryi string "Opel" a proizvedena su posle 2000 god,
function opel2000 ($a)
{
    foreach ($a as $marka => $god)
    {
        if(strpos ($marka, "Opel")!== false && $god >= 2000)
        {
            echo "<p>Auto marke $marka proizveden posle 2000. ($god)</p>";
        }
    }
}
sviAutomobili ($auta);
starijaGodista ($auta);
opel2000 ($auta);

//funkcija koja vraca broj automobila koji pocinju na rec auidi a proizvedena su posle 2002:

function audi2002 ($a)
{
    $i=0;
    foreach ($a as $marka => $god)
    {
        if(strpos ($marka, "Audi")!== false && $god > 2002)
        {
           $i++;  
           
        }
    }
    return $i;  //2 uloge returna: 
    //1) vraca rezultat funkcije (ne stampa); 
    //2) PREKIDA tok izvrsenja funkcije. (Dakle, trebalo bi da se pise na kraju, jer to je ono sto se vraca kada bude pozvana)
}

/*$Audi = audi2002 ($auta);
echo "<p>$Audi</p>"*/

echo "<p>Broj automobila: " . audi2002($auta) . "</p>";

//strpos($str1, $str2) - trazi prvo pojavljivanje zadataog stringa 2 u stringu 1
//strrpos($str1, $str2) - trazi poslednje pojavljivanje zadataog stringa 2 u stringu 1
//stripos($str1, $str2) - trazi prvo pojavljivanje zadataog stringa 2 u stringu 1, CASE INSENSITIVE
//strripos($str1, $str2) - trazi poslednje pojavljivanje zadataog stringa 2 u stringu 1, CASE INSENSITIVE
//substr($str1, $pos, $lenght) - trazi string koji pocinje na odredjenoj poziciji i ima odredjenu duzinu
//pr. "Jelelelena" substr('Jelelena', 1,5); -> elele

//Niz u okviru niza 

$niz = array
(
    array(1,2,3, "pera" => 180, 4),
    array(4,5,6),
    array (7,8,9)
);

echo $niz[0][2]; // 3
echo $niz[0]["pera"]; //180

foreach($niz[0] as $key => $value)
{
    echo "<p>$key ==> $value</p>";
}

echo count($niz); //2
echo count($niz[0]); //5

//2. Dat je niz elemenata u obliku ImeOsobe/Visina

$ljudi = array
(
    "Aleksa" => 184, 
    "Nikola" => 180, 
    "Visnja" =>174,
    "Milos" => 188,
    "Dusan" => 188
);

//a) Ispisati sve osobe sa njihovim visinama.

foreach ($ljudi as $ime=>$visina)
{
    echo "<p>$ime je visok/a $visina cm.</p>";
}
echo "<p>----------------------------------</p>";
//b)Ispisati sve natprosečno visoke osobe.

$zbirvisina=0;
foreach ($ljudi as $ime=>$visina)
{
    $zbirvisina+=$visina; //moze i $ljudi[$ime]
}

$prosek = $zbirvisina / count($ljudi);

foreach ($ljudi as $ime=>$visina)
{
    if ($visina >= $prosek)
    {
        echo "<p>$ime ($visina cm) je visi/a od proseka ($prosek)</p>";
    }
}
echo "<p>----------------------------------</p>";
//c)Ispisati sve osobe koje imaju maksimalnu visinu.
$maxvisina = $visina;
$brmaxvisina = 0;

foreach ($ljudi as $ime=>$visina)
{
    if ($visina > $maxvisina)
    {
        $maxvisina = $visina;
    }
}

foreach ($ljudi as $ime=>$visina)
{
    if ($visina == $maxvisina)
    {
        $brmaxvisina++;
    }
}

echo "Najveca visina je $maxvisina cm i broj osoba koji je ima je $brmaxvisina";
echo "<p>----------------------------------</p>";
//d)Ispisati sve osobe sa visinom ispod proseka, a čije ime počinje na slovo 'V'.

foreach ($ljudi as $ime=>$visina)
{
    if ($visina < $prosek and strpos($ime, "V") === 0)
    {
        echo "<p>$ime ($visina cm) je osoba na V niza od proseka ($prosek)</p>";
    }
}
echo "<p>----------------------------------</p>";

// Marka godiste cena



?>




</body>

</html>