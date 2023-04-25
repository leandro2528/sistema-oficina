<div class="produto-table p-2" id="produtoTable">
    <button id="btn-new-produto" class="btn btn-success btn-sm my-3">Novo Produto</button>

    <div id="form-new-produto">
        <form action="?page=salvar_produtos" method="POST" class="form-boxs-produtos">
        <input type="hidden" name="acao" value="cadastrar">

        <h5>CADASTRO DE PRODUTOS</h5>

            <div class="form-box-item">

                <div class="form-left col-6">

                    <div class="mt-2 box-form">
                        <label for="">Código de barra:</label>
                        <input type="text" class="form-control" name="codBarra">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Nome / Descrição:</label>
                        <input type="text" class="form-control" name="nome">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Tipo de movimento:</label>
                        <input type="text" class="form-control" name="tipMov" placeholder="Entrada / Saida">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Preço de compra:</label>
                        <input type="text" class="form-control" name="precoComp">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Preço de venda:</label>
                        <input type="text" class="form-control" name="precoVenda">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Unidade:</label>
                        <input type="text" class="form-control" name="unidade">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Estoque:</label>
                        <input type="text" class="form-control" name="estoque">
                    </div>

                    <div class="mt-2 box-form">
                    <label for="">Estoque mínimo:</label>
                    <input type="text" class="form-control" name="estoqueMinimo">
                </div>

                </div>

            </div>

            <div class="btn-form my-5">
                <button class="btn btn-primary btn-sm me-5">Salvar Produtos</button>
                <button class="btn btn-warning btn-sm">Voltar</button>
            </div>
            
        </form>
    </div>

    <h5 id="title-produto">Produtos</h5>

    <table id="new-table-produto" class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>N°</th>
                <th>Código de barro</th>
                <th>Nome</th>
                <th>Estoque</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
    </table>
</div>