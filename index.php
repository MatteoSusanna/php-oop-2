<?php

require __DIR__ . '/class/Soldproperties.php';
require __DIR__ . '/class/Rentproperties.php';

require __DIR__ . '/class/Agent.php';
require __DIR__ . '/class/Customer.php';

$nuovoCliente = new Customer('matteo','matteo2784@gmail.com','via Roma 2');
$nuovoAgente = new Agent('Francesco', 'fra@gmail.com', 'via Milano');

$casaInVendita = new Soldproperties('70mq', 'termica', 'moderno', '100000','http://mia_foto.com');
$casaInAffitto = new Rentproperties('40mq', 'termica', 'moderno', '500','http://mia_foto.com');
?>


