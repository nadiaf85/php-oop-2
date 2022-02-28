<!-- Oggi pomeriggio provate ad immaginare quali possano essere
le classi necessarie per la gestione di un cinema multisala.
Dovrete essere in grado di gestire le sale, gli spettacoli 
e le specifiche del film con relativi attori.
Attenzione, esistono due tipi di sala, quella normale e 
quella con poltrone immersive, con l’unica aggiunta di dover
tener traccia degli effetti speciali utilizzabili durante la
proiezione (es: una sala potrebbe avere vibrazione, fumo, acqua, un’altra solo vibrazione). -->

<?php

// error_reporting(E_ALL);
//     ini_set('display_errors', TRUE);
//     ini_set('display_startup_errors', TRUE);

require_once __DIR__.'/classes/Film.php';
require_once __DIR__.'/classes/Sala.php';
require_once __DIR__.'/classes/SalaImmersiva.php';
require_once __DIR__.'/classes/Spettacolo.php';


$film = [
    new Film ("Ritorno al futuro 1","Robert Zemeckis","Fantascienza","1985"),
    new Film ("The Avengers","Joss Whedon","Fantascienza","2012"),
    new Film ("Tenet","Christopher Nolan","Fantascienza","2020"),
    new Film ("Titanic","James Cameron","Drammatico","1997"),
    new Film ("Matrix","Andy e Larry Wachowski","Fantascienza","1999"),
];

$sale = [
    new Sala (100,3,"Sala blu"),
    new Sala (100,7,"Sala rossa"),
    new Sala (100,1,"Sala gialla"),
    new SalaImmersiva(100,5,"Sala verde",["fumo","acqua"]),
    new Sala (100,8,"Sala azzurra"),
];

$spettacoli = [
    new Spettacolo ($film[4],"01/03/2022","15:00",$sale[0]),
    new Spettacolo ($film[2],"07/03/2022","19:30",$sale[3]),
    new Spettacolo ($film[0],"03/03/2022","21:45",$sale[4]),
    new Spettacolo ($film[1],"09/03/2022","22:00",$sale[1]),
    new Spettacolo ($film[3],"05/03/2022","18:30",$sale[2]),
];

var_dump($film,$sale,$spettacoli);


?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    < !-- <ul>
        <?php

            foreach ($film as $elemento){
            echo "<li> {$elemento->getInfo()} </li>";
        }

        ?>
    </ul> -- >

</body>
</html> -->



