<?php

$gebruikersnaam = readline ("Geef gebruikersnaam: ");
$wachtwoord = readline ("Geef wachtwoord: ");

if ($wachtwoord == 'Deltion' && $gebruikersnaam == 'Deltion'){
    echo "Welkom je bent ingelogd";
}else{
    echo "Geen toegang, nu het land uit";
}
