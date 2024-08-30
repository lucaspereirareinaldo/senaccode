const salvar_botao = document.getElementById('btnsalvar3');

async function insert() {

    const form = document.getElementById('empresa');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    }
    const response = fetch('cadastro_empresa.php', opt);
}


salvar_botao.addEventListener('click', async () => {

    await insert();
});