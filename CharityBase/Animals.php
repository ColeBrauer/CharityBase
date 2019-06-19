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
			<p>UserID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Animal id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Organization ID</p>
			<form method="POST" action="Animals.php">
			<p><input type "text" name="userid" size="16"><input type="text" name="Animal_ID" size="16"><input type="text" name="Organization_ID" size="16">
			<input type="submit" value="Add" name="ShortlistAdd"></p>
			</form>
			<p>Delete from Shortlist:</p>
			<p>UserID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Animal id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Organization ID</p>
			<form method="POST" action="Animals.php">
			<p><input type "text" name="userid" size="16"><input type="text" name="Animal_ID" size="16"><input type="text" name="Organization_ID" size="16">
			<input type="submit" value="Delete" name="ShortlistDelete"></p>
			</form>
			<p>Animals available for adoption:</p>
			<?php include 'db.php';
				  run_Animaltable();?>
			<p>Animals shortlist:</p>			
			<?php run_Shortlist();?>
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
if ($db_conn) {
	if (array_key_exists('ShortlistAdd', $_POST)) {
		$tuple = array (
			":bind1" => $_POST['userid'],
			":bind2" => $_POST['Animal_ID'],
			":bind3" => $_POST['Organization_ID']
		);
		$alltuples = array (
			$tuple
		);
		executeBoundSQL("insert into Animal_Shortlist values (:bind1, :bind2, :bind3)", $alltuples);
		OCICommit($db_conn);

		} else
			if (array_key_exists('ShortlistDelete', $_POST)) {
				$tuple = array (
					":bind1" => $_POST['userid'],
					":bind2" => $_POST['Animal_ID'],
					":bind3" => $_POST['Organization_ID']
				);
				$alltuples = array (
					$tuple
				);
				executeBoundSQL("delete from Animal_Shortlist where User_ID=:bind1 AND Animal_ID=:bind2 AND Organization_ID=:bind3", $alltuples);
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
}

function run_Shortlist(){
	if ($_POST && $success) {
		header("location: Animals.php");
	} else {
		$result = executePlainSQL("select * from Animal_Shortlist");
           $columnNames = array("UserID(YOU)", "animal id", "Org ID");
           printTable($result, $columnNames);
	}
}
?>
