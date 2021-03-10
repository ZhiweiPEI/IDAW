<p id="CurrentTime"></p>
<script type="text/javascript">
function changTime(){
    var jour=["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche"];
    var time=document.getElementById('CurrentTime');
    var date=new Date();
    time.innerHTML=+date.toLocaleString()"
}
<?php
echo date("Y/m/d/H:i:s--e") . "<br/>";
?>

<?php
$cars=array("BWM","AUDI","BENTS");
echo "I like " . $cars[0] . ", " . $cars[1] . ", " . $cars[2] . "." . "<br/>";
?>

<?php
function helloword()
{
    echo "Hello World!!!";
}
echo "I'm using php, ";helloword() . "<br/>";
?>