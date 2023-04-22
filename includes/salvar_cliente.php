<?php
switch ($_REQUEST["acao"]) {
    case "cadastrar":
        $cpf = $_POST["cpf"];
        $nome = $_POST["nome"];
        $telefone_comercial = $_POST["telefone_comercial"];
        $telefone_residencial = $_POST["telefone_residencial"];
        $telefone_whatsapp = $_POST["telefone_whatsapp"];
        $email = $_POST["email"];
        $tipo_cliente = $_POST["tipo_cliente"];
        $cep = $_POST["cep"];
        $rua = $_POST["rua"];
        $numero = $_POST["numero"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];

        $sql = "INSERT INTO clientes(cpf, nome, telefone_comercial, telefone_residencial, telefone_whatsapp, email, tipo_cliente, numero, complemento, bairro, cidade, estado)
        VALUES
        ('{$cpf}', '{$nome}', '{$telefone_comercial}', '{$telefone_residencial}', '{$telefone_whatsapp}', '{$email}', '{$tipo_cliente}', '{$numero}', '{$complemento}', '{$bairro}', '{$cidade}', '{$estado}')";

        $res = $conn->query($sql);

        break;

    case "editar":
        break;

    case "excluir":
        break;
}
