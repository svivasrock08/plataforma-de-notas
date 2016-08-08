<?php

	
	
	$user=$_POST['user1'];
	$pass=($_POST['pass1']);

	$link =mysql_connect("localhost","root","");
	mysql_select_db("login",$link);
	
	
	$sql2=mysql_query("select * from logines where usuario='$user'");
	if($f2=mysql_fetch_array($sql2)){
		echo ' <script language="javascript">alert("Atencion, ya existe el usario en la base de datos ");</script> ';
		echo "<script>location.href='login1.html'</script>";
			}
		else{

			mysql_query("INSERT INTO logines VALUES('$user','$pass')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				mysql_close($link);
				echo "<script>location.href='login1.html'</script>";
	}


	
?>