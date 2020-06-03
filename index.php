<?php
// por medio del index vamos a mandar a llamar o hacer que se muestres los datos.
include_once 'apiPaciente.php';

$api = new apiPaciente();

$api->getAll();

?>