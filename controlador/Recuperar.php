<?php
include_once '../modelo/ConexionesBd.php';
$objConexionDB = new ConexionesBd('localhost:3306', 'root', 'chanyeol88', 'shopprimebd');

$correoUsuario=$_REQUEST['txtCorreo'];

if($objConexionDB->getConexionBD()){


    $instrucionSQL=$objConexionDB->getConn()->prepare("call shopprimebd.sp_recuperarContrasenia(:email);");
    $instrucionSQL->bindParam(':email',$correoUsuario);

    $instrucionSQL->execute();
    $datosConsulta=$instrucionSQL->fetchAll();
    $email = $datosConsulta[0]['email'];


//$queyCorreo=mysqli_query($objConexionBD->getConexion(),"SELECT*FROM usuario where emailUsuario='$correoUsuario'");
//$nr=mysqli_num_rows($fetchAll());
if ($email==$correoUsuario) {
   
    //$mostrar=mysqli_fetch_array($datosConsulta);
    $enviarpassword= $datosConsulta[0]['ClaveLogin'];
    $paraCorreo=$correoUsuario;
    $titulo="Recuperar Contraseña";
    $mensaje="
    Tu código de seguridad de ShopPrime : ".$enviarpassword;
    
    $tuCorreo="FROM: chan-yeol88@outlook.com";
        
    if (mail($paraCorreo,$titulo,$mensaje,$tuCorreo)) {
        echo "Correo enviado";

    }else {
        echo "Correo No Enviado";
    }
}else{
    echo "Este correo no existe";
}
}else{
    echo 'DATE DE BAJA';
}

?>