<html>
<head>
    <link type="text/css" rel ="stylesheet" href="style.css">
</head>
<body>
<?php echo "<h1>Zadaci sa IF naredbom</h1>"?>
<?php 

$n=5; 
$n=-9.03867; //numericki tipovi: int - ceo broj; float - realan broj;

$n="Pera"; //stringovi "" ili ''

$n= True; //logicki tip: true/false

   // KOLICNIK kada se deli $a sa $b: $a / $b (realan broj)
   // Celobrojni kolicnik: (int)($a / $b)
   // OSTATAK kada se deli $a sa $b: $a % $b (ceo broj)

$n=6;
if ($n % 2 == 0)
{
    echo "<p>Broj $n je paran</p>";
}
else {
    echo "<p>Broj $n je neparan</p>";
}


$n=7;
if ($n % 3 == 0)
{
    echo "<p>Broj $n je deljiv sa 3</p>";
}
else {
    echo "<p>Broj $n nije deljiv sa 3</p>";
}

$n=7.2;
if ($n-(int)($n) == 0)
{
    echo "<p>Broj $n ceo</p>";
}
else {
    echo "<p>Broj $n nije ceo</p>";
}

//ispitati pol i godine

$pol='M';
$god = 10;
if ($pol == 'M')
{
    if($god>=18){
        echo "<p>Osoba muskog pola, punoletna.</p>";
    }
    else {
        echo "<p>Osoba muskog pola, maloletna.</p>";
    }
}
else {
    if($god>=18){
     echo "<p>Osoba zenskog pola, punoletna.</p>";
    }
    else {
    echo "<p>Osoba zenskog pola, maloletna.</p>";
    }
}

//ucitati dva cela broja i ispitati da li je veci od njih paran

$b1= 15;
$b2 = 6;

if ($b1>$b2)
{
    if($b1 % 2 == 0)
    {
        echo "$b1 (koji je veci od $b2) je paran";
    }
    else
    {
        echo "$b1 (koji je veci od $b2) je neparan";
    }
}
else 
{
    if($b2 % 2 == 0)
    {
        echo "$b2 (koji je veci od $b1) je paran";
    }
    else
    {
        echo "$b2 (koji je veci od $b1) je neparan";
    }

}

?>



</body>

</html>