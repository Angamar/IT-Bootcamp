<html>
<head>
<style>
.z {
color: pink;
}

.m{
color: blue;
}
</style>

</head>
<body>

<?php
$a = 5;
$b = -10;

if($a >= $b) // ne ide ;
{
    echo "A je vece ili jednako od B <br>";
    echo "$a je vece ili jednako od $b <br>";
}
else 
{
    echo "A je manje od B <br>";
    echo "$a je manje od $b <br>";
}
    echo "Kraj IF naredbe";
/* Poredjenja:
    == jednako
    != razlicito
    <> razlicito
    >  vece
    >= vece ili jednako
    <  manje
    >= manje ili jednako
*/
echo "<br>";
echo "----------------------------------------------------------------";
echo "<br>";
$x=6;
$y=5;

if($x > $y)
{
    echo "$x je vece od $y";
}
elseif($x < $y) // moze biti vise elseif-ova
{
    echo "$x je manje od $y";
}
else 
{
    echo "$x je jednako $y";
}

echo "<br>";
echo "----------------------------------------------------------------";
echo "<br>";
/* Zavisno od pola, izbaci odredjenu slicicu i boju teksta
*/
$pol ="z";
if($pol == "z")
{
    echo "<img src='images/female.jpg'>";
    echo "<p class='z'>Zenski pol</p>";

}
else
{
    echo "<img src='images/male.jpg'>";
    echo "<p class='m'>Muski pol</p>";
}

echo "<p>";
echo "Neki tekst";
echo "</p>";

echo "<br>";
echo "----------------------------------------------------------------";
echo "<br>";

?>




</body>
</html>