<!-- creare classi necessarie per uno shop online; 
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. 
Strutturare le classi gestendo l'ereditarietà dove necessario; 
ad esempio ci potrebbero essere diverse tipologie di prodotti -->


<?php 

require_once __DIR__ . '/StrumentiACorda.php';
require_once __DIR__ . '/StrumentiAPercussione.php';
require_once __DIR__ . '/StrumentiAFiato.php';
require_once __DIR__ . '/User.php';


//Strumenti 

$violino = new StrumentiACorda('Violino', 'Gliga');
// var_dump($violino->getInfoData());


$bodhran = new StrumentiAPercussione('Bodhran', 'Meinl');
// var_dump($bodhran->getInfoData());

$flauto = new StrumentiAFiato('Flauto', 'Altus');
// var_dump($flauto->getInfoData());


//User
$user1 = new User ('Tommaso', 'Barnesio');
$user1 -> addItem($violino);
$user1 -> addItem($flauto);
$user1 -> getItems();
// var_dump($user1);
// var_dump($user1->getItems());


$user2 = new User ('Simone', 'Barbagallo');
$user2 -> addItem($bodhran);
// var_dump($user2);
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
    <h1>Riepilogo ordini</h1>

    <div> Nome utente: <?php echo $user1->nome . ' ' . $user1->cognome?>

        <div> Il tuo carrello contiene:
            <?php foreach($user1->getItems() as $item) {?>
            
                <ul>
                    <li><?php echo $item ->tipo_di_strumento . ' - ' . 'marca:' .' '. $item->marca ?></li>
                    
                </ul>

            <?php } ?>
        </div>

        <div> Nome utente: <?php echo $user2->nome . ' ' . $user2->cognome?>

        <div> Il tuo carrello contiene:
            <?php foreach($user2->getItems() as $item) {?>
            
                <ul>
                    <li><?php echo $item ->tipo_di_strumento . ' - ' . 'marca:' .' '. $item->marca ?></li>
                    
                </ul>

            <?php } ?>
        </div>

        
    </div>
</body>
</html>