<?php 
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
$page_title = 'Data Visualization Quiz';
include ('header.html');

require_once ('mysqli_connect.php');


//echo "Test 1";

//echo "Current Question index: $_SESSION[currentQuestionIdx]\n";
//echo "<p>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$questionID = $_SESSION['questionIDArray'][$_SESSION['currentQuestionIdx']];
	//check if we got here from a submitted answer
	if (isset($_POST['answer'])){
		// insert submitted answer to the database
		$update = "UPDATE vis_question SET participantID = $_SESSION[participantID], answer = '$_POST[answer]', timetaken = $_POST[timetaken] WHERE questionID = $questionID";
		//echo $update;
		//echo "<p>";
		$results = mysqli_query ($conn, $update);
		if ($results){
			$_SESSION['currentQuestionIdx'] = $_SESSION['currentQuestionIdx']+1;
		}else{
			echo "<h2> Error updating answer</h2>";
			echo "<h3> $update </h3>";
		}
	}
}

//echo count($_SESSION['questionIDArray']);
//echo "<br/>";
//echo $_SESSION['currentQuestionIdx'];


$questionorcode = 'question';

if ($_SESSION['currentQuestionIdx'] == count($_SESSION['questionIDArray'])){
	// we've run out questions, move to the MTurk Tokens
	$questionorcode = 'code';
	include('MTurk.php');
}else{
	//echo "Current Question index: $_SESSION[currentQuestionIdx]\n";
	$questionID = $_SESSION['questionIDArray'][$_SESSION['currentQuestionIdx']];
	$sql = "SELECT category, question_text, image, correct_answer FROM vis_question WHERE questionID = $questionID";
	$image = '';
	$question_type = '';
	$question = '';
	$correct_answer = '';
	$results = mysqli_query ($conn, $sql);
	if ($results){
		while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
			$question = $row['question_text'];
			$question_type = $row['category'];
			$image = $row['image'];
			$correct_answer = $row['correct_answer'];
		}
	}
}

?>

<div class="question">

<h2><?php $qnum = $_SESSION['currentQuestionIdx']+1; echo ($questionorcode=='question') ? "Question $qnum/$_SESSION[numberOfQuestions]"  : 'MTurk Code';  ?></h2>

<h3><?php echo ($questionorcode=='question') ? $question : $code; ?></h3>


<?php if ($questionorcode=='question') : ?>
	<button onclick="showVisualisation()">Reveal Visualization</button>

	<div id="vis" style="display:none">
	<img src="<?php echo $image;?>" class="center">
	<p></p>

	<form onsubmit="validateMyForm();" action="question.php" method="post" id="question">

	<label class="question"> Answer? </label><br/>
	<input type="hidden" name="formName" value="question">
	<!-- <input type="hidden" name="question" value=<?php //echo $question; ?>> -->
	<input type="hidden" name="timetaken" id="timetaken" value="">

	<input id="slideranswer" name="answer" type="range" min="1" max="100" value="50" class="slider" oninput="updateAnswerInput(this.value);" style="height:50px; width:75%">
	<br />
	<input class="answer" id="answer" type="text" name="answer" size="20" value="50" oninput="updateAnswerInput(this.value);" required />

	<div class="button">
	<input type="submit" value="Submit Answer" onclick="recordTime()">
	</div>
	
	</form>
	
<?php endif; ?>

	
</div>


 
<spacer type="vertical" height="1000px"> </spacer>

</div>
</div>

<script>

let startTime = 0;
let endTime = 0;

function showVisualisation() {
    var T = document.getElementById("vis");
    T.style.display = "inline";  // <-- Set it to block
	document.getElementById("answer").focus();
	startTime = new Date().getTime();
}

function recordTime(){
	endTime = new Date().getTime();
	var time = endTime - startTime;
	document.getElementById("timetaken").value = time;
	//alert("Time = "+time);
}

function updateAnswerInput(val) {
          document.getElementById('answer').value=val;
		  document.getElementById('slideranswer').value=val;
}


function validateMyForm()
{
	var submittedAnswer = document.getElementById('answer').value;
	var correctAnswer = "<?php echo $correct_answer; ?>";	
	if(submittedAnswer == correctAnswer){
		//alert("Correct Answer!\n You submitted "+submittedAnswer+", the correct answer is "+correctAnswer);
		return true;
	}
	alert("Incorrect Answer!\n You submitted "+submittedAnswer+", the correct answer is "+correctAnswer);
	event.preventDefault(); 
}
</script>


</body>