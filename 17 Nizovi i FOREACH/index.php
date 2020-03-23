<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">
</head>



<body>

<?php
    

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


//11. zadatak
//Promeniti znak svakom elementu celobrojnog niza.

$brojevi = array(15, -5, 6, 9, 7, 8, -10);

for ($i=0; $i < count($brojevi); $i++)
{
    $brojevi[$i] = $brojevi[$i] * (-1);

}

for ($i=0; $i < count($brojevi); $i++)
{
    echo "$brojevi[$i] <br>";
    
}
//Funkcija za ispis niza
function ispisNiza($niz)
{
    for ($i=0; $i < count($niz); $i++)
    {
        echo "$niz[$i]; ";
        
    }
}
//12. zadatak
//Promeniti znak svakom neparnom elementu celobrojnog niza sa parnim indeksom.

$brojevi = array(15, -5, 6, 9, 7, 8, -10);

for ($i=0; $i < count($brojevi); $i++)
{
   if ($brojevi[$i]%2 != 0 && $i%2 == 0)
   {
       $brojevi[$i] = $brojevi[$i] * (-1);
   }

}

ispisNiza ($brojevi);
echo "<br>";

//14. zadatak
//Ispisati duzinu svakog elementa u nizu stringova.

$stringovi = array("Jedan", "Dva", "Tri", "Cetiri", "Pet");
for ($i=0; $i < count($stringovi); $i++)
{
    echo strlen($stringovi[$i]) . "<br>";
}

//15. zadatak
// Odrediti element u nizu stringova sa najvecom duzinom.

$stringovi = array("Jedan", "Dva", "Tri", "Cetiri", "Pet");
$max = strlen($stringovi[0]);
for ($i=0; $i < count($stringovi); $i++)
{
    $rec = $stringovi[$i];
    $duzinaReci = strlen($stringovi[$i]);
    if ($duzinaReci > $max)
    { 
        $max = $duzinaReci;
        $maxRec = $rec;
    }
}

echo "<p>$max</p>";
echo "<p>$maxRec</p>";

//16. zadatak
//Odrediti broj elemenata u nizu stringova cija je duzina veca od prosecne duzine svih stringova u nizu.
$br = 0;
$stringovi = array("Jedan", "Dva", "Sesnaest", "Tri", "Cetiri", "Pet");
$suma = 0;
for ($i=0; $i < count($stringovi); $i++)
{
    $rec = $stringovi[$i];
    $duzinaReci = strlen($rec);
    $suma+= $duzinaReci;
}

$arsr = $suma / count($stringovi);

for ($i=0; $i < count($stringovi); $i++)
{
    $rec = $stringovi[$i];
    $duzinaReci = strlen($rec);
    if ($duzinaReci > $arsr)
    {
        $br++;
    }
}
echo "<p>Aritmeticka sredina: $arsr</p>";
echo "<p>Ima $br</p>";


//17. Odrediti broj elemenata u niyu stringova koji sadrze slovo a
$stringovi = array("Jedan", "Dva", "Sesnaest", "Tri", "Cetiri", "Pet");
$brElemenata = 0;
for ($i=0; $i < count($stringovi); $i++)
{
    $rec = $stringovi[$i];
    if (strpos($rec, "a") == true)
    {
        $brElemenata++;
    }
}

echo "$brElemenata";

//18. Odrediti broj elemenata u nizu stringova koji pocinju na slovo a/A

$stringovi = array("avan", "Ana", "avokado", "jabuka", "Amsterdam", "narandza");
$br = 0;

for ($i=0; $i<count($stringovi); $i++)
{
    $rec=$stringovi[$i];
    if (strpos($rec, "a") === 0 or strpos($rec, "A") === 0) //mora === jer bi == vracao false sto se racuna kao 0, a === strogo vraca samo brojeve,0==false je tacno, ali 0===false nije tacno, jer nisu istog tipa.
    {
        $br++;
    }
}

echo "<p>$br</p>";

//19. zadatak
//Na osnovu celobrojnog niza $a[0], $a[1], … formirati niz $b[0], $b[1], ... koji sadrži samo pozitivne brojeve.

/*$a = array(2,3,-5,-7,9,-23,1);
$b = array();
for ($i=0; $i<count($a); $i++)
{
    if ($a[$i]>0)
    {
        $b[] =$a[$i];
    }
}

ispisNiza ($b);
echo "<br>";*/

//20.zadatak
/*Dati su nizovi
$a[0], $a[1], …, $a[n - 1] i
$b[0], $b[1], …, $b[n - 1].
Formirati niz $c[0], $c[1], …, $c[2n – 1] čiji su elementi
$a[0], $b[0], $a[1], $b[1], …, $a[n - 1], $b[n
- 1].*/

$a = array(2,3,-5,-7);
$b = array(4,-4,10,-11);
$c = array();
for ($i=0; $i<count($a); $i++)
{
    
        $c[] =$a[$i];
        $c[] =$b[$i];
    
}

ispisNiza ($c);
echo "<br>";

//21. zadatak
/*Dati su nizovi
$a[0], $a[1], …, $a[n - 1] i
$b[0], $b[1], …, $b[n - 1].
Formirati niz $c[0], $c[1], …, $c[n – 1] čiji
su elementi
$a[0] * $b[0], $a[1] * $b[1], …, $a[n – 1] *
$b[n – 1].*/


$a = array(2,3,-5,-7);
$b = array(4,-4,10,-11);
$c = array();
for ($i=0; $i<count($a); $i++)
{
    $c[] =$a[$i] * $b[$i];
}

ispisNiza ($c);
echo "<br>";

//22. zadatak
/*Na osnovu niza $a[0], $a[1], …, $a[2n - 1]
formirati niz $b[0], $b[1], …, $b[n - 1].po
formuli: a[i*/
echo "<br>";
$a = array(4,-4,10 ,2, 3);
$b = array();
$n_a = count($a);
for ($i=0; $i<$n_a/2; $i++)
{
    $tekuci = $a[$i];
    $odgovarajuci = $a[$n_a-$i-1]; //-1 jer se krece od nule.
    $b[]= ($tekuci+$odgovarajuci)/2;
}
ispisNiza($b);


//FOR EACH
$nizElemenata = array(2,4,-6,5);
foreach($nizElemenata as $element) //u $element se redajju redom SVI elementi iz niza, ono sto je bio $tekuci. Ne zna se koji je index, samo se elementi redjaju. 

{
echo $element . "<br>";
}

//Ispisati sve pozitivne brojeve niza x. 
//kada naidje negativni broj, prekinuti ispis. (foreach petlja)

$x = array (2,6,-5,7,-8,19);

foreach($x as $x_elem)
{
    if ($x_elem > 0)
    {
        echo $x_elem . "<br>";
    }
    else 
    {
        break;
    }
}

echo "Ovo se izvrsava posle break";



?>
</body>

</html>