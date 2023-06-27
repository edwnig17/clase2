<?php 
class Conectar{
    protected $db;
    protected function Conexion(){
        try {
            $conectar = $this->db=new PDO("mysql:local=localhost; dbname=alquilartemis", "root", "");
            return $conectar;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function set_name(){
        return $this->db->query("SET NAMES 'utf8'");
    }
}
?>