<?php

use 
app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

// Definindo os campos e valores a serem inseridos




$turma = [

    'quantidades_de_alunos' => '10',
    'data_de_inicio' => '2001.11.11',
    'data_de_fim' => '2001.11.11'
];

InsertQuery::table('turma')->save($turma);

$turma2 =[

    'quantidades_de_alunos' => '15',
    'data_de_inicio' => '2011.11.11',
    'data_de_fim' => '2001.12.11'
];

InsertQuery::table('turma')->save($turma2);

$turma3 =[

    'quantidades_de_alunos' => '16',
    'data_de_inicio' => '2011.12.11',
    'data_de_fim' => '2001.10.11'
];

InsertQuery::table('turma')->save($turma3);



