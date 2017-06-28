<?php define('BASEPATH', "localhost");
require_once("autoload.php");

$note_m = new noteModel();


$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$conditions = array(
  "where"=>array("id"=>$id),
  "return_type"=>"single"
  );

$contact = $note_m->getRows($conditions);

if(!$contact){
  header("Location:index.php?delete=err");
  return;
}else{

	$note_m->delete(array("id"=>$id));
 
	header("Location:note.php?delete=ok");
	return;

}

//do you have permission to delete ? 

//Homework
//note
//title varchar 255
//description text
//attachment varchar 55 optional file


?>
