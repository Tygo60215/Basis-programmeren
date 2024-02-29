<?php

$name = readline("Voer je naam in: ");

echo "Welkom $name
";

$Leeftijd = readline("Hoe oud ben je $name?");

if ($Leeftijd < 18){
    echo "Sorry $name, je bent te jong om alcohol te kopen";
}else{
echo "Fijn $name, je bent oud genoeg om alcohol te kopen";
}