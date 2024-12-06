<?php

    $student = array(
        "ime" => "Sandro",          
        "prezime" => "Savi",       
        "JMBG" => "1234567890123", 
        "broj_indeksa" => "12345", 
        "godina_studija" => 3      
    );

    echo "<h3>Podaci o studentu: </h3><br>";

    foreach ($student as $key => $value) {
        echo "$key: $value<br>";
    }

    echo "<br>";

    $auto = array(
        "Citroen" => array(
            "tip_automobila" => "C4",
            "kubikaza" => "1300",
            "boja" => "Siva",
            "godina_proizvodnje" => 2005,
            "motor" => "Benzinski"
        ),

        "Mercedes" => array(
            "tip_automobila" => "S-Class",
            "kubikaza" => "2500",
            "boja" => "Plava",
            "godina_proizvodnje" => 2020,
            "motor" => "Dieselski"
        )
    );

    echo "<h3> Podaci o Citroenu: </h3><br>";

    foreach ($auto["Citroen"] as $key => $value) {
        echo "$key: $value<br>";
    }

    echo "<br>";

    echo "<h3>Podaci o Mercedesu: </h3><br>";
    echo "Tip automobila: " . $auto["Mercedes"]["tip_automobila"] . "<br>";
    echo "Kubikaza: " . $auto["Mercedes"]["kubikaza"] . "<br>";
    echo "Boja: " . $auto["Mercedes"]["boja"] . "<br>";
    echo "Godina proizvodnje: " . $auto["Mercedes"]["godina_proizvodnje"] . "<br>";
    echo "Motor: " . $auto["Mercedes"]["motor"] . "<br>";

    echo "<br>";

    function kvadrat($broj) {
        return $broj * $broj;
    }

    $broj = 13; 
    echo "<h3>Kvadriranje: </h3>";
    echo "Kvadrat broja $broj je: " . kvadrat($broj) . "<br>";

    echo "<br>";

    class Kupac {
        private $ime;
        private $prezime;
    
        public function setIme($ime) {
            $this->ime = $ime;
        }
    
        public function setPrezime($prezime) {
            $this->prezime = $prezime;
        }
    
        public function ispisiKupca() {
            echo "Kupac je: " . $this->ime . " " . $this->prezime . "<br>";
        }
    }

    $kupac = new Kupac();
    $kupac->setIme("Sandro");        
    $kupac->setPrezime("Savi");     
    $kupac->ispisiKupca();         


?>
