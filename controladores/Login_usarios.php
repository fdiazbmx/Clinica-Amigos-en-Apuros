<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <?php
         
         
          include '../controladores/conexion.php';
          $sql="SELECT * FROM USUARIO WHERE CORREO= :txtcorreo AND CONTRASEÑA=:txtpassword";
          $login=htmlentities(addslashes($_POST["txtcorreo"]));  
          $passwordlog=htmlentities(addslashes($_POST["txtpassword"]));
          $resultado=$conn->prepare($sql);
          $resultado->bindValue(":txtcorreo", $login);
          $resultado->bindValue(":txtpassword", $passwordlog);
          $resultado->execute();
          
          $numero_registro=$resultado->rowCount();
                    
          if($numero_registro!=0){  
              session_start();
              $_SESSION["usuario"]=$_POST[txtcorreo];  
              header("location:../panel_clientes.php");
              
          }else{
              header("location:../login_clientes.php"); 
              
              }     
        ?>
    </body>
</html>
