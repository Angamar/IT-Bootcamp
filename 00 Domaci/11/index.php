<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">
</head>

<body>

<?php echo "<h1>11. domaći</h1>";

$niz = array
(
'Srpski jezik i književnost'=>5, 
'Matematika'=>4, 
'Informatika'=>2, 
'Biologija'=>3, 
'Hemija'=>3, 
'Geografija'=>4, 
'Engleski'=>3
);

$NajvecaOcena = $niz['Srpski jezik i književnost'];
$zbir=0;

foreach ($niz as $NazivPredmeta=>$Ocena)
{
    $zbir+=$Ocena;
    echo "<p>$NazivPredmeta - $Ocena</p>";
    if ($Ocena > $NajvecaOcena)
    {
        $NajvecaOcena = $Ocena;
    }
}
$Prosecna = $zbir/count($niz);


echo "<p>Svoju najvišu ocenu ($NajvecaOcena) dobio je iz sledećih predmeta:</p>";


foreach ($niz as $NazivPredmeta=>$Ocena)
{
    if ($Ocena == $NajvecaOcena)
    {
      echo "<p>$NazivPredmeta</p>";  
    }
}

echo "<p>Učenikova prosečna ocena je $Prosecna.<br>
Višu od prosečne ocene, učenik je dobio iz sledećih predmeta:</p>";

foreach ($niz as $NazivPredmeta=>$Ocena)
{
    if ($Ocena > $Prosecna)
    {
      echo "<p>$NazivPredmeta</p>";  
    }
}
?>
</body>

</html>