<?php

$random = rand(1,100);
$aantal_beurten = 0;
$max_aantal_beurten = 6;

Repeat:


$ingevoerde_nummer = readline ("Wat denk je dat het getal is? ");


if ($random < $ingevoerde_nummer){
    echo "Het Getal is lager
    ";
    $aantal_beurten = $aantal_beurten + 1 ;
    if ($max_aantal_beurten == $aantal_beurten){
        echo "jammer joh, je had te veel fout";
        goto End;
    }

    goto Repeat;
    
}elseif($random > $ingevoerde_nummer){
    echo "Het getal is hoger;
    ";
    $aantal_beurten = $aantal_beurten + 1 ;
    if ($max_aantal_beurten == $aantal_beurten){
        echo "jammer joh, je had te veel fout";
        goto End;
    }

goto Repeat;

}elseif($random == $ingevoerde_nummer){
        echo "Het getal is geraden in $aantal_beurten beurten";

}


End: