<?php
session_start();
if(isset($HTTP_SESSION_VARS["session_status"]))
{
    echo("<pre>");
    echo("User Name : <b>".$HTTP_SESSION_VARS["session_user"]."<?b><br>");
    echo("Password  : <b>".$HTTP_SESSION_VARS["session_password"]."<?b><br>");
    echo("Click <a herf=\"loggoout.php\">Loggout</a> unutuk keluar !");
    echo("<\pre>");
}else
{
    header("Location: loggin.php");
    exit;
}