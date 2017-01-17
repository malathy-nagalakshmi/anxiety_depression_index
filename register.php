<?php
	session_start();

	$link = mysqli_connect("localhost", "root", "qwerty123","demo");
 
 $sql = "CREATE TABLE person(person_id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, first_name CHAR(30) NOT NULL, last_name CHAR(30) NOT NULL, email_address VARCHAR(50))";
if (mysqli_query($link, $sql)){
    echo "Table persons created successfully";
} 
$email = mysqli_real_escape_string($link, $_POST['email']);
$password= mysqli_real_escape_string($link, $_POST['password1']);
$_SESSION['email']=$email;
$sql = "SELECT password FROM persons WHERE email_address='$email'";
if($result = mysqli_query($link, $sql)){
   
 $row = mysqli_fetch_assoc($result);
	$pass=$row['password'];
   
echo "$pass";
echo "$password";
if("$pass"=="$password")
{
	$email = mysqli_real_escape_string($link, $_POST['email']);
$_SESSION['loggedin']=true;
$_SESSION['email'] = $email;
header('Location: index1.php?email=$email&loggedin=true');
}
else{
ob_start();
    header('Location: register (1).php');
    ob_end_flush();
    die();
}}

mysqli_close($link);
?>
	
