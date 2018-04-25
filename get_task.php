<?php
include 'db.php';

$rs = mysqli_query($conn,"select * from todo_list");
$result_arr = array();
if( mysqli_num_rows($rs)){
	while($row = mysqli_fetch_assoc($rs)){
		array_push($result_arr,$row);
	}
	echo json_encode($result_arr);
}