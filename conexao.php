<?php
$servername = "localhost"; //server local - padrão
$username = "root"; // padrão - root
$password = ""; // senha de conexão do banco de dados
$database = "crudphp"; // alterar conforme o nome do seu banco de dados
// create connection

$conexao = mysqli_connect($servername, $username, $password, $database);
