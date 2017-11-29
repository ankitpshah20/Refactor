<?php
namespace Classes\Collection;
use Classes\Collection\collection;
class todos extends collection {
  protected static $modelName = 'todo';
    public static function tableName1(){
    $tableName='todos';
    return $tableName;
    }
}
?>