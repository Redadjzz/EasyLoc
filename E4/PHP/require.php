<?php


function base_connection() : void
{
	$serverName="localhost";
	$user="Easyloc_user";
	$password="pass123";
	$database="Easyloc";
	$bdd = new PDO("mysql:host=$serverName;dbname=$database;charset=utf8", $user, $password);

	return $bdd ;
} 

function init_php_session() :bool{
=======
function init_php_session() : bool
{
>>>>>>> main
	if(!session_id())
	{
		session_start();
		session_regenerate_id();
		return true ; 
	}

	return false ; 
}



function clean_php_session(): void 
{
	session_unset();
	session_destroy();
}

function is_connect (): bool 
{

}


function is_admin(): bool
{
	//si user_rang = 1 alors user is admin 
	// sinon user 
}

?>