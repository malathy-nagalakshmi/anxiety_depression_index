<?php
	session_start();
?>

<!doctype html>
<html>
	<head>
		<title>Profile</title>
	</head>
</html>
<body>
	<?php
		$link = mysqli_connect("localhost", "root", "qwerty123","demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$email=$_SESSION['email'];
$sql = "SELECT * FROM persons WHERE email_address='$email'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email_address</th>";
		echo "<th> score for depression test</th>";
		echo "<th>score for anxiety test </th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email_address'] . "</td>";
		echo "<td>".$row['score']."</td>";
		echo "<td>".$row['score1']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
		<link rel="stylesheet" href="profile.css">
	</head>

<body>

</body>
</html>
