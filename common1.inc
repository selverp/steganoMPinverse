<?php
$host = 'localhost';
$db_name = 'matrices';
$db_username = 'root';
$db_password = 'pepic';

$MYSQL_ERRORNO = '';
$MYSQL_ERROR = '';

function db_connect() {
	global $host, $db_name, $db_username, $db_password;
	$db_link = mysql_connect($host, $db_username, $db_password);
	if (!$db_link) {
		$MYSQL_ERRORNO = 0;
		$MYSQL_ERROR = 'Ne moze se konektovati za mysql server!';
		return 0;
	}
	else if (!mysql_select_db($db_name, $db_link)) {
		$MYSQL_ERRORNO = mysql_errno();
		$MYSQL_ERROR = mysql_error();
		return 0;	
	}
	else {
		return $db_link;
	}
}

function sql_error() {
	global $MYSQL_ERRORNO, $MYSQL_ERROR;
	if (empty($MYSQL_ERROR)) {
		$MYSQL_ERRNO = mysql_errno();
		$MYSQL_ERROR = mysql_error();
	}
	return "$MYSQL_ERRNO: $MYSQL_ERROR";
}

?>