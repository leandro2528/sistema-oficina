<div class="client-table p-2" id="clientTable">
    <button id="btn-new-client" class="btn btn-success btn-sm my-3">Novo Cliente</button>

    <h5 id="title-client">Clientes / Fornecedores</h5>
    <div id="new-table-client">
        <?php
        $sql = "SELECT * FROM clientes";

        $res = $conn->query($sql);

        $qtd = $res->num_rows;

        if ($qtd > 0) {
            print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>ID</th>";
            print "<th>N°</th>";
            print "<th>Nome</th>";
            print "<th>CPF</th>";
            print "<th>Email</th>";
            print "<th>Ações</th>";
            print "<tr>";
            while ($row = $res->fetch_object()) {
                print "<tr>";
                print "<td>" . $row->id . "</td>";
                print "<td>" . $row->numero . "</td>";
                print "<td>" . $row->nome . "</td>";
                print "<td>" . $row->cpf . "</td>";
                print "<td>" . $row->email . "</td>";
                print "<td>
                            <button class='btn btn-primary btn-sm'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                                    <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                                    <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
                                </svg> 
                            </button>
                            <button onclick=\"location.href='?page=editar_cliente&id=" . $row->id . "'\" class='btn btn-warning btn-sm'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                </svg></button>
                            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=cliente&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger btn-sm'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                                    <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z'/>
                                    <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z'/>
                                </svg>
                            </button>
                          </td>";
                print "</tr>";
            }
            print "</table>";
        } else {
            print " <p class='alert alert-danger'> Não existem nenhum resultado </p> ";
        }
        ?>
    </div>
    <div id="form-new-client">
        <form action="?page=salvar_cliente" method="POST" class="form-boxs-clients">
            <input type="hidden" name="acao" value="cadastrar">
            <h5>CADASTRO DE CLIENTES</h5>

            <div class="form-box-item">

                <div class="form-left col-6">

                    <div class="mt-2 box-form">
                        <label for="">CPF / CNPJ:</label>
                        <input type="text" class="form-control" name="cpf">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Nome / Razão social:</label>
                        <input type="text" class="form-control" name="nome">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Telefone comercial:</label>
                        <input type="text" class="form-control" name="telefone_comercial">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Telefone residêncial:</label>
                        <input type="text" class="form-control" name="telefone_residencial">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Telefone / WhatsApp:</label>
                        <input type="text" class="form-control" name="telefone_whatsapp">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Email:</label>
                        <input type="text" class="form-control" name="email">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Tipo de cliente:</label>
                        <input type="text" class="form-control" name="tipo_cliente">
                    </div>

                </div>
                <div class="form-right col-6">

                    <div class="mt-2 box-form">
                        <label for="">Cep:</label>
                        <input type="text" class="form-control" name="cep">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Rua:</label>
                        <input type="text" class="form-control" name="rua">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Número:</label>
                        <input type="text" class="form-control" name="numero">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Complemento:</label>
                        <input type="text" class="form-control" name="complemento">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Bairro:</label>
                        <input type="text" class="form-control" name="bairro">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Cidade:</label>
                        <input type="text" class="form-control" name="cidade">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Estado:</label>
                        <input type="text" class="form-control" name="estado">
                    </div>

                </div>
            </div>
            <div class="btn-form my-5 d-flex justify-content-center">
                <button class="btn btn-primary btn-sm me-5">Salvar Cliente</button>
                <button class="btn btn-warning btn-sm">Voltar</button>
            </div>
        </form>
    </div>

</div>