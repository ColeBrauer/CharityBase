
<html>
<head>
<link rel="stylesheet" type="text/css" href="indexStyle.css" />
<title>CharityBase - Login</title>
</head>

<body>
	<div class="loginbox"><span class="index">
		<h1><span class="blue">Charity</span><span class="orange">Base</span></h1>
		<form method="POST" action="index.php">
			<label>
				<h3>User ID: 
				<input type="text" name="userId" placeholder="input userID" size="16"/><br /></h3>
			</label>
			<label>
				<h3>Name: &nbsp;&nbsp;
				<input type="text" name="name" placeholder="input name" size="16"/><br /></h3>
			</label>
			<hr>
			<input type="submit" value="Create User" name="Create_Regular_User"><br />
			<input type="submit" value="Login as Regular User" name="login_regular"/><br />
			<input type="submit" value="Login as Admin" name="login_admin"/><br />
        </form>
		</span>
	</div>

</body>
</html>



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
				if (mysqli_query($con, $sql)) {
					header("Location: NormalHome.html");
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}

			if (isset($_POST['login_admin'])) {
				if (mysqli_query($con, $sql)) {
					header("Location: AdminHome.html");
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
		}
		?>
	</div>

</body>
</html>

