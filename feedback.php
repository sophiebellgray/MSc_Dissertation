<?php

include ('header.html');

if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
require_once ('mysqli_connect.php');
$update = "UPDATE vis_participant SET Feedback = '$_POST[feedback]' WHERE participantID = $_SESSION[participantID]";
$results = mysqli_query ($conn, $update);
//echo $update;
?>

<h3>Thank you for providing feedback.</h3>

<h3>Your MTurk Code is <?php echo $_SESSION['MTurkCode']; ?> </h3>

</body>
