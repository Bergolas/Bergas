<?php
$dbHost = 'localhost';
$dbUsarname = 'root';
$dbPassword = '';
$dbName = 'banco_dados';

$conexao= new mysqli($dbHost,$dbUsarname,$dbPassword,$dbName);

/*if($conexao->connect_errno){
    echo "Erro no servidor";
}else{
    echo "Conexão concedida com sucesso";
}*/
?>