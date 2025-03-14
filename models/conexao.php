<?php
define("SERVER_DB", "localhost"); // localhost
define("USER_DB", "root"); // Usuário do banco de dados
define("PASS_DB", ""); // Senha do banco de dados
define("DATABASE_DB", "meu_banco"); // Nome do banco de dados

// Mensagens de erro
$msg[0] = "Conexão com o banco falhou!";

// Fazendo a conexão com o servidor MySQL
try {
    $conexao = new mysqli(SERVER_DB, USER_DB, PASS_DB, DATABASE_DB);

    // Setando charset do banco
    $conexao->set_charset("utf8");
} catch (\Throwable $th) {
    echo $msg[0];

    exit();
}
