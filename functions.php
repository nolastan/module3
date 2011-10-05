<?php

function connect(){
	$sqlserver=mysql_connect('localhost','root','root');
	mysql_select_db('module3',$sqlserver);
}

?>