<!DOCTYPE html>
<html lang"en">
  <head>
    <meta charset="utf-8">
    <title>CharityBase - Charities</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="style.js"></script>
  </head>
  <body>
    <div id="navbar">
      <a href="index.php" id="logo"><span class="blue">Charity</span><span class="orange">Base</span></a>
      <div id="navbar-left">
				<a href="NormalHome.html">About</a>
				<a href="Animals.php">Animals</a>
        <a class="active" href="Charities.php">Charities</a>
        <a href="Quiz.html">Quiz</a>
      </div>
    </div>
	<img src="images/lineup.png" class="center" >
	<div id="centre">
	<div id="content">
		<div class="contenttext">
        	<h1>Charities</h1>
			<p>Add Charity to shortlist:</p>
			<p>Organization ID</p>
			<form method="POST" action="Charities.php">
			<p><input type="text" name="Organization_ID" size="16">
			<button class="button2" type="submit" name="ShortlistAdd"><span>Add</span></button>
			</form>
			<p>Delete from Shortlist:</p>
			<p>Organization ID</p>
			<form method="POST" action="Charities.php">
			<p><input type="text" name="Organization_ID" size="16">
			<button class="button2" type="submit" name="ShortlistDelete"><span>Delete</span></button>
			</form>
			<form method="POST" action="Charities.php">
			<button class="button2" type="submit" name="reset"><span>Reset</span></button></br>
			</form>
			<form method="POST" action="Charities.php">
			<p>Only display set of columns:<input type="text" name="display" size="16" placeholder="* for all or Col1,Col2,..."></p>
			<p> Select Organization filters:</p>
			<p><input type="text" name="filterType" size="16" placeholder="Column Name"><input type="text" name="operation" size="16" placeholder="=, >, <="><input type="text" name="filterOn" size="16" placeholder="'String' or #">
			<button class="button2" type="submit" name="applyfilters"><span>Apply</span></button>
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
			</div>
</body>
</html>
