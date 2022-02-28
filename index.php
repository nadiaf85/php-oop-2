<!-- Oggi pomeriggio provate ad immaginare quali possano essere
le classi necessarie per la gestione di un cinema multisala.
Dovrete essere in grado di gestire le sale, gli spettacoli 
e le specifiche del film con relativi attori.
Attenzione, esistono due tipi di sala, quella normale e 
quella con poltrone immersive, con l’unica aggiunta di dover
tener traccia degli effetti speciali utilizzabili durante la
proiezione (es: una sala potrebbe avere vibrazione, fumo, acqua, un’altra solo vibrazione). -->

<?php

require_once __DIR__.'/classes/Film.php';
// require_once __DIR__.'/classes/Sala.php';
// require_once __DIR__.'/classes/Sala_immersiva.php';
// require_once __DIR__.'/classes/Attori.php';
// require_once __DIR__.'/classes/Spettacoli.php';


$film = [
    new Film ("Ritorno al futuro 1","Robert Zemeckis","Fantascienza","1985"),
    new Film ("The Avengers","Joss Whedon","Fantascienza","2012"),
    new Film ("Tenet","Christopher Nolan","Fantascienza","2020"),
    new Film ("Titanic","James Cameron","Drammatico","1997"),
    new Film ("Matrix","Andy e Larry Wachowski","Fantascienza","1999"),
];

// $sale = [
//     new Sala (100,3,"Sala blu"),
//     new Sala (100,7,"Sala rossa"),
//     new Sala (100,1,"Sala gialla"),
//     new Sala (100,5,"Sala verde"),
//     new Sala (100,8,"Sala azzurra"),
// ];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <?php

            foreach ($film as $elemento){
            echo "<li> {$elemento->getInfo()} </li>";
        }

        ?>
    </ul>
    
</body>
</html>


