<?php
// on simule une base de données
$users = array(
// login => password
'riri' => 'fifi', 'yoda' => 'maitrejedi' );
$login = "anonymous";
$errorText = "";
$successfullyLogged = false;
if(isset($_GET['login']) && isset($_GET['password'])) {
$tryLogin=$_GET['login'];
$tryPwd=$_GET['password'];
// si login existe et password correspond
if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
$successfullyLogged = true;
$login = $tryLogin; } else
$errorText = "Erreur de login/password"; } else
$errorText = "Merci d'utiliser le formulaire de login";
if(!$successfullyLogged) {
echo $errorText; } else {
echo "<h1>Bienvenu ".$login."</h1>"; }
echo "<a href=selfInfo.php>Self Info</a>";
echo "</br>";
echo "<a href=currentAccount.php>Current Account</a>";
?>

<?php
session_start();
$_SESSION['login'] =$_GET['login'];
$_SESSION['password']   = $_GET['password'];
echo "</br>";
echo '<a href="disconnected.php">disconnected</a>';
?>