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
        	<?php
			

include 'db.php';

$result = mysqli_query($con,"SELECT * FROM Non_Profit_Organization");
display_data($result);

$test= 'hello' ;

$sql = "INSERT INTO NPO_Shortlist(Organization_ID, User_ID)
VALUES ('300007','100001' )";

if (mysqli_query($con, $sql)) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


/*
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Focus</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Organization_ID'] . "</td>";
echo "<td>" . $row['Organization_Name'] . "</td>";
echo "<td>" . $row['Focus'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);

			

		include 'db.php';
		if ($db_conn) {
			$sql="
			SELECT P.Name, avg(sumprice) 
			FROM Sheltered_Animal A, Person P
			WHERE U.User_ID == S.User_ID And A.Animal_ID==S.Animal_ID"; 
		$result = executeBoundSQL($sql);
		echo "If you were to adopt all your favorite/shortlisted critters, it would cost you: ";
		echo [$result];
			OCILogoff($db_conn);
		} else {
			echo "cannot connect";
		}*/

?>
</div>
    </div>
</div>
</body>
</html>
