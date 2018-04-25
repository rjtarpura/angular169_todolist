<?php
include 'db.php';

$id = $_POST['id'];

$rs = mysqli_query($conn,"delete from todo_list where `id` = $id");

$response_arr = array();
if(mysqli_affected_rows($conn)){	
	array_push($response_arr,array('status'=>'success'));
}else{	
	array_push($response_arr,array('status'=>'error'));
}
echo json_encode($response_arr);