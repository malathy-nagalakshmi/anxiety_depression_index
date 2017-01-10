<?php
session_start();
$_SESSION['loggedin']=true;
?>
<head>
<link rel="stylesheet" type="text/css" href="anxiety_results.css">
<script type="text/javascript" href="anxiety_results_js.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet"> 
</head>

<?php

    $answer_1=$_POST['first'];
	evaluate($answer_1);
	$answer_2=$_POST['second'];
	$answer_3=$_POST['third'];
 	$answer_4=$_POST['fourth'];
	$answer_5=$_POST['fifth'];
	$answer_6=$_POST['sixth'];
	$answer_7=$_POST['seventh'];
	$sum=evaluate($answer_2);
	$sum=evaluate($answer_3);
	$sum=evaluate($answer_4);
	$sum=evaluate($answer_5);
	$sum=evaluate($answer_6);
	$sum=evaluate($answer_7);
	$a=0;
	$b=0;
	$c=0;
	$d=0;
	

function evaluate($answer)
{
static $a,$b,$c,$d;
	switch($answer)
	{
		case 1:$a=$a+1;
			break;
		case 2:$b=$b+2;
			break;
		case 3:$c=$c+3;
			break;
		case 4:$d=$d+4;
			break;
	}
return $a+$b+$c+$d;
	
}



$link = mysqli_connect("localhost", "root", "qwerty123","demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

//extract($_POST);
//$sql="select first_name,last_name from info";
//$result=mysqli_query($link,$sql);
//$fname = mysqli_real_escape_string($link, $_POST['fname']);
//$lname = mysqli_real_escape_string($link, $_POST['lname']);
//echo'value='. $_SESSION['fname'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$sql = "UPDATE persons SET score='$sum' WHERE first_name='$fname' AND last_name='$lname'";
/*if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}*/






















printf("<h1>Thank you %s %s for taking sometime out for yourself \n Your Score is %d out of 28</h1>",$fname,$lname,$sum);

if($sum>21)
	printf("<p>Your score falls into the high range - anxiety has probably gotten in the way of you going to work, meeting friends, or doing the stuff that matters to you. This isn’t a diagnosis but it looks like it’s time to get help.</p>");
else if($sum>14)
	printf("<p>Your score suggests that anxiety has started to get in the way of how you live your daily life. Don’t be alarmed, this is very common and there are things you can do to improve your situation. There are different levels of anxiety and yours can change from day to day. But it’s important to seek help early. The sooner you talk to someone, the sooner you’ll be on the road to recovery.</p>");
else if($sum>7)
	printf("<p>Your score shows you have some mild signs of anxiety. Maybe you’re in the middle of a stressful time, and your mind is responding to this. Chances are your anxiety will improve as time goes on, but it might be worth keeping an eye on how the anxiety’s impacting on your life.</p>");
else
	printf("<p>Your score falls into the low range. Some anxiety can be good – it can help us react to potential threats, perhaps by quickening our reflexes or focusing our attention, and it usually passes once the stressful situation has passed. Even though you might be feeling awful it looks like you’re having a normal reaction to a tough situation. You can do some things to help yourself feel a bit better.</p>");


?>


