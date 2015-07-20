<?php
$dbh = 'null';
function dbconn()
{
	global $dbh;
	try
	{
		$host= $_SERVER['HTTP_HOST'];
		$dbname="baby_ruzzle";
		$user="";
		$pass="";
		$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
				
	} 
	catch (PDOException $e) 
	{	print "Error!: " . $e->getMessage() . "<br/>";	}
}