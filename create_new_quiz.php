<?php 
session_start();

require_once ('mysqli_connect.php');

if (isset($_POST['formName']) && ($_POST['formName']==='demographics')){	

	$insert_query = "INSERT INTO vis_participant (Age, Sex, Education, Familiar, MTurkCode) VALUES ($_POST[age], '$_POST[sex]', $_POST[education], $_POST[familiar], NEXTVAL(MTurkSeq));";
	$results = mysqli_query ($conn, $insert_query);
	if ($results){
		$id = mysqli_insert_id($conn);
		$_SESSION['participantID'] = $id;
	}

	//echo "<p>Participant ID: $_SESSION[participantID]</p>";

// all above is working fine
	
	$_SESSION['numberOfQuestions'] = 10;
	
	$sql = "SELECT questionID FROM vis_question WHERE answer IS NULL
			LIMIT $_SESSION[numberOfQuestions];";

	$results = mysqli_query ($conn, $sql);

	if ($results){
		$_SESSION['questionIDArray'] = array();
		while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
			array_push($_SESSION['questionIDArray'],$row['questionID']);
		}
		$_SESSION['currentQuestionIdx'] = 0;
		include 'question.php';
	}else{
		echo "<h1>Error Generating Questions, apologies</h1>";
	}
}

	


?> 

