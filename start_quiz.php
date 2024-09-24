<?php 
session_start();

$page_title = 'Demographics Question';
include ('header.html');
?>

<h2>Demographic Questions</h2>

<p>Please answer all of the following questions.</p>

<form id="demographics" method="post" action="create_new_quiz.php">
<input type="hidden" name="formName" value="demographics"/>
<label class="question">What is Your Age? </label><br/>
<input class = "age" id="age" type="number" min="1" max="120" name="age" placeholder="Age (in years)" size="10" required /><br/><br/>

<label class="question">Which of the following best describes you?</label><br/>
<select class="form-control dropdown" name="sex" required>
	<option value="" selected="selected" disabled>-- select one --</option>
	<option value="1">Male</option>
	<option value="2">Female</option>
	<option value="3">Non-binary</option>
	<option value="4">Other</option>
</select><br/><br/>


<label class="question">What is the highest degree or level of school you have completed?</label><br/>
<select class="form-control dropdown" name="education" required>
	<option value="" selected="selected" disabled>-- select one --</option>
	<option value="1">No schooling completed</option>
	<option value="2">High School</option>
	<option value="3">GCSEs Only</option>
	<option value="4">Further Education (A Level, BTEC)</option>
	<option value="5">Higher Education (HND, Foundation Degree)</option>
	<option value="6">Bachelor's Degree (BSc, BA)</option>
	<option value="7">Master's Degree (MSc, MBA, MA)</option>
	<option value="8">1 or more years of university, no degree</option>
	<option value="9">Professional Degree beyond Bachelor's Degree (LLB, MD)</option>
	<option value="10">Doctorate Degree (PhD, EdD)</option>
</select><br/><br/>

<label class="question">How familiar are you with numbers presented in tables and charts?</label><br />
<input class="familiar" name="familiar" type="radio" checked="checked" value="0" /> <label> Not Familiar At All </label>
<input class="familiar" name="familiar" type="radio" value="1"/> <label> Somewhat Familiar </label>
<input class="familiar" name="familiar" type="radio" value="2"/> <label> Very Familiar </label></br><br/>


<div class="button">
<input type="submit" value="Start Quiz"/>
</div>

</form>

<script>
function checkRadio(){
  document.getElementById('sex3').checked = "true";
  }
</script>


</div>
</body>