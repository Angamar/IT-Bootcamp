<?php 
Echo "<p>1. zadatak -------------------------------------------</p>";
//1. zadatak
$b1 = -19;
$b2 = 333;
$b3 = 334;
echo "<p>Uneli ste brojeve $b1, $b2 i $b3:</p>";
//Najveci broj
if ($b1>$b2 and $b1>$b3){
    Echo "<p>$b1 je najveći broj;</p>";
}
elseif($b2>$b1 and $b2>$b3){
    Echo "<p>$b2 je najveći broj;</p>";
}
elseif($b3>$b1 and $b3>$b2) {
    Echo "<p>$b3 je najveći broj;</p>";
}
else{
    Echo "<p>Nema najvećeg broja;</p>";

}

//Srednji broj
if (($b1>$b2 and $b1<$b3) or ($b1<$b2 and $b1>$b3)){
    Echo "<p>$b1 je srednji broj;</p>";
}
elseif(($b2>$b1 and $b2<$b3) or ($b2<$b1 and $b2>$b3)){
    Echo "<p>$b2 je srednji broj;</p>";
}
elseif(($b3>$b1 and $b3<$b2) or ($b3<$b1 and $b3>$b2)){
    Echo "<p>$b3 je srednji broj;</p>";
}
else{
    Echo "<p>Nema srednjeg broja;</p>";
}

//Najmanji broj
if ($b1<$b2 and $b1<$b3){
    Echo "<p>$b1 je najmanji broj.</p>";
}
elseif($b2<$b1 and $b2<$b3){
    Echo "<p>$b2 je najmanji broj.</p>";
}
elseif($b3<$b1 and $b3<$b2) {
    Echo "<p>$b3 je najmanji broj;.</p>";
}
else{
    Echo "<p>Nema najmanjeg broja.</p>";

}
Echo "<p>2. zadatak -------------------------------------------</p>";
//2. ZADATAK

$godina = date('Y');

if (($godina%100<>0) and ($godina%4 == 0)){
    echo "<p>$godina je prestupna godina.</>";
}
elseif ($godina%400==0) {
    echo "<p>$godina je prestupna godina.</p>";
}
else{
    echo "<p>$godina nije prestupna godina.</p>";
}
Echo "<p>3. zadatak -------------------------------------------</p>";
//3. ZADATAK

date_default_timezone_set('Europe/Belgrade');
$dan = date('D');
$sati = date('H');
$minuti = date('i');

echo "<p>Tacno vreme: $sati:$minuti</p>";

if ($dan == "Sat" or $dan == "Sun")
{
    if ($sati>=10 and $sati<18)
    {
        echo "<p>Radnja je otvorena.</p>";
    }
    else 
    {
        echo "<p>Radnja je zatvorena.</p>";
    }
}
else 
{
    if ($sati>=9 and $sati<20)
    {
        echo "<p>Radnja je otvorena.</p>";
    }
    else 
    {
        echo "<p>Radnja je zatvorena.</p>";
    }   
}
?>


