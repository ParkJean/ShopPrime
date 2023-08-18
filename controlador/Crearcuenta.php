<?php
include_once '../modelo/ConexionesBd.php';
$objConexionDB = new ConexionesBd('localhost:3306', 'root', 'chanyeol88', 'shopprimebd');



//datos de formulario
$nombreUsuario = $_REQUEST['txtUsuario'];
$apPaternoUsuario = $_REQUEST['txtApPaterno'];
$apMaternoUsuario = $_REQUEST['txtApMaterno'];
$gmailUsuario = $_REQUEST['txtEmail'];
$telefonoUsuario = $_REQUEST['txtTelefono'];
$fotoUsuario = addslashes(file_get_contents($_FILES['txtFoto']['tmp_name']));
$nombreFotoUsuario = $_FILES['txtFoto']['name'];
$nombreLogin = $_REQUEST['txtNombreLogin'];
$claveLogin = $_REQUEST['txtContrasena'];   
$idRolUsuario = $_REQUEST['txtTipoUsuario'];


// Conectar a la base de datos

if($objConexionDB->getConexionBD()){
    echo 'Conexion exitosa ';
    try{
    //* aqui va store procedure, ? -> se manejan por 
    $instruccionSQL= $objConexionDB->getConn()-> prepare ("call shopprimebd.sp_crearCuenta1(:nombreu,:paterno,:materno,:email,:telefono,:foto,:nombrefoto,:login,:password,:rol);");
    $instruccionSQL->bindParam(':nombreu',$nombreUsuario);
    $instruccionSQL->bindParam(':paterno',$apPaternoUsuario);
    $instruccionSQL->bindParam(':materno',$apMaternoUsuario);
    $instruccionSQL->bindParam(':email',$gmailUsuario);
    $instruccionSQL->bindParam(':telefono',$telefonoUsuario);
    $instruccionSQL->bindParam(':foto',$fotoUsuario);
    $instruccionSQL->bindParam(':nombrefoto',$nombreFotoUsuario);
    $instruccionSQL->bindParam(':login',$nombreLogin);
    $instruccionSQL->bindParam(':password',$claveLogin);
    $instruccionSQL->bindParam(':rol',$idRolUsuario);
    //*Ejecutar instruccion
    $instruccionSQL-> execute();
    echo 'se guardo correctamente las cuenta';
   echo' <script>
    window.location.href="../vista/paginas/IniciarSesion.html";
    </script>'; 
    
    } catch (PDOException $e) {
    //throw $th;
    echo "Error de ". $e->getMessage(); 
    }
    $objConexionDB->setConn(null);
}else{
    echo 'Fallo de conexion';
}




?>