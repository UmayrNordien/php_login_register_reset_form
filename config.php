<?php
/* Database credentials. 
MySQL server, default setting (user 'root' with no password) 
*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'passwordReset');
 
/* Connect to MySQL database (PHPmyAdmin) */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check the connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>