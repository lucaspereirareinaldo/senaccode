const pegar_botao = document.getElementById('btnsalvar2');

async function  insert() {
    
    const form = document.getElementById('disciplina');
    const formData = new FormData(form);
    const opt ={
        method:'POST',
        body:formData
    }
const response = fetch('cadastro_disciplina.php',opt);
}

pegar_botao.addEventListener('click', async() => {

    await insert();
});