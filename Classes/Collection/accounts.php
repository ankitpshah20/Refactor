<?php
namespace Classes\Collection;
use Classes\Collection\collection;
//include 'collection.php';
class accounts extends collection {
  protected static $modelName = 'account';
   public static function tableName1(){
    $tableName='accounts';
    return $tableName;
    }
}
?>