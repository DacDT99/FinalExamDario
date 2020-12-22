<html>
<head>
<title>User Registration</title>
</head>
<body> 
<form action="registration user.php" method="post" >
<table border="0" >
<tr>
<td>Name:
</td>
</tr>
<tr>
<td>
<input type="text" name="fname"><br>
</td>
</tr>
<tr>
<td>Username:
</td>
</tr>
<tr>
<td>
<input type="text" name="username"><br>
</td>
</tr>
<tr>
<td>Password:
</td>
</tr>
<tr>
<td>
<input type="password" name="password"><br>
</td>
</tr>
<tr>
<td>City
</td>
</tr>
<tr>
<td>
<input type="radio" name="status" value="Skopje"> Skopje&nbsp;
<input type="radio" name="status" value="London"> London&nbsp;
<input type="radio" name="status" value="Rome"> Rome&nbsp;
<input type="radio" name="status" value="Paris"> Paris&nbsp;
<input type="radio" name="status" value="Berlin"> Berlin
</td>
</tr>
<tr>
<td>Type of user:
</td>
</tr>
<tr>
<td>
<input type="radio" name="status" value="free"> Free&nbsp;
<input type="radio" name="status" value="basic"> Basic&nbsp;
<input type="radio" name="status" value="premium"> Premium
</td>
</tr>
<tr>
<td>EULA
</td>
</tr>
<tr>
<td>
<input type="checkbox" >
</table>
  <input type="submit" value="Submit">
</form>
<br> 


<?php
if (isset($_POST['fname'])){ 

$hostname='localhost';
$username='root';
$password='example';
$database='test';

$fname;
$username;
$password;
$city;
$typeofuser;
$status;

	if (isset($_POST['fname'])){		
		$fname = $_POST['fname'];		
	}
	if (isset($_POST['username'])){		
		$username = $_POST['usernames'];		
	}
	if (isset($_POST['password'])){		
		$password = $_POST['password'];		
	}
	if (isset($_POST['city'])){		
		$city = $_POST['city'];		
	}	
	if (isset($_POST['typeofuser'])){		
		$status = $_POST['typeofuser'];		
	}	

	$mysqli = new mysqli($hostname, $username, $password, $database);
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
    $sql = "INSERT INTO reservation (FullName, Address, Age, Profession, rStatus) VALUES ('".$fname."','".$user."','".$password."','".$proffesion."','".$status."');";
	//echo $sql;
    
	if(mysqli_query($mysqli,$sql)){
		echo "<br>";
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
	//$mysqli->close();
	mysqli_close($mysqli);
}
?>
</body>
 </html>