<?php

$db = mysqli_connect('localhost','root','','quizzer');
if(mysqli_connect_error()){
	echo 'faild to connect width :' . mysqli_connect_errno();
	exit();
}






?>