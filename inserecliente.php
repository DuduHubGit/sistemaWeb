<?php
require("conexao.php");
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$idade = $_POST['idade'];

$insereCliente = "INSERT INTO cliente(nome, endereco, idade) VALUES
('$nome','$endereco','$idade')";
$operacaoSQL = mysqli_query($conexao, $insereCliente);

if (mysqli_affected_rows($conexao) != 0) {
echo "Cliente cadastrado com Sucesso!";
header("Location: listacliente.php");
} else {
echo " O Cliente não foi cadastrado com Sucesso!";
header("Location: listacliente.php");
}