<?php


$asientos = array(
    "fila1" => array(
        "as02" => "vacio",
        "as10" => "pasillo",
        "as11" => "pasillo",
        "as09" => "vacio",
    ),
    "fila2" => array(
        "as01" => "vacio",
        "as04" => "vacio",
        "as06" => "vacio",
        "as08" => "vacio",
    ),
    "fila3" => array(
        "as10" => "conductor",
        "as03" => "vacio",
        "as05" => "vacio",
        "as07" => "vacio",
    )
);






$asientos_json = json_encode($asientos);
echo $asientos_json;




?>
