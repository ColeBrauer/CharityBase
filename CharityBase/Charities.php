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
      <a href="index.php" id="logo"><span class="blue">Charity</span><span class="yellow">Base</span></a>
      <div id="navbar-left">
        <a href="NormalHome.html">About</a>
        <a href="Profile.php">Profile</a>
        <a class="active" href="Charities.php">Charities</a>
        <a href="Animals.php">Animals</a>
        <a href="Quiz.html">Quiz</a>
      </div>
    </div>
    <img src="images/lineup.png" class="center" >
	<div id="content">
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
				  $Orgresult = mysqli_query($con,"SELECT * FROM Non_Profit_Organization");
					display_data($Orgresult);
					//Display TABLES
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

