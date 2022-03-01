<!-- Oggi pomeriggio provate ad immaginare quali possano essere
le classi necessarie per la gestione di un cinema multisala.
Dovrete essere in grado di gestire le sale, gli spettacoli 
e le specifiche del film con relativi attori.
Attenzione, esistono due tipi di sala, quella normale e 
quella con poltrone immersive, con l’unica aggiunta di dover
tener traccia degli effetti speciali utilizzabili durante la
proiezione (es: una sala potrebbe avere vibrazione, fumo, acqua, un’altra solo vibrazione). -->

<!-- 1) Recupera l’elenco delle sale con relative informazioni, facendo 
particolare attenzione alle informazioni aggiuntive per le sale immersive.
2) Recuperare la capienza totale del cinema considerando tutte le sale a 
disposizione.
3) Stabilito un giorno e un film, recuperare quante proiezioni totali
di quel film ci saranno.
4) Stabilito un giorno, recupera l’orario di fine dell’ultimo spettacolo.
BONUS
5) gestire con logica un’eccezione try/catch in un punto qualsiasi
 del vostro codice.
6) Stabilito un film, una sala, un’ora di inizio e un numero di proiezioni,
calcolare automaticamente gli orari degli spettacoli, considerando che tra
uno spettacolo e l’altro devono passare 15 min.
7) Stabilito un giorno, recuperare l’elenco dei film in proiezione
con relativi attori, i quali dovranno essere stampati con iniziale
del nome e cognome “N. Cognome”. -->


<?php

// error_reporting(E_ALL);
//     ini_set('display_errors', TRUE);
//     ini_set('display_startup_errors', TRUE);

require_once __DIR__.'/classes/Film.php';
require_once __DIR__.'/classes/Sala.php';
require_once __DIR__.'/classes/SalaImmersiva.php';
require_once __DIR__.'/classes/Spettacolo.php';
require_once __DIR__.'/classes/Attore.php';


$listaAttori = [
    new Attore("Leonardo", "Di Caprio", 1974),
    new Attore("Keanu", "Reeves", 1964),
    new Attore("Chris", "Evans", 1981),
    new Attore("Robert", "Pattinson", 1986),
    new Attore("Christopher", "Lloyd", 1938),
];

$film = [
    new Film("Ritorno al futuro 1","Robert Zemeckis","Fantascienza","1985",100,[$listaAttori[0],$listaAttori[2]]),
    new Film("The Avengers","Joss Whedon","Fantascienza","2012",115,[$listaAttori[2],$listaAttori[4]]),
    new Film("Tenet","Christopher Nolan","Fantascienza","2020",95,[$listaAttori[0],$listaAttori[1]]),
    new Film("Titanic","James Cameron","Drammatico","1997",130,[$listaAttori[2],$listaAttori[3]]),
    new Film("Matrix","Andy e Larry Wachowski","Fantascienza","1999",100,[$listaAttori[1],$listaAttori[4]]),
];

$sale = [
    new Sala(100,3,"Sala blu"),
    new Sala(100,7,"Sala rossa"),
    new Sala(100,1,"Sala gialla"),
    new SalaImmersiva(100,5,"Sala verde",["fumo","acqua"]),
    new Sala(100,8,"Sala azzurra"),
];

$spettacoli = [
    new Spettacolo($film[4],"2022-03-01","15:00",$sale[0]),
    new Spettacolo($film[2],"2022-03-07","19:30",$sale[3]),
    new Spettacolo($film[0],"2022-03-03","21:45",$sale[4]),
    new Spettacolo($film[3],"2022-03-05","22:00",$sale[4]),
    new Spettacolo($film[1],"2022-03-09","18:00",$sale[1]),
    new Spettacolo($film[1],"2022-03-09","16:30",$sale[0]),
    new Spettacolo($film[1],"2022-03-09","17:45",$sale[3]),
    new Spettacolo($film[3],"2022-03-05","18:30",$sale[2]),
];


// var_dump($spettacoli);

// 1) Recupera l’elenco delle sale con relative informazioni
// var_dump($sale);

// 2) Recuperare la capienza totale del cinema considerando tutte le sale a 
// disposizione.

    foreach($sale as $elemento){
        $capienza += $elemento->getCapienzaSala();
    }

    // var_dump($capienza);

// 3) Stabilito un giorno e un film, recuperare quante proiezioni totali
// di quel film ci saranno.

    $giornoScelto = "2022-03-05";
    $filmScelto = $film[3]->titolo;
    $contatore=0;

    foreach($spettacoli as $elemento){
        if(($elemento->getData() == $giornoScelto) && ($elemento->getFilm()->titolo == $filmScelto)){
            $contatore++;
        } 
    }

    // var_dump($contatore);

// 4) Stabilito un giorno, recupera l’orario di fine dell’ultimo spettacolo.

$indiceUltimoSpettacolo=null;

foreach($spettacoli as $indice=>$elemento){
    $inizio="";
    if(($elemento->getData() == $giornoScelto) && $elemento->getOrario()> $inizio ){
        $inizio=$elemento->getOrario();
        $indiceUltimoSpettacolo= $indice;
    } 
}

if (!is_null($indiceUltimoSpettacolo)){
    echo $spettacoli[$indiceUltimoSpettacolo]->getOrario()." + ".$spettacoli[$indiceUltimoSpettacolo]->getFilm()->durata;
}
    
?>





