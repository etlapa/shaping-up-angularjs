<?php

sleep(3);

header('Content-Type: application/json');

$arreglo = array();

for($i=0;$i<10;$i++){
    $element = new stdClass();
    $element->name = "Name ".$i;
    $element->balance = $i;
    $arreglo[] = $element;
}

echo json_encode($arreglo);

?>