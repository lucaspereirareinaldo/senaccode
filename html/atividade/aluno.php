<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$fieldsAndValues = [
    'nome'          => 'pablo',
    'cpf'          => '000-000-000-00',
    'rg'          => '00-000-000-0',
    'data_nascimento' => '2001/11/11'
];

InsertQuery::table('aluno')->save($fieldsAndValues);

$aluno2 = [
    'nome'          => 'carlos',
    'cpf'          => '000-123-321-00',
    'rg'          => '00-123-000-1',
    'data_nascimento' => '2011-10/11'
];

InsertQuery::table('aluno')->save($aluno2);


$aluno3 = [
    'nome'          => 'leandro',
    'cpf'          => '000-111-111-11',
    'rg'          => '00-123-111-2',
    'data_nascimento' => '2001/12/12'
];

InsertQuery::table('aluno')->save($aluno3);



