<?php
namespace Classes\Model;
use Classes\Model\model;
class todo extends model {
  
  protected static $modelName = 'todo';
  public $id;
	public $owneremail;
	public $ownerid;
	public $createddate;
	public $duedate;
	public $message;
	public $isdone;
  
  public static function tableName(){
    $tableName='todos';
    return $tableName;
  }
}

?>