<?php
    switch($_REQUEST["acao"]) {
        case "cadastrar":
            $datVendas = $_POST["datVendas"];
            $cliente = $_POST["cliente"];
            $vendedor = $_POST["vendedor"];
            $observacao = $_POST["observacao"];
            $obsCliente = $_POST["obsCliente"];

            $sql = "INSERT INTO vendas(datVendas, cliente, vendedor, observacao, obsCliente)
            VALUE 
            ('{$datVendas}', '{$cliente}', '{$vendedor}', '{$observacao}', '{$obsCliente}')";

            $res = $conn->query($sql);

            if($res == true) {
                print "<script> alert('Venda cadastrada com sucesso!'); </script>";
                print "<script> location.href='?page=salvar_vendas'; </script>";
            } else {
                print "<script> alert('Não foi possível cadastar a venda!'); </script>";
                print "<script> location.href='?page=salvar_vendas'; </script>";
            }

            break;
    }
?>