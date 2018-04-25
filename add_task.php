<?php
include 'db.php';

$task = $_POST['task'];

$rs = mysqli_query($conn,"insert into todo_list (`id`, `task`) VALUES (NULL,'".$task."')");

$response_arr = array();
if(mysqli_affected_rows($conn)){
	$rs = mysqli_query($conn,"select * from todo_list where task = '$task'");	
	if(mysqli_num_rows($rs)){
		$row = mysqli_fetch_assoc($rs);
	}
	array_push($response_arr,array('status'=>'success','data'=>$row));	
}else{	
	array_push($response_arr,array('status'=>'error','data'=>null));
}
echo json_encode($response_arr);