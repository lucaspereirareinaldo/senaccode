const salvar_botao = document.getElementById('btnsalvar');

async function insert() {

    const form = document.getElementById('aluno');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    }
    const response = fetch('cadastro_aluno.php', opt);
}


salvar_botao.addEventListener('click', async () => {

    await insert();
});