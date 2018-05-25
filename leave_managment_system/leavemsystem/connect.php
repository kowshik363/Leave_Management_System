<?php
$connection=mysql_connect("localhost","root","");
$db=mysql_select_db("leave_management",$connection);

if(!$connection)
{

die('could not connect :'.mysql_error);

}


?>