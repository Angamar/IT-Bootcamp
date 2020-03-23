<?php
    /*
    $imena = array("Ivana", "Mila", "Marta", "Ana");
    echo $imena[0];
    echo "<br>";
    echo $imena[2];

    $prezimena = array("Ivanovic", "Milic", "Martic", "Antic", "Markovic");
    echo "<p> $prezimena[2] </p>";

    $brojImena = count($imena);
    echo "<p> $brojImena </p>";
    for($i = 0; $i < count($imena); $i++)
    {
        echo $imena[$i] . " . ";   
    }

    $brojPrezimena = count($prezimena);
    echo "<p> $brojPrezimena </p>";
    */

    /*
    //2. Odrediti zbir elemenata celobrojnog niza.

    $brojevi = array(15, -5, 6, 9, 7, 8, -10);
    $suma = 0;

    for($i = 0; $i < count($brojevi); $i++)
    {
        $suma += $brojevi[$i];
    }
    echo $suma;
    */

    
    //3. Odrediti srednju vrednost elemenata celobrojnog niza.
    /*
    $brojevi = array(15, -5, 6, 9, 7, 8, -10);
    $suma = 0;

    for($i = 0; $i < count($brojevi); $i++)
    {
        $suma += $brojevi[$i];
    }
    $arsr = $suma / count($brojevi);
    echo $arsr;
    */
    
    /*
    //4. Odrediti maksimalnu vrednost u celobrojnom nizu.
    
    $brojevi = array(15, -5, 6, 19, 7, 8, -10, 21, 23, 19);
    //$brojevi = array(-15, -5, -6, -19, -7, -8, -10, -21, -23, -19);
    $maks = $brojevi[0];
    for($i = 1; $i < count($brojevi); $i++)
    {
        if($maks < $brojevi[$i])
        {
            $maks = $brojevi[$i];
        }
    }
    echo "Maksimum je $maks";
    */

    /*
    //5. Odrediti minimalnu vrednost u celobrojnom nizu.
    
    //$brojevi = array(15, -5, 6, 19, 7, 8, -10, 21, 23, 19);
    $brojevi = array(-15, -5, -6, -19, -7, -8, -10, -21, -23, -19);
    $minimum = $brojevi[0];
    for($i = 1; $i < count($brojevi); $i++)
    {
        if($minimum > $brojevi[$i])
        {
            $minimum = $brojevi[$i];
        }
    }

    echo "Minimum je $minimum";
    */

    /*
    //6. Odrediti indeks najvećeg elementa celobrojnog niza.
    $brojevi = array(15, -5, 6, 19, 7, 8, -10, 21, 23, 19);
    $maks = $brojevi[0];
    $indeks = 0;
    for($i = 1; $i < count($brojevi); $i++)
    {
        if($maks < $brojevi[$i])
        {
            $maks = $brojevi[$i];
            $indeks = $i;
        }
    }

    echo "Maksimum je broj $maks sa indeksom $indeks";
    */

    /*
    //7. Odrediti broj elemenata celobrojnog niza koji su veći od srednje vrednosti.
    $brojevi = array(15, -5, 6, 9, 7, 8, -10);
    $suma = 0;

    for($i = 0; $i < count($brojevi); $i++)
    {
        $suma += $brojevi[$i];
    }
    $arsr = $suma / count($brojevi);
    echo $arsr;
    echo "<br>";

    $br = 0;
    for($i = 0; $i < count($brojevi); $i++)
    {
        if($brojevi[$i] > $arsr)
        {
            $br++;
        }
    }
    echo "Broj brojeva vecih od aritmeticke sredine je $br";
    */

    /*
    //8. Izračunati zbir pozitivnih elemenata celobrojnog niza.
    $brojevi = array(15, -5, 6, 9, 7, 8, -10);
    $suma = 0;
    for($i = 0; $i < count($brojevi); $i++)
    {
        if($brojevi[$i] > 0)
        {
            $suma += $brojevi[$i]; //$suma = $suma + $brojevi[$i];
        }
    }
    echo $suma;
    */

    /*
    //9. Odrediti broj parnih elemenata u celobrojnom nizu.
    $brojevi = array(15, -5, 6, 9, 7, 8, -10);
    $br = 0;
    for($i = 0; $i < count($brojevi); $i++)
    {
        if($brojevi[$i]%2 == 0)
        {
            $br++; //$br+=1; //$br=$br+1;
        }
    }
    echo $br;
    */

    /*
    //10. Izračunati sumu elemenata u nizu sa parnim indeksom.
    $brojevi = array(15, -5, 6, 9, 7, 8, -10);
    $suma = 0;
    for($i=0; $i<count($brojevi); $i++)
    {
        if($i % 2 == 0)
        {
            $suma += $brojevi[$i];
        }
    }
    echo $suma;
    */
    //Paran element na parnom indeksu
    /*
    $brojevi = array(15, -5, 6, 9, 7, 8, -10);
    $suma = 0;
    for($i=0; $i<count($brojevi); $i++)
    {
        if($brojevi[$i] % 2 == 0 && $i % 2 == 0)
        {
            $suma += $brojevi[$i];
        }
    }
    echo $suma;
    */
    
    //11. Promeniti znak svakom elementu celobrojnog niza.
    /*
    $brojevi = array(15, -5, 6, 9, 7, 8, -10);
    for($i = 0; $i < count($brojevi); $i++)
    {
        $brojevi[$i] = $brojevi[$i] * (-1);
    }
    for($i = 0; $i < count($brojevi); $i++)
    {
        echo "$brojevi[$i] <br>";
    }
    */

    //Funkcija za ispis elemenata niza
    function ispisNiza($niz)
    {
        for($i=0; $i<count($niz); $i++)
        {
            echo "$niz[$i] ; ";
        }
    }

    //12.  Promeniti znak svakom neparnom elementu celobrojnog niza 
    //sa parnim indeksom.
    /*
    $brojevi = array(15, -5, 6, 9, 7, 8, -10);
    for($i = 0; $i < count($brojevi); $i++)
    {
        if($brojevi[$i]%2 != 0 &&  $i%2 == 0)
        {
            $brojevi[$i] = $brojevi[$i] * (-1);
        }
    }
    ispisNiza($brojevi);
    */

    /*
    //13. Odrediti broj parnih elemenata sa neparnim indeksom.
    $brojevi = array(15, -5, 6, 9, 7, 8, -10);
    $br = 0;
    for($i = 0; $i < count($brojevi); $i++)
    {
        if($brojevi[$i]%2 == 0 &&  $i%2 != 0)
        {
            $br++;
        }
    }
    echo $br;
    */

    /*
    //14. Ispisati dužinu svakog elementa u nizu stringova.
    //strlen() vraca duzinu stringa (broji i razmake)
    //echo strlen("Papir kamen makaze"); 
    $stringovi = array("Jedan", "Dva", "Tri", "Cetiri", "Pet");
    for($i = 0; $i < count($stringovi); $i++)
    {
        $rec = $stringovi[$i];
        $duzinaReci = strlen($rec);
        echo $duzinaReci;
        echo "<br>";
        //echo strlen($stringovi[$i]) . "<br>";
    }
    */ 
    /*
    //15. Odrediti element u nizu stringova sa najvećom dužinom.
    $stringovi = array("Jedan", "Dva", "Sesnaest" , "Tri", "Cetiri", "Pet");
    
    $maks = strlen($stringovi[0]);
    $maksRec = $stringovi[0];
    for($i=0; $i<count($stringovi); $i++)
    {
        $tekucaRec = $stringovi[$i];
        $tekucaKaraktera = strlen($tekucaRec);
        if($tekucaKaraktera > $maks)
        {
            $maks = $tekucaKaraktera;
            $maksRec = $tekucaRec;
        }
    }
    echo $maks;
    echo "<br>";
    echo $maksRec;
    */

    //Podstring u reci
    //echo strpos("Jelena", "e");
    /*
    $ime = "Anamarija";
    $podstring = "marija";
    echo strpos($ime, $podstring);
    */

    //Provera da li rec sadrzi neko slovo
    /*
    $ime = "Anamarija";
    if( strpos($ime, "k") == true )
    {
        echo "Sadrzi";
    }
    else
    {
        echo "Ne sadrzi";
    }
    */

    //16. Odrediti broj elemenata u nizu stringova 
    //čija je dužina veća od prosečne dužine svih stringova u nizu.
    /*
    $stringovi = array("Jedan", "Dva", "Sesnaest" , "Tri", "Cetiri", "Pet");
    $suma = 0;
    for($i=0; $i<count($stringovi); $i++)
    {
        $rec = $stringovi[$i];
        $duzinaReci = strlen($rec);
        $suma += $duzinaReci; //$suma += strlen($stringovi[$i])
    }
    $arsr = $suma / count($stringovi);
    echo $arsr . "<br>";
    $br = 0;
    for($i=0; $i<count($stringovi); $i++)
    {
        $rec = $stringovi[$i];
        $duzinaReci = strlen($rec);
        if( $duzinaReci > $arsr )
        {
            $br++;
        }
    }
    echo $br;
    */

    /*
    //17. Odrediti broj elemenata u nizu stringova koji sadrže slovo 'a'.
    $stringovi = array("Jedan", "Dva", "Sesnaest" , "Tri", "Cetiri", "Pet");
    $brElemenata = 0;
    for($i=0; $i<count($stringovi); $i++)
    {
        $rec = $stringovi[$i];
        if( strpos($rec, "a") == true )
        {
            $brElemenata++;
        }
    }
    echo $brElemenata;
    */

    /*
    //18. Odrediti broj elemenata u nizu stringova 
    // koji počinju na slovo 'a' ili 'A'.
    $stringovi = array("avan", "Ana", "avokado", "jabuka", "Amsterdam", "narandza");
    $br = 0;
    for($i = 0; $i < count($stringovi); $i++)
    {
        $rec = $stringovi[$i];
        if( strpos($rec, "a")===0 || strpos($rec, "A")===0 )
        {
            $br++;
        }
    }
    echo $br;
    */
    /*
    if(0 == false)
    {
        echo "TACNO JE";
    }
    else
    {
        echo "NIJE";
    }
    */
    /*
    if(0 === false)
    {
        echo "TACNO JE";
    }
    else
    {
        echo "NIJE";
    }
    */
    /*
    if(2 == true)
    {
        echo "TACNO JE";
    }
    else
    {
        echo "NIJE";
    }
    */
    /*
    if(2 === true)
    {
        echo "TACNO JE";
    }
    else
    {
        echo "NIJE";
    }
    */

    /*
    //19. Na osnovu celobrojnog niza $a[0], $a[1], … 
    // formirati niz $b[0], $b[1], ... koji sadrži samo pozitivne brojeve.
    $a = array(2, 3, -5, -7, 9, -23, 1);
    $b = array();
    for($i=0; $i<count($a); $i++)
    {
        if($a[$i] > 0)
        {
            $b[] = $a[$i];
        }
    }
    ispisNiza($b);
    */

    /*
    // 20. Dati su nizovi 
    // $a[0], $a[1], …, $a[n - 1] i $b[0], $b[1], …, $b[n - 1]. 
    // Formirati niz $c[0], $c[1], …, $c[2n – 1] 
    // čiji su elementi $a[0], $b[0], $a[1], $b[1], …, $a[n - 1], $b[n - 1].
    $a = array(2, 3, -5, 7);
    $b = array(4, -4, 10, -11);
    $c = array();
    for($i = 0; $i < count($a); $i++)
    {
        $c[] = $a[$i];
        $c[] = $b[$i];
    }
    ispisNiza($c);
    */
    /*
    //21.  Dati su nizovi $a[0], $a[1], …, $a[n - 1] 
    //i $b[0], $b[1], …, $b[n - 1]. 
    //Formirati niz $c[0], $c[1], …, $c[n – 1] 
    //čiji su elementi $a[0] * $b[0], $a[1] * $b[1], …, $a[n – 1] * $b[n – 1].
    $a = array(2, 3, -5, 7);
    $b = array(4, -4, 10, -11);
    $c = array();
    for($i=0; $i<count($a); $i++)
    {
        $tekuciA = $a[$i];
        $tekuciB = $b[$i];
        $c[] = $tekuciA * $tekuciB; //$c[] = $a[$i] * $b[$i];
    }

    ispisNiza($c);
    */

    //22. 
    /*
    $a = array(2, 4, 5, 7, 6, 3);
    $c = array();
    $n_a = count($a);
    for($i = 0; $i < $n_a/2; $i++)
    {
        $tekuci = $a[$i];
        $odgovarajuci = $a[$n_a-$i-1];
        $c[] = ($tekuci + $odgovarajuci)/2;
    }
    ispisNiza($c);
    */
    /*
    $nizElemenata = array(2, 6, -4, 5, -7, 8, 19, -21, 33);
    foreach($nizElemenata as $element)
    {
        echo $element . "<br>";
    }
    */
    /*
    //Ispitati sve pozitivne brojeve niza x.
    //Kada naidjemo na negativan broj, prekinuti ispis.
    //Koristiti foreach petlju.
    $x = array(2, 6, -4, 5, -7, 8, 19, -21, 33);
    foreach($x as $x_elem)
    {
        if($x_elem > 0)
        {
            echo $x_elem . "<br>";
        }
        else
        {
            break;
        }
    }
    echo "Ovo se izvrsava posle break";
    */
?>