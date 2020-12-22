<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

</head>
<body>

<?php
	if (isset($_GET['session'])){
		$oper = $_GET['session']; 
		switch ($oper) {
			case "1":
			if (isset($_POST["sId"]) && !empty($_POST["sId"])) {
				$session_name = "sIndex";
				$session_value = $_POST['sId'];
				setsession($session_name, $session_value, time() + (60), "/");
		
				echo "session is set";  

				echo '<form action="session.php?session=2" method="post" >';
				echo '<button type="submit" >Delete</button>';
				echo '<a href="session.php?session=3">Read value</a><br>';				
				echo '</form>';	
			}	
			break;
			case "2":
				setsession("sIndex", "", time() - 3600);
				echo "session is deleted.";
				echo '<a href="session.php">Try again</a><br>';
			break;
			case "3":
				if(count($_session) > 0) {
					echo "sessions are enabled.<br>";
					echo "Value is: " . $_session["sIndex"];
					echo '<form action="session.php?session=2" method="post" >';
					echo '<a href="session.php">Modify</a><br>';
					echo '<button type="submit" >Delete</button>';				
					echo '</form>';	
						
				} else {
					echo "sessions are empty.<br>";
					echo '<a href="session.php">Try Again</a><br>';
				}
			break;
			default:
				setsession("sIndex", "", time() - 3600);
				echo '<form action="session.php?session=1" method="post">';
				echo 'Your ID: <input type="Text" name="sId" id="sID"> <br>';
				echo '<strong><div id="result" >&nbsp;</div></strong>';
				echo '<input type="submit" value="enter">';
				echo '</form>';
				
		}
			exit();
		}
		
	else{  
		echo '<form action="session.php?session=1" method="post">';
		echo '	Your ID: <input type="Text" name="sId" id="sID"> <br>';
		echo '<strong><div id="result" >&nbsp;</div></strong>';
		echo '<input type="submit" value="enter">';
		echo '</form>';
	}
	
?>

	
</body>
</html>