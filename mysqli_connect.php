<?php 
// mudfoot (MySQL) login details removed for privacy
DEFINE ('DB_USER', ''); 
DEFINE ('DB_PASSWORD', ''); 
DEFINE ('DB_HOST', ');
DEFINE ('DB_PORT', );
DEFINE ('DB_NAME', ''); 

$conn = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
mysqli_set_charset($conn,"utf8");

?>
