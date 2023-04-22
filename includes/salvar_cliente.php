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

        $sql = "INSERT INTO clientes(cpf, nome, telefone_comercial, telefone_residencial, telefone_whatsapp, email, tipo_cliente, cep, rua, numero, complemento, bairro, cidade, estado)
        VALUES
        ('{$cpf}', '{$nome}', '{$telefone_comercial}', '{$telefone_residencial}', '{$telefone_whatsapp}', '{$email}', '{$tipo_cliente}', '{$cep}', '{$rua}', '{$numero}', '{$complemento}', '{$bairro}', '{$cidade}', '{$estado}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script> alert('Cliente cadastrado com sucesso!'); </script>";
            print "<script> location.href='?page=cliente'; </script>";
        } else {
            print "<script> alert('Não foi possível cadastrar novo cliente'); </script>";
            print "<script> location.href='?page=cliente'; </script>";
        }

        break;

    case "editar":
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

       $sql = "UPDATE clientes SET 
            cpf='{$cpf}',
            nome='{$nome}',
            telefone_comercial='{$telefone_comercial}',
            telefone_comercial='{$telefone_comercial}',
            telefone_whatsapp='{$telefone_whatsapp}',
            email='{$email}',
            tipo_cliente='{$tipo_cliente}',
            cep='{$cep}',
            rua='{$rua}',
            numero='{$numero}',
            complemento='{$complemento}',
            bairro='{$bairro}',
            cidade='{$cidade}',
            estado='{$estado}'
            WHERE
            id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script> alert('Cliente editado com sucesso!'); </script>";
            print "<script> location.href='?page=cliente'; </script>";
        } else {
            print "<script> alert('Não foi possível editar novo cliente'); </script>";
            print "<script> location.href='?page=cliente'; </script>";
        }

        break;

    case "excluir":
        $sql = "DELETE FROM clientes WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script> alert('Cliente excluido com sucesso!'); </script>";
            print "<script> location.href='?page=cliente'; </script>";
        } else {
            print "<script> alert('Não foi possível excluir novo cliente'); </script>";
            print "<script> location.href='?page=cliente'; </script>";
        }
        break;
}
