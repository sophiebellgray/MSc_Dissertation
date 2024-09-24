<?php
session_start();
$page_title = 'Data Visualization Quiz';
include ('header.html');
?>

<h2>Welcome to our Data Visualization Quiz</h2>

<p>The aim of this quiz is to gather empirical evidence to test a small number of hypotheses in the field of data visualization. Thank you for taking part. Please note the following important points:</br>

<li>The quiz contains a set of simple questions which, if answered properly, should take around 10 minutes.</li>
<li>Each question will display on its own page. At first you will see the question but no visualisation (table, bar chart etc). You will have to press a button to reveal the visualisation and the answer box. Please do not click the "reveal" button until after you have read the question, otherwise our timing results will be affected.</li>
<li><b>DO NOT</b> press the back button at any point during the quiz as this will reset your progress.</li>
<li>Please pay close attention to each question until the quiz is finished. <b>ALL</b> questions must be answered in a reasonable time.</li>
<li>The first question of the quiz will ask for some demographic information (Age, Sex, Education Level, Familiarity with Charts) and by taking the quiz you agree to provide this information. We will not capture or store any personally identifiable information.</li>

<p>For MTurk Participants:</p>
<li> The MTurk quiz completion code will be presented on the final page</li>
<li> HIT is limited to 25 minutes.</li>
<li> if any question is answered too slowly (based on our pilot studies) you will not be given the MTurk quiz completion code at the end.</li>


<p>The screenshot below shows how a typical question might look</p>
<img src="images/example.png" class="center">
<p></p>

<div class="button">
<a href="start_quiz.php">Start Quiz</a>
</div>

<spacer type="vertical" height="1000px"> </spacer>

</div>


</body>
