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
            <p>This section is all about animals.</p>
			<p>adding a new animal:</p>
			<p>animal id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; breed</p>
			<form method="POST" action="Animals.php">
			<p><input type="text" name="aid" size="16"><input type="text" name="aName" size="16"><input type="text" name="aBreed" size="16">  
			<input type="submit" value="Add" name="addsubmit"></p>
			</form>
			<p>Deleting an animal:</p>
			<p>animal id</p>
			<form method="POST" action="Animals.php">
			<p><input type="text" name="AId" size="16">
			<input type="submit" value="Delete" name="deletesubmit"></p>
			</form>
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
		executePlainSQL("create table animal (aid number, aName varchar2(30), aBreed varchar2(30), primary key (aid))");
		OCICommit($db_conn);

	} else
		if (array_key_exists('addsubmit', $_POST)) {
		$tuple = array (
			":bind1" => $_POST['aid'],
			":bind2" => $_POST['aName'],
			":bind3" => $_POST['aBreed']
		);
		$alltuples = array (
			$tuple
		);
		executeBoundSQL("insert into animal values (:bind1, :bind2, :bind3)", $alltuples);
		OCICommit($db_conn);

		} else
			if (array_key_exists('deletesubmit', $_POST)) {
				$tuple = array (
					":bind1" => $_POST['AId']
				);
				$alltuples = array (
					$tuple
				);
				executeBoundSQL("delete from animal where aid=:bind1", $alltuples);
				OCICommit($db_conn);
	OCICommit($db_conn);
	}

	if ($_POST && $success) {
		header("location: Animals.php");
	} else {
		$result = executePlainSQL("select * from animal");
           $columnNames = array("animal id", "animal name", "animal breed");
           printTable($result, $columnNames);
	}

	OCILogoff($db_conn);
} else {
	echo "cannot connect";
	echo htmlentities($e['message']);
}

?>
