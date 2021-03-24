<?php
session_start();
$_SESSION['login'];
$_SESSION['password'];
echo "<h1>Bienvenue!!! " . $__SESSION['login'] . "</h1>";
?>
<p><strong>Voici votre information personnelle:</strong></p><br/>
<h3>Age: 23</h3>
<h3>...</h3>
<a href=selfInfo.php>Self Info</a><br/>
<a href=currentAccount.php>Current Account</a><br/>
<a href="disconnected.php">disconnected</a>