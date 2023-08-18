ConexionesBd.php
<?php
class ConexionesBd {
    //Atributos
    private $nombreServidor;
    private $nombreUsuarioServidor;
    private $claveUsuarioServidorBD;
    private $NombreBaseDatos;
    private $conn;

    //constructor

    public function __construct($nombreServidor,$nombreUsuarioServidor,$claveUsuarioServidorBD,$NombreBaseDatos){
        $this->nombreServidor=$nombreServidor;
        $this->nombreUsuarioServidor=$nombreUsuarioServidor;
        $this->claveUsuarioServidorBD=$claveUsuarioServidorBD;
        $this->NombreBaseDatos=$NombreBaseDatos;
    }
    //Set and Get

    


    /**
     * Get the value of nombreServidor
     */
    public function getNombreServidor()
    {
        return $this->nombreServidor;
    }

    /**
     * Set the value of nombreServidor
     */
    public function setNombreServidor($nombreServidor): self
    {
        $this->nombreServidor = $nombreServidor;

        return $this;
    }

    /**
     * Get the value of nombreUsuarioServidor
     */
    public function getNombreUsuarioServidor()
    {
        return $this->nombreUsuarioServidor;
    }

    /**
     * Set the value of nombreUsuarioServidor
     */
    public function setNombreUsuarioServidor($nombreUsuarioServidor): self
    {
        $this->nombreUsuarioServidor = $nombreUsuarioServidor;

        return $this;
    }

    /**
     * Get the value of claveUsuarioServidorBD
     */
    public function getClaveUsuarioServidorBD()
    {
        return $this->claveUsuarioServidorBD;
    }

    /**
     * Set the value of claveUsuarioServidorBD
     */
    public function setClaveUsuarioServidorBD($claveUsuarioServidorBD): self
    {
        $this->claveUsuarioServidorBD = $claveUsuarioServidorBD;

        return $this;
    }

    /**
     * Get the value of NombreBaseDatos
     */
    public function getNombreBaseDatos()
    {
        return $this->NombreBaseDatos;
    }

    /**
     * Set the value of NombreBaseDatos
     */
    public function setNombreBaseDatos($NombreBaseDatos): self
    {
        $this->NombreBaseDatos = $NombreBaseDatos;

        return $this;
    }

    /**
     * Get the value of conn
     */
    public function getConn()
    {
        return $this->conn;
    }

    /**
     * Set the value of conn
     */
    public function setConn($conn): self
    {
        $this->conn = $conn;

        return $this;
    }

    //metodos

    public function getConexionBD(){
        try {
            $this->conn=new PDO("mysql:host=".$this->getNombreServidor().";dbname=".$this->getNombreBaseDatos(), $this->getNombreUsuarioServidor(),$this->getClaveUsuarioServidorBD());
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;

        } catch (PDOException $e) {
            echo 'Error de Conexion a la base de datos'. $e->getMessage();
        }
        return false;
    }
}