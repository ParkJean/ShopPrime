<?php
include_once '../modelo/ConexionesBd.php';
$objConexionDB = new ConexionesBd('localhost:3306', 'root', 'chanyeol88', 'shopprimebd');

$usuarioU = $_REQUEST['txtUsuario'];
$contrasenaU = $_REQUEST['txtcontrasena'];

if ($objConexionDB->getConexionBD()) {
    echo 'Conexion exitosa....';
    $instrucionSQL = $objConexionDB->getConn()->prepare("
    call ShopPrimeBD.sp_validarLogin(:usuario,:clave);
    ");
    $instrucionSQL->bindParam(':usuario', $usuarioU);
    $instrucionSQL->bindParam(':clave', $contrasenaU);

    // Ejecutar Instruccion

    //Ejecutar Instruccion 
    $instrucionSQL->execute();

    $datosConsulta = $instrucionSQL->fetchAll();

    $usuario = $datosConsulta[0]['Nombre'];
    $nombreLogin = $datosConsulta[0]['NombreLogin'];
    $email = $datosConsulta[0]['email'];

    $contrasena = $datosConsulta[0]['ClaveLogin'];
    $rolUsuario = $datosConsulta[0]['NombreRol'];
    echo 'nombre : ' . $usuario;
    echo 'clave : ' . $contrasena;
    echo 'Rol : ' . $rolUsuario;


    if (
        ($usuario == $usuarioU || $nombreLogin == $usuarioU || $email == $usuarioU)
        && $contrasena == $contrasenaU
        && $rolUsuario == "Administrador"
    ) {
        echo 'Usuario y/o Contresaña Validos';
        session_start();
        $_SESSION['usuarioValido'] = $usuario;
        echo '
    <script>
    window.location.href="../vista/paginas/Administrador/indexAdmin.php";
    </script>
    ';
    } elseif (
        ($usuario == $usuarioU || $nombreLogin == $usuarioU || $email == $usuarioU)
        && $contrasena == $contrasenaU
        && $rolUsuario == "Clientes"
    ) {
        echo 'Usuario y/o Contresaña Validos';
        session_start();
        $_SESSION['usuarioValido'] = $usuario;
        echo '
    <script>
    window.location.href="../vista/paginas/Cliente/indexCliente.php";
    </script>
    ';
    } else {
        echo 'Usuario y/o Contresaña No Validos';
    }
} else {
    echo 'Fallo la conexion';
}
?>