<?php 
include('../cnn.php');



    $codigo=$_REQUEST['codigo'];
    //codigo de id multimedia
    
 //  $usuario=$_REQUEST['txtNusuario'];
  // 	$user=$columna['txtNusuario'];
	//$nombre=$_REQUEST['txtNombre'];
	//$apellido=$_REQUEST['txtApellido'];
	//$email=$_REQUEST['txtEmail'];
	//$estado=$_REQUEST['optValor1'];
	//$tipo=$_REQUEST['optValor2'];






//echo $usuario;
/*/echo $email;<META HTTP-EQUIV="REFRESH" CONTENT="20;../consulta/cusuario.php?codigo=<?php echo $producto ?>">*/
//echo $rol;

 $consulta="DELETE FROM `usuarios` WHERE `usuarios`.`id_usuario` = $codigo ";
 $resultado=mysqli_query($conn,$consulta);

  
  
//$consulta="UPDATE usuarios SET nusuario=$usuario, correo=$email, id_tipo=$rol WHERE id_usuario=$codigo ";
//$resultado=mysqli_query($conn,$consulta);


 ?>

 <META HTTP-EQUIV="REFRESH" CONTENT="0;conusuario.php?codigo=<?php echo $codigo ?>" >

 