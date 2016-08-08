<?php

session_start();
	
	
	$user2=$_SESSION['user'];
	$pass2='diego';
	$grupo=$_POST['grupo'];
	$asig1=($_POST['asig']);
	
	$ciudad=$_POST['ciudad'];
	$horario=($_POST['horario']);

	$link =mysql_connect("localhost","root","") ;
	mysql_select_db("logines",$link);

	mysql_query("");
	echo '<script>alert('')</script>';
	

?>