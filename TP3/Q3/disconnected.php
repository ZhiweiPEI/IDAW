<?php
    echo "vous avez disconnected";
    session_start();
    unset( $_SESSION['login']);
    unset( $_SESSION['password']);
    echo '</br>';
    echo 'please re-login';
?>
<br/>
<a href="login.php">Login</a>