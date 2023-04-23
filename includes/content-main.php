<?php
include("includes/config.php");
switch (@$_REQUEST["page"]) {
    case "cliente":
        include("cliente.php");
        break;

    case "salvar_cliente":
        include("salvar_cliente.php");
        break;

    case "editar_cliente":
        include("editar_cliente.php");
        break;
    
    case "ver_cliente":
        include("ver_cliente.php");
        break;

    case "produtos":
        include("produtos.php");
        break;

    case "servicos":
        include("servicos.php");
        break;


    case "vendas":
        include("vendas.php");
        break;


    case "ordemServicos":
        include("ordemServicos.php");
        break;


    case "termosGarantias":
        include("termosGarantias.php");
        break;


    case "arquivos":
        include("arquivos.php");
        break;


    case "lancamentos":
        include("lancamentos.php");
        break;

    default:
        print include("inicial.php");
        break;
}