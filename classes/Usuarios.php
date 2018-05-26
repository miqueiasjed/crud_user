<?php
require_once 'Crud.php';
class Usuarios extends Crud{

    protected $table = 'usuarios';
    private $nome;
    private $email;
    private $senha;
    private $dataNasc;
    private $emissao;
    private $horaEmissao;


    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function setDataNasc($dataNasc){
        $this->dataNasc = $dataNasc;
    }

    public function setEmissao($emissao){
        $this->emissao = $emissao;
    }

    public function setHoraEmissao($horaEmissao){
        $this->horaEmissao = $horaEmissao;
    }

    public function getNome(){
        return $this->nome;
    }

    public function insert(){
        $sql  = "INSERT INTO $this->table (nome, email, senha, dataNasc, emissao, horaEmissao) VALUES (:nome, :email, :senha, :dataNasc, :emissao, :horaEmissao)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':dataNasc', $this->dataNasc);
        $stmt->bindParam(':emissao', $this->emissao);
        $stmt->bindParam(':horaEmissao', $this->horaEmissao);
        return $stmt->execute();
    }
    public function update($id){
        $sql  = "UPDATE $this->table SET nome = :nome, email = :email, senha = :senha, dataNasc = :dataNasc, emissao = :emissao, horaEmissao = :horaEmissao WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':dataNasc', $this->dataNasc);
        $stmt->bindParam(':emissao', $this->emissao);
        $stmt->bindParam(':horaEmissao', $this->horaEmissao);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}