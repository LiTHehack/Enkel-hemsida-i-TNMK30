<?php 
	$connect = mysql_connect('localhost', 'root', 'root');

	if($connect)
	{
		mysql_select_db('lithehack');
	}
?>