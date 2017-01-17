<?php
	session_start();
        $answer_1=$_POST['first'];
	evaluate($answer_1);
	$answer_2=$_POST['second'];
 $answer_3=$_POST['third'];
 $answer_4=$_POST['fourth'];
 $answer_5=$_POST['fifth'];
 $answer_6=$_POST['sixth'];
 $answer_7=$_POST['seventh'];
 $answer_8=$_POST['eight'];
 $answer_9=$_POST['ninth'];
$sum=evaluate($answer_2);
$sum=evaluate($answer_3);
$sum=evaluate($answer_4);
$sum=evaluate($answer_5);
$sum=evaluate($answer_6);
$sum=evaluate($answer_7);
$sum=evaluate($answer_8);
$sum=evaluate($answer_9);
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
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$sql = "UPDATE persons SET score1='$sum' WHERE first_name='$fname' AND last_name='$lname'";

printf("<h1>Thank you %s %s for taking sometime out for yourselfYour Score is %d out of 36<h1>",$fname,$lname,$sum);

if($sum>27)
	printf("<h1>If you’re having thoughts most days about hurting or killing yourself please reach out straight away and talk to someone who’s trained to help. Even if you feel like no-one in the world gets you right now, there are people who can support you. These thoughts are common in depression </h1>");
else if($sum>18)
	printf("<h1>If you’re having thoughts most days about hurting or killing yourself please reach out straight away and talk to someone who’s trained to help. Even if you feel like no-one in the world gets you right now, there are people who can support you. These thoughts are common in depression</h1>");
else if($sum>9)
	printf("<h1>If you’re having thoughts most days about hurting or killing yourself please reach out straight away and talk to someone who’s trained to help. Even if you feel like no-one in the world gets you right now, there are people who can support you. These thoughts are common in depression </h1>");
else 
	printf("<h1>Thanks for taking time to complete the questions. While you might be feeling down right now, you’re not showing signs of depression. Those low feelings should go away as the problem passes </h1>");

$link = mysqli_connect("localhost", "root", "qwerty123","demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());


?>

<html>
<head>
<title>depression test</title>
<link rel="stylesheet" href="depression.css"/>
</head>
<body>
</body>
</html>
