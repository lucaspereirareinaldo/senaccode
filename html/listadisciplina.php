Novidade! Atalhos do teclado … Os atalhos de teclado do Drive foram atualizados para oferecer navegação por letras iniciais
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de aluno</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/all.min.css">
</head>

<body>
    <div class="conteiner">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcumb">
                    <ol class="breadcrumb">
                        <li class="breadcrum-item">
                            <a href="/">Início</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Lista de alunos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <a href="/disciplina.php" class="btn btn-outline-success">
                        <i class="fas fa-plus"></i>
                        Cadastro
                    </a>
                </div>
                <div class="car-body">
                    <table class="table table-stried table-hover ">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Ativo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Lucas</td>
                                <td>000.000.000-00</td>
                                <td>true</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="basic example">
                                        <a href="/disciplina.php?id=1" class="btn btn-outline-warning">
                                            <i class="fas fa-edit"></i>
                                            Editar
                                        </a>
                                        <button type="button" class="btn btn-outline-danger">
                                            <i class="fas fa-trash"> </i>
                                            Excluir
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Lucio</td>
                                <td>000.000.000-01</td>
                                <td>true</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="/disciplina.php?id=2" class="btn btn-outline-warning">
                                            <i class="fas fa-edit"> </i>
                                            Editar
                                        </a>
                                        <button type="button" class="btn btn-outline-danger">
                                            <i class="fas fa-trash"> </i>
                                            Excluir
                                        </button>
                                </td>
                            </tr>
                        </tbody>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/all.min.js"></script>
</body>

</html>