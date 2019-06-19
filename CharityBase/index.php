
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
/*
			if (isset($_POST['login_regular'])) {
				if (mysqli_query($con, $sql)) {
					header("Location: NormalHome.html");
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}

			if (isset($_POST['login_admin'])) {\
				if (mysqli_query($con, $sql)) {
					header("Location: AdminHome.html");
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}*/
		}
		?>
	</div>

</body>
</html>


<?php
include 'db.php';
if ($db_conn) {
	if (array_key_exists('Create_Regular_User', $_POST)) {
		$tuple = array (
			":bind1" => $_POST['userId'],
			":bind2" => $_POST['name'],
		);
		$alltuples = array (
			$tuple
		);
		executeBoundSQL("insert into person values (:bind1, :bind2)", $alltuples);
		$tuple = array (
			":bind1" => $_POST['userId'],
			":bind2" => 0,
		);
		$alltuples = array (
			$tuple
		);
		executeBoundSQL("insert into Regular_User values (:bind1, :bind2)", $alltuples);
		OCICommit($db_conn);
		} else
			if (array_key_exists('login_regular', $_POST)) {
				$sql = "select * from person where user_Id=".strval($_POST['userId'])." and name='".strval($_POST['name'])."'";
				$result = oci_parse($db_conn, $sql);
				oci_execute($result);
				$num = oci_fetch_all($result, $res);
				echo $num." Rows";
				if ($num == 1){
					header("Location: NormalHome.html");
				} else {
					header("Location: index.php");
				}				
				OCICommit($db_conn);
			} else
				if (array_key_exists('login_admin', $_POST)) {
					$sql = "select * from person where user_Id=".strval($_POST['userId'])." and name='".strval($_POST['name'])."'";
					$result = oci_parse($db_conn, $sql);
					oci_execute($result);
					$num = oci_fetch_all($result, $res);
					echo $num." Rows";
					if ($num == 1){
						header("Location: AdminHome.html");
					} else {
						header("Location: index.php");
					}				
					OCICommit($db_conn);
			}
	OCILogoff($db_conn);
} else {
	echo "cannot connect";
	echo htmlentities($e['message']);
}
?>