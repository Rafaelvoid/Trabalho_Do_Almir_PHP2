<?php
include("connection.php");

 $desc = trim($_POST['txtDesc']);
 $qtde = trim($_POST['txtQtde']);
 $val = trim($_POST['txtValor']);

 if (!empty($desc) && $qtde>0 && $val>0){
     $sql = "INSERT INTO produto (descricao, quantidade, valor) VALUES ('$desc', '$qtde', '$val');";
     $ins = mysql_query($sql);
    
    }
    else  echo ("Campos invalidos ");
    

   //header("location: lstProd.php");
?>