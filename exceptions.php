<?php 
function divide($dividend, $divisor){
    if ($divisor == 0){
        throw new Exception("Division by zero");
    }
    else {
        return $dividend / $divisor ;
    }
}

// try {
//     echo divide(5, 1); 
// }
// catch (Exception $e){
//     echo "Unable to divide";
// }
// finally {
//     echo "<br>Process is complete";
// }

// try {
//     echo divide(5, 0);
// }
// finally {
//     echo "Process is complete";
// }

try {
    echo divide(5, 0);
}
catch (Exception $e){
//returns an $e object
    $message = $e -> getMessage();
    $code = $e -> getCode();
    $file = $e->getFile();
    $line = $e->getLine();
    echo "Exception thrown in $file on line $line: [Code $code]
    $message";
}



?>