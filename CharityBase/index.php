
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>CharityBase</title>
</head>

<body> 
	<div class="loginbox">
		<h1>CharityBase</h1>
		<form method="POST" action="index.php">
			<label>
				User ID: 
				<input type="text" name="userId" placeholder="input userID" size="16"/><br />
			</label>
			<label>
				Name: &nbsp;&nbsp;
				<input type="text" name="name" placeholder="input name" size="16"/><br />
			</label>
			<hr>
			<input type="submit" value="Create User" name="Create_Regular_User"><br />
			<input type="submit" value="Login as Regular User" name="login_regular"/><br />
			<input type="submit" value="Login as Admin" name="login_admin"/><br />
		</form>
		<?php 
		include 'db.php';
		if (isset($_POST['Create_Regular_User'])) {
			$userID = $_POST['userId'];
			$userName = $_POST['name'];
			$initialDonation = 0;

			$sql1 = "INSERT INTO Person(User_ID, Name)
					VALUES ('$userID', '$userName')";

			$sql2 = "INSERT INTO Regular_User(User_ID, Donation_Total)
					VALUES ('$userID', '$initialDonation')";

			if (mysqli_query($con,$sql1)) {
				echo "New Person created successfully";
			} else { echo "Error: " . $sql1 . "<br>" . mysqli_error($con);}

			if (mysqli_query($con,$sql2)) {
				echo "New Regular User created successfully";
			} else { echo "Error: " . $sql2 . "<br>" . mysqli_error($con);}
			
		} else {
			
			$userID = $_POST['userId'];
			$userName = $_POST['name'];
			$sql = "SELECT * FROM Person WHERE user_Id='$userID' AND name='$userName'";

			if (isset($_POST['login_regular'])) {
				if (mysqli_num_rows(mysqli_query($con, $sql))==1) {
					header("Location: NormalHome.html");
				} else {
					echo "Error:Wrong combo" ;
				}
			}

			if (isset($_POST['login_admin'])) {
				$sql= "SELECT * FROM Administrators WHERE User_ID='$userID'";
				if (mysqli_num_rows(mysqli_query($con, $sql))==1) {
					header("Location: AdminHome.html");
				} else {
					echo "Error: wrong ID" ;
				}
			}
		}
		?>
	</div>

</body>
</html>

