<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de aluno</title>
    <link href="/css/bootstrap.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Lista de aluno</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>nome</td>
                            <td>cpf</td>
                            <td>ação</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lucas</td>
                            <td>123.456.789-00</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-warning">
                                        <i class="far fa-edit"></i>
                                        Editar</button>
                                    <button type="button" class="btn btn-danger">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        Excluir</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Pablo</td>
                            <td>111.111.111-11</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-warning">
                                        <i class="far fa-edit"></i>
                                        Editar</button>
                                    <button type="button" class="btn btn-danger">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        Excluir</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
    <script src="/js/all.min.js"></script>
</body>

</html>