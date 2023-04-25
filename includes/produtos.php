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

    <?php
        $sql = "SELECT * FROM produtos";

        $res = $conn->query($sql);

        $qtd = $res->num_rows;

        if($qtd > 0) {
            print "<table class='table table-hover table-striped table-bordered' id='new-table-produto'>";
               print "<tr>";
                    print "<th>Id</th>";
                    print "<th>Código de Barra</th>";
                    print "<th>Nome</th>";
                    print "<th>Tipo de movimento</th>";
                    print "<th>Preço de compra</th>";
                    print "<th>Preço de venda</th>";
                    print "<th>Unidade</th>";
                    print "<th>Estoque</th>";
                    print "<th>Estoque mínimo</th>";
               print "</tr>";
            while($row = $res->fetch_object()) {
                print "<tr>";
                    print "<td>".$row->id."</td>";
                    print "<td>".$row->codBarra."</td>";
                    print "<td>".$row->nome."</td>";
                    print "<td>".$row->tipMov."</td>";
                    print "<td>".$row->precoComp."</td>";
                    print "<td>".$row->precoVenda."</td>";
                    print "<td>".$row->unidade."</td>";
                    print "<td>".$row->estoque."</td>";
                    print "<td>".$row->estoqueMinimo."</td>";
                print "</tr>";
            }
            print "</table>";
        }

    ?>
   
</div>