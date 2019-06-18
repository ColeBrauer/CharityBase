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
        	<h1>Animals</h1>
			<p>Add animal to shortlist:</p>
			<p>Animal id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Organization ID</p>
			<form method="POST" action="Animals.php">
			<p><input type="text" name="Animal_ID" size="16"><input type="text" name="Organization_ID" size="16">
			<input type="submit" value="Add" name="ShortlistAdd"></p>
			</form>
			<p>Delete from Shortlist:</p>
			<p>Animal id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Organization ID</p>
			<form method="POST" action="Animals.php">
			<p><input type="text" name="Animal_ID" size="16"><input type="text" name="Organization_ID" size="16">
			<input type="submit" value="Delete" name="ShortlistDelete"></p>
			</form>
			<form method="POST" action="Animals.php">
			<input type="submit" value="reset" name="reset"></p>
			</form>
			<?php include 'db.php';
				  run_Animaltable();
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
		echo "<br> dropping table <br>";
		executePlainSQL("Drop table animal");

		echo "<br> creating new table <br>";
		executePlainSQL("create table animal (
		Animal_ID CHAR(6), 
		Organization_ID CHAR(6),
		Name VARCHAR(20),
		Age INTEGER,
		Gender CHAR(1), 
		Breed VARCHAR(20),
		Personality VARCHAR(20), 
		Health_Considerations VARCHAR(20), 
		Intake_Date DATE,
		Price REAL)");
		OCICommit($db_conn);
		
		echo "<br> dropping table <br>";
		executePlainSQL("Drop table Animal_Shortlist");

		echo "<br> creating new table <br>";
		executePlainSQL("create table Animal_Shortlist (
		User_ID CHAR(6),
		Animal_ID CHAR(6), 
		Organization_ID CHAR(6)
		)");
		OCICommit($db_conn);

	} else
		if (array_key_exists('ShortlistAdd', $_POST)) {
		$tuple = array (
			":bind1" => $_POST['Animal_ID'],
			":bind2" => $_POST['Organization_ID']
		);
		$alltuples = array (
			$tuple
		);
		executeBoundSQL("insert into Animal_Shortlist values (NULL,:bind1, :bind2)", $alltuples);
		OCICommit($db_conn);

		} else
			if (array_key_exists('ShortlistDelete', $_POST)) {
				$tuple = array (
					":bind1" => $_POST['Animal_ID'],
					":bind2" => $_POST['Organization_ID']
				);
				$alltuples = array (
					$tuple
				);
				executeBoundSQL("delete from Animal_Shortlist where Animal_ID==:bind1 AND Organization_ID==:bind2 ", $alltuples);
				OCICommit($db_conn);
	OCICommit($db_conn);
	}
	OCILogoff($db_conn);
} else {
	echo "cannot connect";
	echo htmlentities($e['message']);
}

function run_Animaltable(){
	if ($_POST && $success) {
		header("location: Animals.php");
	} else {
		$result = executePlainSQL("select * from Sheltered_Animal");
           $columnNames = array("animal id", "Org ID", "name", "Age", "Gender", "Breed", "Personality", "Health", "Since", "Price");
           printTable($result, $columnNames);
	}
	OCICommit($db_conn);
}

function run_Shortlist(){
	if ($_POST && $success) {
		header("location: Animals.php");
	} else {
		$result = executePlainSQL("select * from Animal_Shortlist");
           $columnNames = array("UserID(YOU)", "animal id", "Org ID");
           printTable($result, $columnNames);
	}
	OCICommit($db_conn);
}
?>
