<?php
class Db{
  private $connection;
  private PDOStatement $stmt;

  public function __construct(array $db_confiq)
  {
      $dsn = "mysql:host={$db_confiq['host']};dbname={$db_confiq['dbname']};charset={$db_confiq['charset']}";
      $this->connection= new PDO($dsn, $db_confiq['username'], $db_confiq['password'], $db_confiq['options']);
  }

  public function query($query,$params = []){
       $this->stmt = $this->connection->prepare($query);
       $this->stmt->execute();
       return $this; //повертати не властивість об'єкту а сам об'єкт
  }

  public function findAll(){
     return  $this->stmt->fetchAll();
  }
  public function find(){
     return  $this->stmt->fetch();
  }

  public function findOrFail(){
      $res = $this->find();
         if(!$res){
          abort(404);
      }
     return  $res;
  }
};