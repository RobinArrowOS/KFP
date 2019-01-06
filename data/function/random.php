<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 18.12.2018
 * Time: 13:25
 */


function randomVName()
{
    $vname = array(
        "Johnathon",
        "Max",
        "Anja",
        "Ines",
        "Eric",
        "Birgit",
        "Paul",
        "Benjamin",
        "Dominik",
        "Jens",
        "Barbara",
        "Michael",
        "Jens",
        "Kerstin",
        "Laura",
        "Wolfgang",
        "Gabriele",
        "Luca",
        "Jessica",
        "Sven",
        "David",
        "Lea",
        "Lena",
        "Janina",
        "Marina",
        "Birgit",
        "Stephan",
        "Tanja",
        "Daniela",
        "Marie",
        "Silke",
        "Antje",
        "Leonie",
        "Sophia",
        "Steffen",
        "Katrin",
        "Nadine",
        "Kevin",
        "Ursula",
        "Daniel",
        "Stephan",
        "David",
        "Christina",
        "Maximilian",
        "Andreas",
        "Kristin",
        "Ulrich",
        "Maik",
        "Christine",
        "Lil",
        "Lou",
        "Beate",
        "Manuel",
        "Jochen",
        "Thomas",
        "Andie",
        "Alexander",
        "Max",
        "Wolfgang",
        "Freddy",
        "Roland",
        "Josi",
        "Marko",
        "Michael",
        "Silvia",
        "Marcus",
        "Robin",
        "Lukas",
        "Phillip",
        "Leon",

    );

    $erg1 = $vname[rand ( 0 , count($vname) -1)];

    return $erg1;
};

function randomNName() {
    $nname = array(
        "Fassbinder",
        "Baumgaertner",
        "Krause",
        "Finkel",
        "Hoover",
        "Faerber",
        "Feierabend",
        "Zweig",
        "Cole",
        "Brandt",
        "Freytag",
        "Adler",
        "Papst",
        "Krueger",
        "Bayer",
        "Krueger",
        "Kluge",
        "Rothschild",
        "Schwartz",
        "Ziegler",
        "Fried",
        "Holzman",
        "Herman",
        "Schwab",
        "Hofmann",
        "Schulze",
        "Wannemaker",
        "Fuerst",
        "Freeh",
        "Kruger",
        "Eisenhauer",
        "Fischer",
        "Herman",
        "Baum",
        "Schmitt",
        "Hoch",
        "Nacht",
        "Gottschalk",
        "Gloeckner",
        "Reiniger",
        "Koenig",
        "Kluge",
        "Schmidt",
        "Duerr",
        "Busch",
        "Herzog",
        "Weiß",
        "Aachen",
        "Daecher",
        "Gauk",
        "Marino",
        "Schumann",
        "Czutka",
        "Akrapovice",
        "Huber",
        "Seuser",

    );

    $erg2 = $nname[rand ( 0 , count($nname) -1)];

    return $erg2;
};
?>
<meta http-equiv="refresh" content="0; URL=../../dashboard.php">