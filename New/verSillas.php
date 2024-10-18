<?php


$asientos = array(
    "fila1" => array(
        "as03" => "vacio",
        "as23" => "pasillo",
        "as08" => "vacio",
        "as11" => "vacio",
        "as14" => "vacio",
        "as17" => "vacio",
        "as21" => "vacio",
        
    ),
    "fila2" => array(
        "as02" => "vacio",
        "as24" => "pasillo",
        "as25" => "pasillo",
        "as26" => "pasillo",
        "as27" => "pasillo",
        "as28" => "pasillo",
        "as20" => "vacio",
    ),
    "fila3" => array(
        "as01" => "vacio",
        "as05" => "vacio",
        "as07" => "vacio",
        "as10" => "vacio",
        "as13" => "vacio",
        "as16" => "vacio",
        "as19" => "vacio",
    ),
    "fila4" => array(
        "as00" => "conductor",
        "as04" => "vacio",
        "as06" => "vacio",
        "as09" => "vacio",
        "as12" => "vacio",
        "as15" => "vacio",
        "as18" => "vacio",
    )
);






$asientos_json = json_encode($asientos);
echo $asientos_json;




?>
