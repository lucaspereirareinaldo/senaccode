<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

// Definindo os campos e valores a serem inseridos


$disciplina = [

    'nome' => 'carlos',
    'ativo' => 'true'
];

InsertQuery::table('disciplina')->save($disciplina);



$disciplina2 = [

    'nome' => 'pedro',
    'ativo' => 'false'
];

InsertQuery::table('disciplina')->save($disciplina2);


$disciplina3 = [

    'nome' => 'paulo',
    'ativo' => 'true'
];

InsertQuery::table('disciplina')->save($disciplina3);
