<?php 
$conn_error='could not connect';
$my_host = 'localhost';
$my_user = 'root';
$my_pass= '';
$my_db='ims';

if(!mysql_connect($my_host,$my_user,$my_pass)|| !mysql_select_db($my_db))
{
	die($conn_error);
	
}

?>