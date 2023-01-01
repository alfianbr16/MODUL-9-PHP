<?php
if(isset($HTTP_COOKIE_VARS["cookies no induk"]))
{
    echo("Isi data <b>".$HTTP_COOKIE_VARS["cookie_no_induk"].
    "</b><br>");
    echo("Click <a herf=\"cookie_destroy.php\">next</a>untuk menghapus id !");
}else
{
    header("Location: cookie.php");
    exit;
}
?>