<?php
use Classes\Database\dbConn;
use Classes\HtmlDisplay\display;
use Classes\Collection\accounts;
use Classes\Collection\collection;
use Classes\Collection\todos;
use Classes\Model\account;
use Classes\Model\model;
use Classes\Model\todo;

class Manage{
  public static function autoload($class){
    $class=str_replace("\\","/",$class).".php";
    include $class;
  }
}

spl_autoload_register(array('Manage','autoload'));


ini_set('display_errors', 'On');
error_reporting(E_ALL);

//require 'accounts.php';
$obj=new main();

class main{

  public function __construct(){
     echo 'Existing Accounts Records.<br>';
     accounts::findAll();
     echo '<br>';
     echo 'Creating new id 26 in accounts table.<br>';
      $record = new Classes\Model\account;
     $record->id='';
     $record->email='jbl@gmail.com';
     $record->fname='jbl';
     $record->lname='qpz';
     $record->phone='975-535-5019';
     $record->birthday='2001-07-06';
     $record->gender='male';
     $record->password='125445';
     $record->save();
     echo 'After adding record.<br>';
     accounts::findAll();
     echo '<br>';
  
      echo 'Searching new created id 26 in accounts table.<br>';
     $id=26;
     accounts::findOne($id);
     
     echo '<br>';
     echo 'updating details of id=26.<br>';
      $record = new Classes\Model\account;
     $record->id=26;
     $record->email='skl@gmail.com';
     $record->fname='qeq';
     $record->lname='kkl';
     $record->phone='923-345-1111';
     $record->birthday='1999-08-03';
     $record->gender='male';
     $record->password='12367';
     $record->save();
     echo 'After update.<br>';
     accounts::findOne($id);
     echo '<br>';
  //print_r($record1);
  
  echo 'To delete id=26 from accounts.<br>';
    $record = new Classes\Model\account;
    $record->id=26;
    $record->delete();
    echo 'After Delete id=26.<br>';
    accounts::findAll();
    echo '<br>';
    
   
    echo 'Existing Todos Records.<br>';
     todos::findAll();
     echo '<br>';
     
     echo 'Creating new id 26 in todos table.<br>';
     $record=new Classes\Model\todo;
     $record->id='';
     $record->owneremail='rsvp@gmail.com';
     $record->ownerid='30';
     $record->createddate='2017-07-09 09:00:00';
     $record->duedate='2017-10-10 11:00:00';
     $record->message='Active Record';
     $record->isdone='0';
     $record->save();
     echo 'After adding record.<br>';
     todos::findAll();
     echo '<br>';
     
     echo 'Searching new created id 26 in todos table.<br>';
     $id=26;
     todos::findOne($id);
     
     echo '<br>';
     echo 'updating details of id=26.<br>';
     $record=new Classes\Model\todo;
     $record->id=26;
     $record->owneremail='badh@gmail.com';
     $record->ownerid='31';
     $record->createddate='2017-09-07 08:00:00';
     $record->duedate='2017-10-08 09:00:00';
     $record->message='Active Record update';
     $record->isdone='1';
     $record->save();
     echo 'After update.<br>';
     todos::findOne($id);
     echo '<br>';
    
    echo 'To delete id=26 from todos.<br>';
    $record=new Classes\Model\todo;
    $record->id=26;
    $record->delete();
    echo 'After Delete id=26.<br>';
    todos::findAll();
    echo '<br>';
    
  
   
	}
}
?>