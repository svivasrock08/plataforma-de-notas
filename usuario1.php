<!DOCTYPE html>
<?php
session_start();

if (@!$_SESSION['user']) {
	header("Location: index.php");


}
?>
<head>
    <meta charset="UTF-8">
    <title>matricula</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize1.css">

    
        <link rel="stylesheet" href="css/style1.css">

    
    
    
  </head>

  <body style="background-color:#051624">

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Matricula</a></li>
        <li class="tab"><a href="#login">Notas</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Matriculate</h1>
          
          <form action="matricula1.php" method="post">
           <div class="field-wrap">
            <label>
              Semestre<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="grupo" />
          </div>
           <div class="field-wrap">
            <label>
              Asignatura <span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="asig1" />
          </div>
         
          <div class="field-wrap">
            <label>
              Ciudad<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="ciudad" />
          </div>
          <div class="field-wrap">
            <label>
              Horario<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="horario" />
          </div>
        
          <button type="submit" class="button button-block" />Enviar</button>
          </form>
          <form name="myform" action="index.html" method="POST"> 

           


          <span class="req">*</span> 
          <a href=index.html> <button type="submit" class="button button-block" href="index.html" />Regresar</button></a>
          </form>          


        </div>
        
        <div id="login">   
          <h1>Bienvenido!</h1>
          
          <form action="login1.php" method="post">
          
           <?php
                    $user2=$_SESSION['user'];
                    
                    $link =mysql_connect("localhost","root","");
                    if($link){
                        mysql_select_db("login",$link);
                    }
                $sql=("SELECT * FROM logines where usuario='$user2'");
                $query=mysql_query($sql);

                echo "<table border='1'; class='table table-condensed';>";
                    echo "<tr class='warning'>";
                        echo "<td>nombre</td>";
                        echo "<td>grupo</td>";
                        echo "<td>Asignatura </td>";
                        echo "<td>Ciudad</td>";
                        echo "<td>Notas</td>";
                        echo "<td>Horario</td>";
                    echo "</tr>";
            ?>
            <?php 
                 while($arreglo=mysql_fetch_array($query)){
                    echo "<tr class='success'>";
                        echo "<td>$arreglo[0]</td>";
                        echo "<td>$arreglo[2]</td>";
                        echo "<td>$arreglo[3]</td>";
                        echo "<td>$arreglo[4]</td>";
                        echo "<td>$arreglo[5]</td>";
                        echo "<td>$arreglo[6]</td>";
                        
                        echo "</tr>";
                }

                echo "</table>";

                    extract($_GET);
                    if(@$idborrar==2){
        
                        $sqlborrar="DELETE FROM user WHERE id_articulo=$id";
                        $resborrar=mysql_query($sqlborrar);
                        echo '<script>alert("REGISTRO ELIMINADO")</script> ';
                        //header('Location: proyectos.php');
                        echo "<script>location.href='admin.php'</script>";
                    }

            ?></p>
          
          
          
          
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
