<?php

include_once 'paciente.php';

class ApiPaciente{

    function getAll(){
        $paciente = new paciente();
        $pacientes = array();
        $pacientes["items"] = array();
        $municipio = new municipio();
        $pacientes = array();
        $pacientes["items"] = array();

        $respuesta = $paciente->obtenerpaciente();

        if($respuesta->rowCount()){
            while($fila = $respuesta->fetch(PDO::FETCH_ASSOC)){
                $item = array(
                    'id' => $fila['id'],
                    'dpi' => $fila['dpi'],
                    'nombre' => $fila['nombre'],
                    'apellidos' => $fila['apellidos'],
                    'nacimiento' => $fila['nacimiento'],
                    'direcion' => $fila['direcion'],
                    'estado' => $fila['estado'],
                    'municipio_id' => $fila['municipio_id'],
                    'hospital_id' => $fila['hospital_id']
                );
                // el array_push sirve para agregar un nuevo arreglo a un arreglo que ya existe.
                array_push($pacientes["items"], $item);
            }
            // este echo de json_encode es para que la funcion regrese algo, en este caso va ser
            // el arreglo de pacientes al cual ya le concatenamos o agregamos el arreglo $item.

            echo json_encode($pacientes);
            
        }else{
            echo json_encode(array('Mensaje' => 'No hay elementos registrados'));
        }
    }
}

?>