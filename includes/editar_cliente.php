<?php
    $sql = "SELECT * FROM clientes WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>

<div id="editar_cliente">
        <form action="?page=salvar_cliente" method="POST" class="form-boxs-clients">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id" value="<?php print $row->id; ?>">
            <h5>EDITAR DE CLIENTES</h5>

            <div class="form-box-item">

                <div class="form-left col-6">

                    <div class="mt-2 box-form">
                        <label for="">CPF / CNPJ:</label>
                        <input type="text" class="form-control" value="<?php print $row->cpf; ?>" name="cpf">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Nome / Razão social:</label>
                        <input type="text" class="form-control" value="<?php print $row->nome; ?>" name="nome">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Telefone comercial:</label>
                        <input type="text" class="form-control" value="<?php print $row->telefone_comercial; ?>" name="telefone_comercial">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Telefone residêncial:</label>
                        <input type="text" class="form-control" value="<?php print $row->telefone_residencial; ?>" name="telefone_residencial">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Telefone / WhatsApp:</label>
                        <input type="text" class="form-control" value="<?php print $row->telefone_whatsapp; ?>" name="telefone_whatsapp">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Email:</label>
                        <input type="text" class="form-control" value="<?php print $row->email; ?>" name="email">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Tipo de cliente:</label>
                        <input type="text" class="form-control" value="<?php print $row->tipo_cliente; ?>" name="tipo_cliente">
                    </div>

                </div>
                <div class="form-right col-6">

                    <div class="mt-2 box-form">
                        <label for="">Cep:</label>
                        <input type="text" class="form-control" value="<?php print $row->cep; ?>" name="cep">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Rua:</label>
                        <input type="text" class="form-control" value="<?php print $row->rua; ?>" name="rua">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Número:</label>
                        <input type="text" class="form-control" value="<?php print $row->numero; ?>" name="numero">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Complemento:</label>
                        <input type="text" class="form-control" value="<?php print $row->complemento; ?>" name="complemento">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Bairro:</label>
                        <input type="text" class="form-control" value="<?php print $row->bairro; ?>" name="bairro">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Cidade:</label>
                        <input type="text" class="form-control" value="<?php print $row->cidade; ?>" name="cidade">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Estado:</label>
                        <input type="text" class="form-control" value="<?php print $row->estado; ?>" name="estado">
                    </div>

                </div>
            </div>
            <div class="btn-form my-5 d-flex justify-content-center">
                <button class="btn btn-primary btn-sm me-5">Editar Cliente</button>
                <button class="btn btn-warning btn-sm">Voltar</button>
            </div>
        </form>
    </div>