<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cliente</title>
    <link rel="stylesheet" href="/css/stylesheet.css">
</head>

<body>
    <h1 id="aqui_temos_o_id_do_titulo" class="classe do_h1"> Cadastro Do Cliente </h1>
    <hr>
    <form name="form" id="form">
        <label for="nome">Nome completo</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required />
        <br>
        <label for="sobrenome">sobrenome completo</label>
        <input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome" required />
        <br>
        <label for="">CPF</label>
        <input type="text" id="CPF" name="CPF" placeholder="digite seu CPF" required>
        <br>
        <label for="">RG</label>
        <input type="text" id="RG" name="CPF" placeholder="Digite seu RG" required>
        <br>
        <label for="">data de nascimento</label>
        <input type="date" id="data de nascimento" name="Data de nascimento" placeholder="Digite sua data de nascimento" required>
        <br>
        <label for="">Nome do pai</label>
        <input type="text" id="nome do pai" name="nome do pai" placeholder="digite o nome do seu pai" required>
        <br>
        <label for="">Nome da mãe</label>
        <input type="text" id="nome da mãe" name="nome da mãe" placeholder="digite o nome da sua mãe" required>
        <br>
        <label for="">Renda mensal</label>
        <input type="number" id="renda mensal" name="renda mensal" placeholder="Digite sua renda mensal" required>
        <br>
        <label for="">Estado civil</label>
        <input type="select" id="estado civil" name="estado civil" placeholder="Digite seu estado civil" required>
        <br>
        <label for="">CEP</label>
        <input type="text" id="cep" name="CEP" placeholder="Digite seu CEP" required>
        <br>
        <label for="">logradouro</label>
        <input type="text" id="Logradouro" name="Logradouro" placeholder="Logradouro" required>
        <br>
        <label for="">numero de residencia</label>
        <input type="number" id="numero de residencia" name="numero de residencia" placeholder="digite seu numero de residencia" required>
        <br>
        <label for="">bairro</label>
        <input type="text" id="Bairro" name="Bairro" placeholder="Digite seu bairro" required>
        <br>
        <label for="">Cidade</label>
        <input type="text" id="cidade" name="Cidade" placeholder="Digite sua cidade" required>

        <br>
        <label for="">UF</label>
        <input type="selec" id="UF" name="UF" placeholder="Digite sua unidade federativa" required>
        <br>
        <label for="">País</label>
        <input type="select" id="Pais" name="País" placeholder="Digite seu País" required>
        <br>
        <label for="">IBGE</label>
        <input type="number" id="IBGE" name="IBGE" placeholder="IBGE" required>
        <br>
        <label for="ef">Estado da federação</label>
        <select id="ef" name="ef" required>
            <option value="">Selecione um estado brasileiro</options>
            <option value="AM">Amazonas </option>
            <option value="RO">Rondonia</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espirito santo</option>
            <option value="GO">Goias</option>
            <option value="Ma">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul </option>
            <option value="MG"> Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraiba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do norte</option>
            <option value="RS">Rio Grande do sul</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="Se">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
        <br>
        <button type="submit">Salvar</button>
    </form>
    <script src="/js/index.js"></script>
</body>

</html>