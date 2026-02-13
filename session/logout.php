<?php
session_start();
session_unset();
if(session_destroy()){
    echo "loged out <br><a href='login.php'></a>";
}

?>