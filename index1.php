<?php
	session_start();
	$_SESSION['loggedin']=true;

	$link = mysqli_connect("localhost", "root", "","demo");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "CREATE TABLE info(person_id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, first_name CHAR(30) NOT NULL, last_name CHAR(30) NOT NULL, email_address VARCHAR(50),password varchar(20))";
if (mysqli_query($link, $sql)){
    echo "Table persons created successfully";
}
$password= mysqli_real_escape_string($link, $_POST['password1']);
$email=$_SESSION['email'];
$sql = "SELECT first_name FROM info1 WHERE email_address='$email'";
if($result = mysqli_query($link, $sql)){
   
        $row = mysqli_fetch_assoc($result);
	$fname=$row['first_name'];
	$_SESSION['fname']=$fname;
}


$sql2 = "SELECT last_name FROM info WHERE email_address='$email'";
if($result2 = mysqli_query($link, $sql2)){
   
        $row2 = mysqli_fetch_assoc($result2);
	$lname=$row2['last_name'];
	$_SESSION['lname']=$lname;

}
mysqli_close($link);
?>
	
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="index.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet">    
	</head>
<body>

<ul class="nav">
  <li><a href="index1.php">Home</a></li>
  <?php
	if($_SESSION['loggedin'])
		echo "<li><a href='depression_test.php'>Test For Depression</a></li>";
	else
		echo "<li><a href= 'register (1).php'>Test For Depression</a></li>";

?>
<?php
		
if($_SESSION['loggedin'])
		echo "<li><a href='anxiety.php'>Test For Anxiety</a></li>";
	else
		echo "<li><a href= 'register (1).php'>Test For Anxiety</a></li>";
?>
  <li><a href="articles.html">GoodReads</a></li>
  <li><a href="/contact/">Contact</a></li>
  
 <?php
    if(($_SESSION['loggedin'])==true)
    {
        echo '<li><a href="profile.php">Profile</a></li>';
    }
   
?>
  <?php
    if(($_SESSION['loggedin'])==true)
    {
        echo '<li><a href="logout.php">Logout</a></li>';
    }
    else
    {
        echo '<li><a href="register (1).php">Register</a></li>';
    }
?>
</ul>
<h1>Stars can't shine without darkness. It's Okay. </h1>
<p>We all face challenges to our mental health. Depression and anxiety changes the way we think, feel and deal with tough times. Well done for taking the first step. You can follow other people’s journeys to wellness below or explore the site to find your own way to a better place.</p>



<section class="border">
    <button>Call Us</button>
    <button class="hover">E-mail Us</button>
    <button class="active">Videos</button>
</section>

<div class="Bottom_part">
	<div class=""></div>
</div>
</body>
</html>
