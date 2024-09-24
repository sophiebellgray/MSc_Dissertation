<?php 
// mudfoot (MySQL) login details
DEFINE ('DB_USER', 'bellsoph'); 
DEFINE ('DB_PASSWORD', 'Exlertha8'); 
DEFINE ('DB_HOST', 'mudfoot.doc.stu.mmu.ac.uk');
DEFINE ('DB_PORT', 6306);
DEFINE ('DB_NAME', 'bellsoph'); 

$conn = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
mysqli_set_charset($conn,"utf8");

?>
