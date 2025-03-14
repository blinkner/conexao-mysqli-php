<?php
require_once 'conexao.php';

class Pessoa
{
    private $id;
    private $nome;
    private $idade;

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function insertPessoa() {
        global $conexao;

        // Inserção de registro no banco de dados com prepared statements
        $query = "INSERT INTO pessoas (id, nome, idade) VALUES (?, ?, ?)";
        $stmt = $conexao->prepare($query);
        $stmt->bind_param('isi', $this->getId(), $this->getNome(), $this->getIdade());
        $stmt->execute();
        $stmt->close();
    }
    public function updatePessoa() {
        global $conexao;

        // Atualização de registro no banco de dados com prepared statements
        $query = "UPDATE pessoas SET nome=?, idade=? WHERE id=?";
        $stmt = $conexao->prepare($query);
        $stmt->bind_param('sii', $this->getNome(), $this->getIdade(), $this->getId());
        $stmt->execute();
        $stmt->close();
    }
    public function selectPessoa() {
        global $conexao;

        // Seleção de registro no banco de dados com prepared statements
        $query = "SELECT * FROM pessoas WHERE id=?";
        $stmt = $conexao->prepare($query);
        $stmt->bind_param('i', $this->getId());
        $stmt->execute();
        $stmt->bind_result($this->id, $this->nome, $this->idade);
        $stmt->fetch();
        $stmt->close();
    }
    public function deletePessoa() {
        global $conexao;

        // Exclusão de registro no banco de dados com prepared statements
        $query = "DELETE FROM pessoas WHERE id=?";
        $stmt = $conexao->prepare($query);
        $stmt->bind_param('i', $this->getId());
        $stmt->execute();
        $stmt->close();
    }
}
