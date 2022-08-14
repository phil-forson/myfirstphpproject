<?php
$array = array("Milk" => 2, "Nido"=> 3, "Gari"=> 8);

$encoded_json =  json_encode($array);

$json_obj = json_decode($encoded_json);

$json_assocarray = json_decode($encoded_json, true);

// echo $json_assocarray["Milk"];

// echo '<br>';

// echo $json_obj ->Milk;

foreach($json_obj as $key => $value){
    echo $key. " => ". $value.'<br>';
}
?>