<?php define('BASEPATH', "localhost");
require_once("autoload.php");

$contact_m = new ContactModel();


$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$conditions = array(
  "where"=>array("id"=>$id),
  "return_type"=>"single"
  );

$contact = $contact_m->getRows($conditions);

if(!$contact){
  header("Location:index.php?delete=err");
  return;
}else{

	$contact_m->delete(array("id"=>$id));
 
	header("Location:index.php?delete=ok");
	return;

}

//do you have permission to delete ? 

//Homework
//note
//title varchar 255
//description text
//attachment varchar 55 optional file


?>
