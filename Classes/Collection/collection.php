<?php
namespace Classes\collection;
use Classes\Collection\accounts;
use Classes\Collection\todos;
use Classes\Databases\dbConn;
use \PDO;
//use classes\htmldisplay\display;

//include 'dbConn.php';
class collection {
    static public function create() {
      $model = new static::$modelName;
      return $model;
    }
    
    static public function findAll() {
        $db = dbConn::getConnection();
        $tableName = get_called_class();
        $tableName=str_replace("Classes\Collection\\","",$tableName);
        //echo $tableName;
        $sql = 'SELECT * FROM ' . $tableName;
        $statement = $db->prepare($sql);
        $statement->execute();
        $class = static::$modelName;
        $statement->setFetchMode();
        $recordsSet =  $statement->fetchAll(PDO::FETCH_ASSOC);
        echo '<table border=2>';
          $db1=dbConn::getConnection();
          $sql1 = 'SHOW COLUMNS FROM '.$tableName;
          $stmt1 = $db1->prepare($sql1);
          $stmt1->execute();
          $headers=$stmt1->fetchAll(PDO::FETCH_COLUMN);
        
          foreach($headers as $col){
              echo "<td>$col</td>";
              }
          foreach( $recordsSet as $row) {
          echo "<tr>";
          foreach($row as $col){
            echo "<td>$col</td>";
            }
            echo "<tr>";
          }    
          echo '</table>';
        }
        
 
    static public function findOne($id) {
        $db = dbConn::getConnection();
        $tableName = get_called_class();
        $tableName=str_replace("Classes\Collection\\","",$tableName);
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE id =' . $id;
        $statement = $db->prepare($sql);
        $statement->execute();
        $class = static::$modelName;
        $statement->setFetchMode();
        $recordsSet =  $statement->fetchAll(PDO::FETCH_ASSOC);
        echo '<table border=2>';
          $db1=dbConn::getConnection();
          $sql1 = 'SHOW COLUMNS FROM '.$tableName;
          $stmt1 = $db1->prepare($sql1);
          $stmt1->execute();
          $headers=$stmt1->fetchAll(PDO::FETCH_COLUMN);
        
          foreach($headers as $col){
              echo "<td>$col</td>";
              }
          foreach( $recordsSet as $row) {
          echo "<tr>";
          foreach($row as $col){
            echo "<td>$col</td>";
            }
            echo "<tr>";
          }    
          echo '</table>';
    }
}

?>