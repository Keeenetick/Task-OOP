<?php
class QueryBuilder
{
    public $pdo;
    function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost; dbname=Task", "root", "");
    }

    function all($table)
  {
  $stat=$this->pdo->prepare("SELECT * FROM $table");
  $stat->execute();
  $results = $stat->fetchAll(2);
  return $results;
  }


  function store($table, $data)
{
$keys = array_keys($data);
$stringOfKeys = implode(',',$keys);
$placeholders = ":". implode(',:',$keys);
$sql = "INSERT INTO $table($stringOfKeys) VALUE($placeholders)";
$statement = $this->pdo->prepare($sql);
$r =$statement->execute($data);
header('Location: /');exit;
}



function getOne($table, $id)                           
{
    
    $stat=$this->pdo->prepare("SELECT * FROM $table WHERE id=:id");
    $stat->bindParam(":id",$id);
    $stat->execute();
    $result = $stat->fetch(PDO::FETCH_ASSOC);
    return $result;
}


function update($table, $data)
{
foreach($data as $key=>$value)
{
    $fields .= $key . "=:" . $key . ",";
}
$fields = rtrim($fields, ",");

$sql = "UPDATE $table SET $fields WHERE id=:id";

$stat=$this->pdo->prepare($sql);
$stat->execute($data);
header("Location: /");exit;

}


function delete($table, $id)
{
    $id = $_GET['id'];
    $sql = "DELETE FROM $table WHERE id=:id";
    $stat = $this->pdo->prepare($sql);
    $stat->bindParam(":id",$id);
    $stat->execute();
    
    header("Location: /");
}
  
}

?>