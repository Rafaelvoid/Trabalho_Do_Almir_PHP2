<?php
include("connection.php");
$rs = mysql_query("SELECT * FROM produto;");
?>

<html>
    <head>
        <meta charset="UTF-8">
       <title>Listagen de Produtos</title>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
       integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
     <body>
            <div class="container col-md-9">
            <h1>Lista de Produtos</h1>
            <br>
            <input type="button" id="bt_Add" name="bt_ADD" class="btn btn-primary btn-lg" value="Adicionar" 
                            onclick="javascript:location.href='frmInsProd.html'">
            <br><br>
            <table  class="table table-dark col-md-8">
            <caption>Produtos em Estoque</caption>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                </tr>
                <?php while ($linha = mysql_fetch_array($rs)) {?>
                        <tr>
                            <td><?php echo $linha['id'] ?></td>
                            <td><?php echo $linha['descricao'] ?></td>
                            <td><?php echo number_format ($linha['quantidade'],2,',','.') ?></td>
                            <td>R$<?php echo number_format ($linha['valor'],2,',','.') ?></td>
                        </tr>
                <?php } ?>

            </table>
        </body>
</html>