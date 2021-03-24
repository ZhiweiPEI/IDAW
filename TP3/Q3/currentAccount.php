<?php
session_start();
$_SESSION['login'];
$_SESSION['password'];
echo "<h1>Bienvenue!!! " . $__SESSION['login'] . "</h1>";
?>
<p><strong>Voici votre Compte Actuel:</strong></p><br/>
<h3>Compte Numéro: 666</h3>
<h3>Vous avez 999 euros</h3>
<h3>...</h3>
<a href=selfInfo.php>Self Info</a><br/>
<a href=currentAccount.php>Current Account</a><br/>
<a href="disconnected.php">disconnected</a>