<?php
namespace myfrm;
use PDO;
use PDOException;
use PDOStatement;
class Db
{
  private $connection;
  private PDOStatement $stmt;
  private static $instance = null;

  private function __construct()
  {
  }

  private function __clone()
  {
    
  }

  public function __wakeup()
  {
    
  }

  public static function getInstance()
  {
    if (self::$instance === null) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  public function getConnection(array $db_confiq)
  {
    $dsn = "mysql:host={$db_confiq['host']};dbname={$db_confiq['dbname']};charset={$db_confiq['charset']}";
    try {
      $this->connection = new PDO($dsn, $db_confiq['username'], $db_confiq['password'], $db_confiq['options']);
      return $this;
    } catch (PDOException $e) {
      abort(404);
    }
  }

  public function query($query, $params = [])
  {

    $this->stmt = $this->connection->prepare($query);
    $this->stmt->execute($params);
    return $this; //повертати не властивість об'єкту а сам об'єкт
  }

  public function findAll()
  {
    return  $this->stmt->fetchAll();
  }
  public function find()
  {
    return  $this->stmt->fetch();
  }

  public function findOrFail()
  {
    $res = $this->find();
    if (!$res) {
      abort(404);
    }
    return  $res;
  }
};
