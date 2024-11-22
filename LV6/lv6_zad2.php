<?php

    $datoteka = "tekst.txt";


    if (file_exists($datoteka)) {
        $file = fopen($datoteka, "r+");
        $string_tekst = fread($file, filesize($datoteka));

        fclose($file);

        echo "<h1>TEKST DATOTEKE <br><h3>$string_tekst</h3>";

        $izrezani_tekst = explode(" ", $string_tekst);  

       
        $file = fopen($datoteka, "a");  
        foreach ($izrezani_tekst as $rijec) {
            fwrite($file, $rijec . "\n");  
        }
        fclose($file);

        $prvo_pojavljivanje = strpos($string_tekst, 'k');  
        $suma_ponavljanja = substr_count($string_tekst, 'k');  

        echo "<br><h3>Prvi put se slovo 'k' pojavljuje na mjestu: </h3> " . ($prvo_pojavljivanje + 1) . "<br>";  // Pozicija je 0-indeksirana, pa dodajemo 1
        echo "<h3>Ukupno se slovo 'k' pojavljuje: </h3>" . $suma_ponavljanja . " puta.";
    } 
    else {
        echo "Datoteka tekst.txt ne postoji.";
    }
?>
