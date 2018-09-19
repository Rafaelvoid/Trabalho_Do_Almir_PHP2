<?php
$conexao = mysql_connect("localhost","root","");
if (!$conexao){
    echo "Erro ao se conctar mysql <br/>";
    exit;

}

$banco = mysql_select_db("engine");
if (!$banco){
    echo "Erro ao se conctar ao banco Engine...";
    exit;
}


?>