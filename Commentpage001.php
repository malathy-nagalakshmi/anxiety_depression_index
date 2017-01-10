<html>
<head>
	<style>
		body{
			background-color:#fff;
			}
		#div1	{
			background-color:#d9d9d9;
			width:50%;
			font-size:25pt;
			color:#262626;
			border:4px solid #404040;
			padding:5px 10px;
			text-align:center;
			display:block;
			margin-left:25%;
			overflow-y: scroll;

		}
		#p1	{
			font-size:20pt;
			color:#737373;
			display:block;
			margin-left:75px;
		}
		
body {margin:0;}
p.class1 {
font-family: "Rockwell";
font-variant: small-caps;
font-style: oblique
}
h1.class2{
border-left: 8px solid grey;
color:Crimson;
text-align:center;
font-family: "Rockwell";
font-variant: small-caps;
}
input,textarea{
width:350px;
height:25px;
box-sizing:border;
}
div.class7{ font-size:20px;font-style: oblique;}
input:hover{background:white;color:black;border:black;}
input:focus{background:white;color:black;}
ul {
list-style-type: none;
margin: 0;
oveflow:active
width: 180%;
}
li {
float: left;
}
div.back{ background-color: #000;}
li a {
display: block;
color: white;
text-align: center;
padding: 8px 2px;
text-decoration: none;
}
li a:hover:not(.active) {
background-color: #f00;
}
li a{
font-variant: small-caps;
padding:18px;
width:200px;
}
label{
font-variant: small-caps;
font-size: 17;}
h4{
font-variant: small-caps;}
h3{
font-variant: small-caps;}
		
		
	</style>
</head>
<body>

<link rel="stylesheet" type="text/css" href="signin.css">
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="menuBar">
<div class="back">
<ul>
<li><a href="welcome.php">My Information</a></li>
  <li><a href="search1.php">Search Donor</a></li>
  <li><a href="hospital1.html">Nearby Hospitals</a></li>
  <li><a href="">Submit Review</a></li>
	 <li><a href="logout.php">Logout</a></li>
</ul>
<br/><br/><br/>
</div>
</div>
<br/>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "blood_donation";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT Name1, Comments1 FROM UserComments1";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
		
			echo "<div id='div1'>";
			echo "<br>'".$row["Comments1"]."'<br>";
			echo "<p id='p1'>-<em>".$row["Name1"]."</em></p>";
			
			echo "</div>";
			echo "<br>";
			//$name123=$row[Name1];
			//$c123=$row[Comments1];
		}
	} else {
		echo "0 results";
	}

mysqli_close($conn);
?> 

</body>
</html>


