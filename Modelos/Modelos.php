<?php

/**
 * Clase de la cual se basan las clases de modelo.
 * 
 * @author John de la rosa Bueno  <bueno-2008@hotmail.com>
 * @author Guillermo miranda  <guillesistem93@hotmail.com>
 * @author Gilberto Plata  <plata_gilberto@hotmail.com>
 * @author Gilmar Ocampo Nieves  <giocni@gmail.com>
 * 
 */
abstract class Modelos {

    /**
     * Objeto de tipo Db para Acceso a datos. 
     * @var Db
     */
    protected $db;
    /**
     * Objeto de tipo string para manejo de las consultas en el modelo.
     * @var string
     */
    protected $sql;
    /**
     * Envia un error por pantalla.
     * @todo Actualizar para enviar por correo, consola, Manejo de Log.
     * @param array $infoE Arreglo que tiene la información del error que se generó
     * @throws Exception
     */
    private static function enviarError(array $infoE) {
        throw new Exception('Error de B.D: ' . $infoE[0]);
    }

        /**
     * Inicializa la variable de acceso a Db
     */
    public function __construct() {
        $this->db = Db::init();
    }

    /**
     * Cierra la comunicación con la base de datos.
     */
    public function __destruct() {
        $this->db = null;
    }

    /**
     * Establece la cadena de consulta actual para el modelo.
     * @param string $sql
     */
    protected function __setSql($sql) {
        $this->sql = $sql;
    }

    /**
     * Función para ejecutar consultar de tipo SELECT.
     * Retorna un objeto de tipo PDOStatement, que tiene metainformación
     * sobre la consulta realizada.
     * @param string $sql
     * @return PDOStatement
     */
    protected function consultar($sql = null) {
        if($sql == null)
            $sql = $this->sql;
        $sentencia = $this->db->query($sql,PDO::FETCH_ASSOC);
        if($sentencia === false){
            self::enviarError($this->db->errorInfo());
        }
        return $sentencia;
    }
    
    /**
     * Función para ejecutar consultar de tipo INSERT, UPDATE, DELETE
     * @param array $parametros
     * @param string $sql
     */
    protected function ejecutar($parametros, $sql = null){
        if($sql == null)
            $sql = $this->sql;
        $sentencia = $this->db->prepare($sql);
        if(!$sentencia->execute($parametros)){
            self::enviarError($this->db->errorInfo());
        }
    }

}
?>

