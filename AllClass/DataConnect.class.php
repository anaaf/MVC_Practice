<?php
class DataConnect{
    // we are declaring  some private proporties to kep the dataBase information secure.
  private $host="localhost";
  private $user="root";
  private $pwd="";
  private $dbname="mvc";


// protected method will containing connection to the DataBase
public function connect()
{
 //The PHP Data Objects ( PDO ) extension defines a lightweight, consistent interface for accessing databases in PHP
$dsn='mysql::host='.$this->host. ';dbname='. $this->dbname;
$pdo= new PDO($dsn,$this->user,$this->pwd);

//default attribute to fetch data from the database

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
return $pdo;
}

}


 ?>
