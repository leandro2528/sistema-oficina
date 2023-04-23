<?php
$sql = "SELECT * FROM clientes";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table class='table table-hover table-striped table-bordered tabela_ver_cliente'>";
        print "<tr class='text-small'>";
            print "<th>CPF</th>";
            print "<th>Nome</th>";
            print "<th>Telefone Comercial</th>";
            print "<th>Telefone Residencial</th>";
            print "<th>Telefone / WhatsApp</th>";
            print "<th>Tipo de Cliente</th>";
            print "<th>Email</th>";
            print "<th>Cep</th>";
            print "<th>Rua</th>";
            print "<th>Número</th>";
            print "<th>Complemento</th>";
            print "<th>Bairro</th>";
            print "<th>Cidade</th>";
            print "<th>Estado</th>";
            print "<th>Ações</th>";
        print "<tr>";
    while ($row = $res->fetch_object()) {
        print "<tr class='text-small'>";
            print "<td" . $row->id . "</td>";
            print "<td" . $row->cpf . "</td>";
            print "<td>" . $row->nome . "</td>";
            print "<td>" . $row->telefone_comercial . "</td>";
            print "<td>" . $row->telefone_residencial . "</td>";
            print "<td>" . $row->telefone_whatsapp . "</td>";
            print "<td>" . $row->tipo_cliente . "</td>";
            print "<td>" . $row->email . "</td>";
            print "<td>" . $row->cep . "</td>";
            print "<td>" . $row->rua . "</td>";
            print "<td>" . $row->numero . "</td>";
            print "<td>" . $row->complemento . "</td>";
            print "<td>" . $row->bairro . "</td>";
            print "<td>" . $row->cidade . "</td>";
            print "<td>" . $row->estado . "</td>";
            print "<td>
                        <button onclick=\"location.href='?page=ver_cliente'\" class='btn btn-primary btn-small'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                            <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                            <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
                        </svg> 
                        </button>
                        <button onclick=\"location.href='?page=editar_cliente&id=" . $row->id . "'\" class='btn btn-warning btn-small'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg></button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=cliente&acao=excluir&id=" . $row->id . "';}else{false;}\" class='btn btn-danger btn-small'>
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