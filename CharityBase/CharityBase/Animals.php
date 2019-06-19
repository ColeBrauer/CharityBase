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
			<p><input type="text" name="AnimalDelete" size="16"><input type="text" name="OrganizationDelete" size="16">
			<input type="submit" value="Delete" name="ShortlistDelete"></p>
			</form>
			<form method="POST" action="Animals.php">
			<input type="submit" value="reset" name="reset"></p>
			</form>
			<?php include 'db.php';
				if (isset($_POST['ShortlistAdd'])){
					$AnimalInput = $_POST['Animal_ID'];
					$OrgInput = $_POST['Organization_ID'];
					$sql = "INSERT INTO Animal_Shortlist(User_ID, Animal_ID, Organization_ID) VALUES ('100001','$AnimalInput','$OrgInput')";
					if (mysqli_query($con,$sql)) {
						echo "New record created successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
				}
				if (isset($_POST['ShortlistDelete'])){
					$AnimalInput = $_POST['AnimalDelete'];
					$OrgInput = $_POST['OrganizationDelete'];
					$sql = "DELETE FROM Animal_Shortlist
					WHERE( 
					User_ID='100001' AND Animal_ID='$AnimalInput' AND Organization_ID='$OrgInput')";
					if (mysqli_query($con,$sql)) {
						echo "Record deleted successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
				}
				if (isset($_POST['reset'])){
					$input = $_POST['reset'];
					$sql = "DELETE FROM NPO_Shortlist ";
					if (mysqli_query($con,$sql)) {
						echo "Table reset successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
				}
				  $Orgresult = mysqli_query($con,"SELECT * FROM Sheltered_Animal");
					display_data($Orgresult);
					//Display TABLES
				$Shortlistresult = mysqli_query($con,"SELECT * FROM Animal_Shortlist");
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

