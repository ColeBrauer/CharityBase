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
			<form method="POST" action="Charities.php">
			<p>Only display set of columns:<input type="text" name="display" size="16" placeholder="* for all or Col1,Col2,..."></p>
			<p> Select Organization filters:</p>
			<p><input type="text" name="filterType" size="16" placeholder="Column Name"><input type="text" name="operation" size="16" placeholder="=, >, <="><input type="text" name="filterOn" size="16" placeholder="'String' or #">
			<input type="submit" value="Apply" name="applyfilters"></p>
			</form>
			<?php include 'db.php';
				if (isset($_POST['ShortlistAdd'])){
					$input = $_POST['Organization_ID'];
					$sql = "INSERT INTO NPO_Shortlist(User_ID,Organization_ID) VALUES ('100001','$input')";
					if (mysqli_query($con,$sql)) {
						echo "New record created successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
				}
				if (isset($_POST['ShortlistDelete'])){
					$input = $_POST['Organization_ID'];
					$sql = "DELETE FROM NPO_Shortlist 
					WHERE Organization_ID='$input'";
					if (mysqli_query($con,$sql)) {
						echo "Record deleted successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
				}
				if (isset($_POST['reset'])){
					$input = $_POST['Organization_ID'];
					$sql = "DELETE FROM NPO_Shortlist ";
					if (mysqli_query($con,$sql)) {
						echo "Table reset successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
				}
				if (isset($_POST['applyfilters']) && $_POST['filterType'].$_POST['operation'].$_POST['filterOn'].$_POST['display'] != null){
					if ($_POST['filterType'] != null || $_POST['operation'] != null || $_POST['filterOn'] != null){
						$Orgresult = mysqli_query($con,"SELECT ".$_POST['display']." FROM Non_Profit_Organization where ".$_POST['filterType'].$_POST['operation'].$_POST['filterOn']);
					} else {
						$Orgresult = mysqli_query($con,"SELECT ".$_POST['display']." FROM Non_Profit_Organization");
					}
					display_data($Orgresult);
				} else {
					$Orgresult = mysqli_query($con,"SELECT * FROM Non_Profit_Organization");
					display_data($Orgresult);
				}
				  
				$Shortlistresult = mysqli_query($con,"SELECT * FROM NPO_Shortlist");
					display_data($Shortlistresult);
				  ?>
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

