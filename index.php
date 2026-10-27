
<?php

// Opdracht 1 - Constructor
class Auto {
    private $merk;
    private $bouwjaar;

    public function __construct($merk, $bouwjaar) {
        $this->merk = $merk;
        $this->bouwjaar = $bouwjaar;
    }

    public function toonAuto() {
        echo "Merk: " . $this->merk . "<br>";
        echo "Bouwjaar: " . $this->bouwjaar . "<br>";
    }
}

// Opdracht 2 - Overriden methods
class Vervoermiddel {
    public function geluid() {
        return "Onbekend geluid";
    }
}

class Fiets extends Vervoermiddel {
    public function geluid() {
        return "Tring tring!";
    }
}

class Trein extends Vervoermiddel {
    public function geluid() {
        return "Tjoek tjoek!";
    }
}

class Vliegtuig extends Vervoermiddel {
    public function geluid() {
        return "Whoesj!";
    }
}

// Opdracht 4 - Static members
class Converter {
    public static function kmNaarMiles($km) {
        return $km * 0.621371;
    }
}

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 8 - PHP</title>
</head>
<body>

    <h1>Opdracht 8 - PHP</h1>

    <h2>Opdracht 1 - Constructor</h2>

    <?php
    $auto = new Auto("BMW", 2022);
    $auto->toonAuto();
    ?>

    <h2>Opdracht 2 - Overriden methods</h2>

    <?php
    $fiets = new Fiets();
    $trein = new Trein();
    $vliegtuig = new Vliegtuig();

    echo "Fiets: " . $fiets->geluid() . "<br>";
    echo "Trein: " . $trein->geluid() . "<br>";
    echo "Vliegtuig: " . $vliegtuig->geluid() . "<br>";
    ?>

    <h2>Opdracht 3 - Polymorfisme</h2>

    <?php
    $vervoermiddelen = [
        new Fiets(),
        new Trein(),
        new Vliegtuig()
    ];

    foreach ($vervoermiddelen as $vervoermiddel) {
        echo $vervoermiddel->geluid() . "<br>";
    }
    ?>

    <h2>Opdracht 4 - Static members</h2>

    <?php
    $km = 10;
    $miles = Converter::kmNaarMiles($km);

    echo $km . " kilometer is " . $miles . " miles.";
    ?>

</body>
</html>
