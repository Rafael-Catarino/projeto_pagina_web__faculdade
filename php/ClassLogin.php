<?php
class Login
{
  private $connect;

  public function __construct($localhost, $user, $password, $dbname)
  {
    try {
      $this->connect = new PDO("mysql:host=" . $localhost . ";user=" . $user . ";password=" . $password . ";dbname=" . $dbname);
    } catch (PDOException $e) {
      echo 'A conexão falhou e retornou a seguinte mensagem de erro: ' . $e->getMessage();
    }
  }

  public function createTable()
  {
    $this->connect->query(
      "CREATE TABLE IF NOT EXISTS cliente (
      id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
      nome VARCHAR(50) NOT NULL,
      email VARCHAR(50) UNIQUE NOT NULL,
      senha VARCHAR(10) NOT NULL
    );"
    );
  }

  public function selectPerson($email, $password)
  {
    $res = array();
    $cmd = $this->connect->prepare("SELECT nome, email, senha FROM cliente WHERE email = :e");
    $cmd->bindValue(":e", $email);
    $cmd->execute();
    $res = $cmd->fetch(PDO::FETCH_ASSOC);
    if ($res == []) {
      return false;
    } else {
      if ($res["senha"] != $password) {
        return false;
      } else {
        return $res;
      }
    }
  }

  public function insertData($nome, $email, $senha)
  {
    $cmd = $this->connect->prepare("SELECT id FROM cliente WHERE email = :e");
    $cmd->bindValue(":e", $email);
    $cmd->execute();
    if ($cmd->rowCount() > 0) {
      return false;
    } else {
      $cmd = $this->connect->prepare("INSERT INTO cliente(nome, email, senha) values (:n, :e, :s)");
      $cmd->bindValue(':n', $nome);
      $cmd->bindValue(':e', $email);
      $cmd->bindValue(':s', $senha);
      $cmd->execute();
      return true;
    }
  }
}
