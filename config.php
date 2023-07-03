<?php 

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '1506';
$dbName = 'cadastro_aulas';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

/**if($conexao ->connect_errno){

    echo "Erro";
}
else{
    echo "Conexao efeutada com sucesso!";
}*/
?>