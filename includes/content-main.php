<?php 
    switch(@$_REQUEST["page"]) {
        case "cliente":
            include("cliente.php");
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
    }
?>