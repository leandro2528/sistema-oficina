<?php 
    switch($_REQUEST["acao"]) {
        case "cadastrar":
            $codBarra = $_POST["codBarra"];
            $nome = $_POST["nome"];
            $tipMov = $_POST["tipMov"];
            $precoComp = $_POST["precoComp"];
            $precoVenda = $_POST["precoVenda"];
            $unidade = $_POST["unidade"];
            $estoque = $_POST["estoque"];
            $estoqueMinimo = $_POST["estoqueMinimo"];

            $sql = "INSERT INTO produtos(codBarra, nome, tipMov, precoComp, precoVenda, unidade, estoque, estoqueMinimo) 
            VALUES 
            ('{$codBarra}', '{$nome}', '{$tipMov}', '{$precoComp}', '{$precoVenda}', '{$unidade}', '{$estoque}', '{$estoqueMinimo}')";

            $res = $conn->query($sql);

            if($res == true) {
                print "<script> alert('Produto cadastrado com sucess!'); </script>";
                print "<script> location.href='?page=produtos'; </script>";
            } else {
                print "<script> alert('Não foi possível cadastrar o produto!'); </script>";
                print "<script> location.href='?page=produtos'; </script>";
            }

            break;
        
        case "editar":
            // 
            break;

        case "excluir":
            // 
            break;
    }
?>