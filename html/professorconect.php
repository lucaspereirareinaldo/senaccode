
<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$professor = [

    'nome' => 'jotinha',
    'cpf' => '000.000.000-00',
    'rg' => '000.000-00',
    'data_de_nascimento' => '2008-11-11'
];

$seraquesalvou = UpdateQuery::table('professor')
    ->set($professor)
    ->where('id', '=', 21)
    ->update();

var_dump($seraquesalvou);
