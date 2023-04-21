const newProduto = document.getElementById("btn-new-produto");
const formProduto = document.getElementById("form-new-produto");
const tableProduto = document.getElementById("new-table-produto");
const titleProduto = document.getElementById("title-produto");

newProduto.addEventListener('click', () => {
    formProduto.style.display = 'block';
    newProduto.style.display = 'none';
    tableProduto.style.display = 'none';
    titleProduto.style.display = 'none';
});