 <?php
    //header("content-type:text/html;charset=UTF-8");
    //date_default_timezone_set("PRC");
    echo '<div id="time"></div>
    <script type="text/javascript">
        var jours = new Array("dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi");

        function get_obj(time){
            return document.getElementById(time);
        }
        var ts='.(round(microtime(true)*1000)).';

        function getTime(){
            var t=new Date(ts);
            with(t){
                var _time=""+getFullYear()+"-" + (getMonth()+1)+"-"+getDate()+" " + (getHours()<10 ? "0" :"") + getHours() + ":" + (getMinutes()<10 ? "0" :"") + getMinutes() + ":" + (getSeconds()<10 ? "0" :"") + getSeconds() + " " + jours[t.getDay()];
            }
            get_obj("time").innerHTML=_time;
            setTimeout("getTime()",1000);
            ts+=1000;
        }
        getTime();
    </script>';
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