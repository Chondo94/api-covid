<?php

include_once'db.php';

class Paciente extends DB{

    function obtenerPaciente(){
        $query = $this->connect()->query('select * from paciente');
        return $query;
    }
}

class Municipio extends DB{

    function obtenerMunicipio(){
        $query = $this->connect()->query('select * from municipio');
        return $query;
    }
}

?>