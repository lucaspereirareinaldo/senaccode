const cep = document.getElementById('cep');

async function buscarendereco(zipCode) {
    //Monstamos o endereço da URL.
    const url = `https://viacep.com.br/ws/${zipCode}/json/`;
    //Exibimos o string da URL.
    try {
        const response = await fetch(url, {
            method: "GET"
        });
        if (response.ok != true) {
            throw new Error(`Restrição: ${response.status}`);
        }
        return await response.json();
    } catch (error) {
        throw new Error('Restrição: ' + error.message);
    }
}
//teste
//Rescebe os dados do endereço e preenche os campos de endereço
async function BuscarEndereco() {
    const zipCode = cep.value.replace('-', '');
    //Verificamos se o valor do cep esta vazio o é indefinido.
    if (zipCode === '' || zipCode === undefined || zipCode.length > 8) {
        return;
    }
    const response = await buscarendereco(zipCode);
    document.getElementById('Logradouro').value = response.logradouro;
    document.getElementById('Bairro').value = response.bairro;
    document.getElementById('cidade').value = response.cidade;
    document.getElementById('IBGE').value = response.ibge;
    document.getElementById('ef').value = response.ef;

}
cep.addEventListener('blur', async () => {
    await BuscarEndereco();
});