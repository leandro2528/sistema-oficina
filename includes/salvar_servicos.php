<?php
    switch($_REQUEST["acao"]) {
        case "cadastrar":
            $nome  = $_POST["nome"];
            $preco = $_POST["preco"];
            $descricao = $_POST["descricao"];

            $sql = "INSERT INTO servicos(nome, preco, descricao) VALUES ('{$nome}', '{$preco}', '{$descricao}')";

            $res = $conn->query($sql);

            if($res == true) {
                print "<script> alert('Serviço cadastrado com sucesso!'); </script>";
                print "<script> location.href='?page=servicos'; </script>";
            } else {
                print "<script> alert('Não foi possível cadastrar o serviço!'); </script>";
                print "<script> location.href='?page=servicos'; </script>";
            }

            break;
    }
?>