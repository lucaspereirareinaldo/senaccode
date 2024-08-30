<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/stylesheet.css">

</head>

<body>
    <h1>Empresa</h1>

    <form id="empresa">

        <label for="nome_fantasia">nome fantasia</label>
        <input type="text" name="nome_fantasia" id="nome_fantasia">
        <br>
        <label for="cnpj">CNPJ</label>
        <input type="text" name="cnpj" id="cnpj" placeholder="Digite seu cnpj">
        <br>
        <label for="inscricao_es">inscricao_estadual</label>
        <input type="text" name="inscricao_estadual" class="inscricao_estadual">
        <br>
        <label for="data de nascimento">Data de nascimento</label>
        <input type="date" name="data" id="data" placeholder="digite a data">
        <br>
        <button type="button" id="btnsalvar4">Enviar</button>



    </form>

    <script src ="js/empresa.js" ></script>

</body>

</html>