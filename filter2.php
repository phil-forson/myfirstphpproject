<?php 
function ask($str){
    return $str." ?";
}

function exclaim($str){
    return $str . " !";
}

function printFormatted($str,$format){
    echo $format($str);
}

printFormatted("Hello World", 'ask');
printFormatted("Is this playing", 'ask');



?>