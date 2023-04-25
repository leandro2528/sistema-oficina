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
                        <input type="text" class="form-control" name="datVendas">
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
                <button class="btn btn-warning btn-sm"><a href="?page=vendas.php">Voltar</a></button>
            </div>
            
        </form>
    </div>

    <h5 id="title-venda">Vendas</h5>

    <?php 
        $sql = "SELECT * FROM  vendas";

        $res = $conn->query($sql);

        $qtd = $res->num_rows;

        if($qtd > 0) {
            print "<table class='table table-hover table-striped table-bordered' id='new-table-venda'>";
                print "<tr>";
                    print "<th>ID</th>";
                    print "<th>Data da Venda</th>";
                    print "<th>Cliente</th>";
                    print "<th>Vendedor</th>";
                    print "<th>Observação</th>";
                    print "<th>Observação para o clientes</th>";
                    print "<th>Ações</th>";
                print "</tr>";
            while($row = $res->fetch_object()) {
               print "<tr>";
                    print "<td>".$row->id."</td>";
                    print "<td>" .$row->datVendas."</td>";
                    print "<td>" .$row->cliente."</td>";
                    print "<td>" .$row->vendedor."</td>";
                    print "<td>" .$row->observacao."</td>";
                    print "<td>" .$row->obsCliente."</td>";
                    print "<td>
                                <button class='btn btn-warning btn-sm'> Editar </buton>
                                <button class='btn btn-danger btn-sm'> Excluir </buton>
                          </td>";
                print "</tr>";
            }
            print "</table>";
        }
    ?>
</div>