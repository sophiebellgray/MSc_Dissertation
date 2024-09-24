<?php 
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

require_once ('mysqli_connect.php');

$sql = "SELECT MTurkCode FROM vis_participant WHERE ParticipantID = $_SESSION[participantID]";
$code = '';
$results = mysqli_query ($conn, $sql);
if ($results){
	while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
		$code = $row['MTurkCode'];
		$_SESSION['MTurkCode'] = $code;
	}
}
?>

<h3>Thank you for taking part in our pilot quiz. We would really appreciate any feedback you had about the quiz - about how easy the questions were to understand, how easy the quiz site is to use, etc. Please leave your feedback using the box below.</h3>
<p>Make sure to note your MTurk Code before submitting your feedback</p>
<form id="feedbackform" method="post" action="feedback.php">
<label class="question">Feedback </label><br/>
<textarea name="feedback" cols="100" rows="4" form="feedbackform" placeholder="Enter text here..."></textarea>
<p></p>
<div class="button">
<input type="submit" value="Submit Feedback"/>
</div>
</form>
