<?php 
session_start()
?>
<html>
    <body>
        <?php 
        // echo "My favorite food is ". $_SESSION['favfood'];
        // echo "And my hobby is ". $_SESSION['hobby'];
        //modify session
        $_SESSION['favfood'] = "B&T";
        //Show all sessions
        print_r($_SESSION);
        //remove all the variables
        session_unset();
        print_r($_SESSION);
        ?>
    </body>
</html>