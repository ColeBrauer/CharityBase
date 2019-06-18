<!DOCTYPE html >
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>CharityBase</title>
</head>

<body> 
<div id="container">
	<div id="header">
				<h1><a href="index.php" style="text-decoration:none"><span class="blue">Charity</span><span class="yellow">Base</a></span></h1>
        <div id="links">
            <a href="NormalHome.html">About(Home)</a>
			<a href="Profile.php">Profile</a>
            <a href="Charities.php">Charities</a>
            <a href="Animals.php">Animals</a>
            <a href="Quiz.html">Quiz</a>           
        </div>
    </div>
	<div id="content">
	<img class="picture" src=""/>
		<div class="contenttext">
        	<h1>Charities</h1>
			<p>Add Charity to shortlist:</p>
			<p>Organization ID</p>
			<form method="POST" action="Charities.php">
			<p><input type="text" name="Organization_ID" size="16">
			<input type="submit" value="Add" name="ShortlistAdd"></p>
			</form>
			<p>Delete from Shortlist:</p>
			<p>Organization ID</p>
			<form method="POST" action="Charities.php">
			<p><input type="text" name="Organization_ID" size="16">
			<input type="submit" value="Delete" name="ShortlistDelete"></p>
			</form>
			<form method="POST" action="Charities.php">
			<input type="submit" value="reset" name="reset"></p>
			</form>
			<?php include 'db.php';
				  run_orgtable();
				  run_Shortlist();?>
        </div>
    </div>
</div>
</body>
<style>
    table {
        width: 20%;
        border: 1px solid black;
    }

    th {
        font-family: Arial, Helvetica, sans-serif;
        font-size: .7em;
        background: #666;
        color: #FFF;
        padding: 2px 6px;
        border-collapse: separate;
        border: 1px solid #000;
    }

    td {
        font-family: Arial, Helvetica, sans-serif;
        font-size: .7em;
        border: 1px solid #DDD;
        color: black;
    }
</style>
</html>


<?php


include 'db.php';
if ($db_conn) {
	if (array_key_exists('reset', $_POST)) {
		

	} else
		if (array_key_exists('ShortlistAdd', $_POST)) {
		$tuple = array (
			":bind1" => $_POST['Organization_ID']
		);
		$alltuples = array (
			$tuple
		);
		executeBoundSQL("insert into NPO_Shortlist values (999999,:bind1)", $alltuples);
		OCICommit($db_conn);

		} else
			if (array_key_exists('ShortlistDelete', $_POST)) {
				$tuple = array (
					":bind1" => $_POST['Organization_ID']
				);
				$alltuples = array (
					$tuple
				);
				executeBoundSQL("delete from NPO_Shortlist where Organization_ID==:bind1", $alltuples);
				OCICommit($db_conn);
	OCICommit($db_conn);
	}
	OCILogoff($db_conn);
} else {
	echo "cannot connect";
	echo htmlentities($e['message']);
}

function run_Orgtable(){
	if ($_POST && $success) {
		header("location: Charities.php");
	} else {
		$result = executePlainSQL("select * from Non_Profit_Organization");
           $columnNames = array("Organization id", "Name", "Focus");
           printTable($result, $columnNames);
	}
	OCICommit($db_conn);
}

function run_Shortlist(){
	if ($_POST && $success) {
		header("location: Charities.php");
	} else {
		$result = executePlainSQL("select * from NPO_Shortlist");
           $columnNames = array("UserID(YOU)",  "Org ID");
           printTable($result, $columnNames);
	}
	OCICommit($db_conn);
}
?>