<?php

require __DIR__ . '/class/Soldproperties.php';
require __DIR__ . '/class/Rentproperties.php';

require __DIR__ . '/class/Agent.php';
require __DIR__ . '/class/Customer.php';

$nuovoCliente = new Customer('matteo','matteo2784@gmail.com','via Roma 2');
$nuovoCliente->setPhone(346780394);
echo $nuovoCliente->getCostumer();


$nuovoAgente = new Agent('Francesco', 'fra@gmail.com', 'via Milano');
$nuovoAgente->setPhone(346788938);
echo $nuovoAgente->getAgent();

$casaInVendita = new Soldproperties('70mq', 'Termica', 'Moderna', '100000','https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/casa-moderna-campagna-stromarchitects-oggetto-editoriale-800x600-1528112080.jpg?resize=480:*');
echo $casaInVendita->getSold();


$casaInAffitto = new Rentproperties('40mq', 'termica', 'moderno', '500','https://images-1.casa.it/360x265/listing/785ef9807fc52b4edace578a5fdff74e');
echo $casaInAffitto->getSold();

?>


