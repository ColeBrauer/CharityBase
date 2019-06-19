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
			<p>Only display set of columns:<input type="text" name="display" size="16" placeholder="separate with ,"></p>
			<p> Select animal filters:</p>
			<p><input type="text" name="filterType" size="16" placeholder="column"><input type="text" name="operation" size="16" placeholder="eg.=,>,<="><input type="text" name="filterOn" size="16" placeholder="add '' for strings">
			<input type="submit" value="Apply" name="applyfilters"></p>
			</form>
			<form method="POST" action="Animals.php">
			<p>Only display set of columns:<input type="text" name="display" size="16" placeholder="separate with ,"></p>
			<p> Select animal filters:</p>
			<p><input type="text" name="filterType" size="16" placeholder="column"><input type="text" name="operation" size="16" placeholder="eg.=,>,<="><input type="text" name="filterOn" size="16" placeholder="add '' for strings">
			<input type="submit" value="Apply" name="applyfilters"></p>
			</form>
			<form method="POST" action="Animals.php">
			<p> Select animal filters:</p>
			<p><input type="text" name="filterType" size="16" placeholder="column"><input type="text" name="operation" size="16" placeholder="eg.=,>,<="><input type="text" name="filterOn" size="16" placeholder="add '' for strings">
			<input type="submit" value="Apply" name="applyfilters"></p>
			</form>
			<?php include 'db.php';
				$sqlagg = "select count(*) from Sheltered_Animal";
				$aggres = mysqli_fetch_assoc(mysqli_query($con,$sqlagg));
				$sum = $aggres['count(*)'];
				echo nl2br("total number of animals in the database:'$sum'\n");
				
				$sqlnestedagg = "select count(*) from Sheltered_Animal where age > (select Avg(age) from Sheltered_Animal)";
				$nestedaggres = mysqli_fetch_assoc(mysqli_query($con,$sqlnestedagg));
				$numMale = $nestedaggres['count(*)'];
				echo nl2br("number of animals over average age:'$numMale'\n");
				
				$sqldiv = "select DISTINCT s1.Health_Considerations from Sheltered_Animal s1
							where not EXISTS
							(SELECT DISTINCT Health_Considerations from Sheltered_Animal s2 where s2.Animal_ID=s1.Animal_ID and not exists 
							((SELECT s3.Personality from Sheltered_Animal s3 where Personality = 'laidback' and s3.Animal_ID=s2.Animal_ID)))";
				$divres = mysqli_fetch_assoc(mysqli_query($con,$sqldiv));
				$div = $divres['Health_Considerations'];
				echo nl2br("health_considerations that have all laidback personalities:'$div'\n");
				
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
				if (isset($_POST['applyfilters']) && $_POST['filterType'].$_POST['operation'].$_POST['filterOn'].$_POST['display'] != null){
					if ($_POST['filterType'] != null || $_POST['operation'] != null || $_POST['filterOn'] != null){
						$Orgresult = mysqli_query($con,"SELECT ".$_POST['display']." FROM Sheltered_Animal where ".$_POST['filterType'].$_POST['operation'].$_POST['filterOn']);
					} else {
						$Orgresult = mysqli_query($con,"SELECT ".$_POST['display']." FROM Sheltered_Animal");
					}
					display_data($Orgresult);
				} else {
					$Orgresult = mysqli_query($con,"SELECT * FROM Sheltered_Animal");
					display_data($Orgresult);
				}
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


