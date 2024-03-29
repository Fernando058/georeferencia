<?php
$servername="bou07gzqrfgzqgcjkzst-mysql.services.clever-cloud.com";
$username="usvnedkk1cscttv7";
$password="uscmmz5vOOlksCOD4tKP";
$dbname="bou07gzqrfgzqgcjkzst";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}else{
	
}

?>