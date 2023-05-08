<?php
    class Conexion{
        private $con;
        public function __construct(){

            $this->con = new mysqli('localhost','root','','db_name');
        }

        public function getPersona(){
            $query = $this->con->query('SELECT documento, nombre, edad, fk_id_ciudad FROM tbl_personas, tbl_ciudades');
            
            $retorno = [];
            
            $i = 0;
            while($fila = $query->fetch_assoc()){
                $retorno[$i] = $fila;
                $i++;
            }
            return $retorno;
        }


    }
?>