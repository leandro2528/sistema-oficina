const newVenda = document.getElementById("btn-new-venda");
const formVenda = document.getElementById("form-new-venda");
const tableVenda = document.getElementById("new-table-venda");
const titleVenda = document.getElementById("title-venda");

newVenda.addEventListener('click', () => {
    formVenda.style.display = 'block';
    tableVenda.style.display = 'none';
    titleVenda.style.display = 'none';
});