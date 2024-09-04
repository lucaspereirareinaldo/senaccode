<?php
$id = '';
$acao = '';
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $id = $_GET['id'];
    $acao = 'e';
} else {
    $id = '';
    $acao = 'c';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/all.min.css">
</head>

<body>
    <div class="conteiner">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Início</a> </li>
                        <li class="breadcrumb-item"><a href="/listaprofessores.php">Lista de professores</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cadastro e edição de professores</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Cadastro e edição de professores</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <div class="alert alert-warning" role="alert">
                                Todos os campos sinalizados com
                                <span class="text-danger">*</span>
                            </div>
                            <form id="form">
                                <input type="hidden" name="id" id="id" value="<?php echo $id?>">
                                <input type="hidden" name="acao" id="acao" value="<?php echo $acao?>">
                                <div class="form-floating mb-3">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nome"
                                        name="nome"
                                        placeholder="">
                                    <label for="floatigInput">Digite por favor seu Nome * </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-group" role="group" aria-label="basic example">
                            <a href="/Professor.php" class="btn btn-outline-warning">
                                <i class="fas fa-chevron-left"></i>
                                Voltar
                            </a>
                            <button type="button" class="btn btn-outline-success">
                                <i class="fas fa-save"></i>
                                Salvar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </ol>
        </nav>
    </div>
    </div>
    </div>


    <script src="/js/bootstrap.js"></script>
    <script src="/js/all.min.js"></script>
</body>

</html>