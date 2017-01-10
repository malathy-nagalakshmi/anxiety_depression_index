<?php
	session_start();

	$link = mysqli_connect("localhost", "root", "qwerty123","demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/* $sql = "CREATE TABLE person(person_id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, first_name CHAR(30) NOT NULL, last_name CHAR(30) NOT NULL, email_address VARCHAR(50))";
if (mysqli_query($link, $sql)){
    echo "Table persons created successfully";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}*/
$email = mysqli_real_escape_string($link, $_POST['email']);
//$fname = mysqli_real_escape_string($link, $_POST['fname']);
//$lname = mysqli_real_escape_string($link, $_POST['lname']);
$password= mysqli_real_escape_string($link, $_POST['password1']);

$_SESSION['email']=$email;

/*$sql1 = "SELECT first_name FROM info WHERE email_address='$email'";
if($result1 = mysqli_query($link, $sql1)){
   
 $row1 = mysqli_fetch_assoc($result1);
	$fname=$row1['first_name'];
	//$lname=$row['last_name'];
   



$_SESSION['fname']="bleh";
}
//$_SESSION['lname']=$lname;

$sql2 = "SELECT last_name FROM info WHERE email_address='$email'";
if($result2 = mysqli_query($link, $sql2)){
   
 $row2 = mysqli_fetch_assoc($result2);
	$lname=$row2['last_name'];
	//$lname=$row['last_name'];
   



//$_SESSION['fname']=$fname;
$_SESSION['lname']=$lname;

}*/





		//$_SESSION['password1']=$password;





$sql = "SELECT password FROM persons WHERE email_address='$email'";
if($result = mysqli_query($link, $sql)){
   
 $row = mysqli_fetch_assoc($result);
	$pass=$row['password'];
   
echo "$pass";
echo "$password";
if("$pass"=="$password")
{

//ob_start();
	//session_start();
   // header('Location: index1.php');
   //ob_end_flush();
    //die();



$email = mysqli_real_escape_string($link, $_POST['email']);
$_SESSION['loggedin']=true;
$_SESSION['email'] = $email;
//header('Location: index1.php?email='.$email);
header('Location: index1.php?email=$email&loggedin=true');
//$url = "http://localhost/main.php?email=$email_address&event_id=$event_id";




}
else{

	//echo"invalid";
ob_start();
    header('Location: register (1).php');
    ob_end_flush();
    die();
}}

mysqli_close($link);
?>
	
