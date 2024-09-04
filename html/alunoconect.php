<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$valores = [
    'nome' => 'WILL super',
    'cpf' => '123'
];


$SeraQueSalvou = UpdateQuery::table('aluno')
    ->set($valores)
    ->where('id', '=', 76)
    ->update();

var_dump($SeraQueSalvou);
