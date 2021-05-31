<!-- creare classi necessarie per uno shop online; 
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. 
Strutturare le classi gestendo l'ereditarietà dove necessario; 
ad esempio ci potrebbero essere diverse tipologie di prodotti -->


<?php 

require_once __DIR__ . '/StrumentiACorda.php';
require_once __DIR__ . '/StrumentiAPercussione.php';
require_once __DIR__ . '/StrumentiAFiato.php';



$violino = new StrumentiACorda('Violino', 'Gliga');
var_dump($violino->getInfoData());


$bodhran = new StrumentiAPercussione('Bodhran', 'Meinl');
var_dump($bodhran->getInfoData());

$flauto = new StrumentiAFiato('Flauto', 'Altus');
var_dump($flauto->getInfoData());

?>