<?php

class powitanie
{

    function witaj($imie)
    {
        echo "Witaj " . $imie . "! Ładny mamy dziś dzień";
    }

}

$p = new powitanie();
$p->witaj("Marcin");
