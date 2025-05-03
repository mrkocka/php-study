<h2>Ezek string, integer és array(tömb) adattípus példái.</h2>

<p>String és integer adattípusok</p>
<section>
<?php
    $név = "Péter";
    $kor = 36;
    $fizetes = 300000;



    echo "<h4>$név adatai</h4>\n";
    echo"Kor: $kor <br>\n";
    echo"Fizetése: $fizetes Ft<br>\n";
?>

</section>
<p>Array(tömb) adattípus</p>


<section>
<?php
    $csaladom = "Ez az én kis családom";
    $csaladlista = array("Heni", "Bence", "Zétény", "Péter");

    echo"$csaladom <br>";
    echo"A feleségem: $csaladlista[0] <br>";
    echo"A fiam: $csaladlista[1]<br>";
    echo"A fiam: $csaladlista[2]<br>";
    echo"Én: $csaladlista[3]<br>";
?>

</section>


