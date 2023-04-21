const newServico= document.getElementById("btn-new-servico");
const formServico= document.getElementById("form-new-servicos");
const tableServico= document.getElementById("new-table-servico");
const titleServico= document.getElementById("title-servico");

newServico.addEventListener('click', () => {
    formServico.style.display = 'block';
    newServico.style.display = 'none';
    tableServico.style.display = 'none';
    titleServico.style.display = 'none';
});