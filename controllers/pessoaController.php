<?php
require_once 'models/Pessoa.php';

// Cria um objeto da classe Pessoa
$pessoa = new Pessoa;

// Define os atributos do objeto e insere no banco de dados.
$pessoa->setId('2');
$pessoa->setNome('Gabriel');
$pessoa->setIdade('24');
$pessoa->insertPessoa();

// Muda o atributo de idade e atualiza o registro no banco de dados. Onde o id continua sendo 2
$pessoa->setIdade('25');
$pessoa->updatePessoa();

// Atribui outro id e busca a pessoa com esse id no banco de dados.
$pessoa->setId('1');
$pessoa->selectPessoa();

// Apaga do banco de dados o registro da pessoa com id = 1
$pessoa->deletePessoa();
