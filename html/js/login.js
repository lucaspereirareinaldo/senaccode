const salvar = document.getElementById('salvarbtn');
const id = document.getElementById('id');
const Action = document.getElementById('acao');
const Alerta = document.getElementById('alert');

// Função para enviar dados para o servidor e receber a resposta
async function Insert() {
    const form = document.getElementById('form');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    };
    try {
        const response = await fetch('/ControllerLogin.php', opt);
        const text = await response.text();
        console.log('Raw response text:', text);

        try {
            const json = JSON.parse(text);
            console.log('Insert response:', json);
            return json;
        } catch (jsonError) {
            console.error('Failed to parse JSON:', jsonError);
            Alerta.className = 'alert alert-danger';
            Alerta.innerHTML = json.msg || 'Erro ao processar a resposta';
            return null;
        }
    } catch (error) {
        console.error('Error during fetch:', error);
        Alerta.className = 'alert alert-danger';
        Alerta.innerHTML = 'Restrição ao salvar';
        return null;
    }
}

// Função para tratar a inserção de dados
async function insert() {
    Alerta.className = 'alert alert-primary';
    Alerta.innerHTML = 'Salvando...';

    const response = await Insert();

    if (!response) {
        return; // Retorna se a resposta não for válida
    }

    if (response.status !== true) {
        Alerta.className = 'alert alert-danger';
        Alerta.innerHTML = response.msg;
        setTimeout(() => {
            Alerta.className = 'alert alert-warning';
            Alerta.innerHTML = 'Todos os campos com <span class="text-danger">*</span> são obrigatórios para o cadastro';
        }, 5000);
        return;
    }

    Alerta.className = 'alert alert-success';
    Alerta.innerHTML = response.msg;
    setTimeout(() => {
        window.location.href = (Action.value == 'c') ? `/login.php?id=${response.id}` : '/.php';
    }, 2000);
}

// Função para tratar a atualização de dados
async function update() {
    const form = document.getElementById('form');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    };

    Alerta.className = 'alert alert-primary';
    Alerta.innerHTML = 'Salvando...';

    try {
        const response = await fetch('/ControllerLogin.php', opt);
        const text = await response.text();
        console.log('Raw response text:', text);

        try {
            const json = JSON.parse(text);
            console.log('Update response:', json);

            if (json.status === true) {
                Alerta.className = 'alert alert-success';
                Alerta.innerHTML = json.msg;
                Action.value = 'e';
                setTimeout(() => {
                    Alerta.className = 'alert alert-warning';
                    Alerta.innerHTML = 'Todos os campos sinalizados com <span class="text-danger">*</span> são de preenchimento obrigatórios';
                }, 1000);
                return;
            }

            Alerta.className = 'alert alert-danger';
            Alerta.innerHTML = json.msg;
        } catch (jsonError) {
            console.error('Failed to parse JSON:', jsonError);
            Alerta.className = 'alert alert-danger';
            Alerta.innerHTML = 'Erro ao processar a resposta';
        }
    } catch (error) {
        console.error('Error during fetch:', error);
        Alerta.className = 'alert alert-danger';
        Alerta.innerHTML = 'Tente novamente.';
    }
}

// Adiciona o evento de clique ao botão 'salvar'
salvar.addEventListener('click', async () => {
    console.log('Action.value:', Action.value);

    if (Action.value === 'c') {
        await insert();
        return;
    }

    await update();
});
