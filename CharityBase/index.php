
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>CharityBase</title>
</head>

<body> 
	<div class="loginbox">
		<h1>CharityBase</h1>
		<form method="POST" action="index.php">
			<input type="text" name="userId" size="16"/><br />
			<input type="text" name="name" size="16"/><br />
			<input type="submit" value="Create User" name="Create"><br />
			<input type="submit" value="Login as Regular User" name="login_regular"/><br />
			<input type="submit" value="Login as Admin" name="login_admin"/><br />
		</form>
		
	</div>

</body>
</html>


<?php

include 'db.php';
if ($db_conn) {
	if (array_key_exists('Create', $_POST)) {
		$tuple = array (
			":bind1" => $_POST['userId'],
			":bind2" => $_POST['name'],
		);
		$alltuples = array (
			$tuple
		);
		executeBoundSQL("insert into person values (:bind1, :bind2)", $alltuples);
		OCICommit($db_conn);
		} else
			if (array_key_exists('login_regular', $_POST)) {
				$sql = "select * from person where userId=".strval($_POST['userId'])." and name='".strval($_POST['name'])."'";
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
					$sql = "select * from person where userId=".strval($_POST['userId'])." and name='".strval($_POST['name'])."'";
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