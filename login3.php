<?php

session_start();
	
	$user=$_POST['user'];
	$pass=($_POST['pass']);

	$link =mysql_connect("localhost","root","") ;
	mysql_select_db("mydb",$link);
	$sql2=mysql_query("select * from login where usuario='$user' and password='$pass'");
	if($f2=mysql_fetch_array($sql2)){
			

			
  			if(isset($_POST['user'])){
  				$_SESSION['user']=$_POST['user'];	
				
				echo '	<p><script>alert("Bienvenido :  '.$_SESSION['user'].'")</script></p>';
				echo "<script>location.href='usuario.php'</script>";

			}

	}
	else{
		echo '<script>alert("usuario o contraseña incorrecto")</script> ';
		echo "<script>location.href='login.html'</script>";
	}

?>


		
			
  				

            
			
                            
