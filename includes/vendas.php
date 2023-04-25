<div class="venda-table p-2" id="vendaTable">
    <button id="btn-new-venda" class="btn btn-success btn-sm my-3">Nova Venda</button>

    <div id="form-new-venda">
        <form action="?page=salvar_vendas" method="POST" class="form-boxs-vendas">
            <input type="hidden" name="acao" value="cadastrar">

        <h5>CADASTRO DE VENDAS</h5>

            <div class="form-box-item">

                <div class="form-left col-6">

                    <div class="mt-2 box-form">
                        <label for="">Data de venda:</label>
                        <input type="text" class="form-control" name="dtVenda">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Cliente:</label>
                        <input type="text" class="form-control" name="cliente">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Vendedor:</label>
                        <input type="text" class="form-control" name="vendedor">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Observação:</label>
                        <input type="text" class="form-control" name="observacao">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Observação para o cliente:</label>
                        <input type="text" class="form-control" name="obsCliente">
                    </div>

                </div>

            </div>

            <div class="btn-form my-5">
                <button class="btn btn-primary btn-sm me-5">Salvar Vendas</button>
                <button class="btn btn-warning btn-sm">Voltar</button>
            </div>
            
        </form>
    </div>

    <h5 id="title-venda">Vendas</h5>

    <table id="new-table-venda" class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>N°</th>
                <th>Data</th>
                <th>Cliente</th>
                <th>Faturado</th>
                <th>Ações</th>
            </tr>
        </thead>
    </table>
</div>