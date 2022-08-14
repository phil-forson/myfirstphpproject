<?php 
session_start()
?>

<html>
    <body>
        <?php 
        $_SESSION['favfood'] = "B&T";
        $_SESSION['hobby'] = "piano";
        echo "Session variables are set";
        ?>
    </body>
</html>