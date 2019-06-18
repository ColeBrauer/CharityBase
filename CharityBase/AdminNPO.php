<html>
<head>
<link rel="stylesheet" type="text/css" href="adminAnimalsStyle.css" />
<title>CharityBase</title>
</head>

<body> 
<div id="container">
	<div id="adminheader">
		<adminH1><a href="index.php" style="text-decoration:none"><span class="black">Charity</span><span class="white">Base</a></span></adminH1>
        <div id="subtitle"> admin </div>
		<div id="adminlinks">
            <a href="AdminHome.html">About(Home)</a>
            <a href="AdminNPO.php">Non-profit Organizations</a>
            <a href="AdminAnimals.php">Animals</a>
        </div>
    </div>
	<div id="content">
	<! <img class="picture" src="images/Happy People.jpg"/> 
		<div class="admincontenttext">
       	<h2>Add a new charity to the non-profit organization database</h2>
		</div>
        <div class="postBox">
            <div style="display: inline-block; text-align: left;">
                <form method="POST" action="AdminNPO.php">
                    <div>
                        <label>
                            Non-Profit Organziation Type:
                            <input type="radio" name="organization" value="adoption"> Animal Adoption Centre
                            <input type="radio" name="organization" value="charity"> Charity
                        </label>
                    </div>
                    <div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>
                            Number of Animals at Centre:
                            <input name="numberAnimals" type="text" placeholder="ex. 100">
                            <span class="notice">Leave input blank if the organization type is Charity</span>
                        </label>
                    </div>
                    <div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>
                            Funding:
                            <input name="funding" type="text" placeholder="ex. 100000">
                            <span class="notice">Leave input blank if the organization type is Animal Adoption Centre</span>
                        </label>
                    </div>
                    <div>
                        <label>
                            Organization ID:
                            <input name="organizationID" type="text" placeholder="input organization ID" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            Organization Name:
                            <input name="organizationName" type="text" placeholder="input organization name">
                        </label>
                    </div>
                </br>
                    <b>Contact Info</b>
                    <div>
                        <label>
                            Phone Number:
                            <input name="number" type="text" placeholder="ex. 1234567890" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            Email:
                            <input name="email" type="email" placeholder="enter a valid email">
                        </label>
                    </div>
                    <div>
                        <label>
                            Street Address:
                            <input name="address" type="text" placeholder="ex. 123 University Ave">
                        </label>
                    </div>
                    <div>
                        <label>
                            City:
                            <input name="city" type="text" placeholder="ex. Vancouver">
                        </label>
                    </div>
                    <div>
                        <label>
                            Postal Code:
                            <input name="postalCode" type="text" placeholder="ex. V0K5T5">
                        </label>
                    </div>
                    <div class="submitButton">
                        <input type="submit" value="Add to database" name="NPOSubmit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php


include 'db.php';
if ($db_conn) {
	if (array_key_exists('NPOSubmit', $_POST)) {
		$tuple = array (
			":bind1" => $_POST['organizationID'],
			":bind2" => $_POST['organizationName']
		);
		$alltuples = array (
			$tuple
		);
		$tuple2 = array (
			":bind1" => $_POST['number'],
			":bind2" => $_POST['email'],
			":bind3" => $_POST['address'],
			":bind4" => $_POST['city'],
			":bind5" => $_POST['postalCode']
		);
		$alltuples2 = array (
			$tuple2
		);
		$tuple3 = array (
			":bind1" => $_POST['organizationID'],
			":bind2" => $_POST['number']
		);
		$alltuples3 = array (
			$tuple3
		);
		executeBoundSQL("insert into Non_Profit_Organization values (:bind1, :bind2, null)", $alltuples);
		executeBoundSQL("insert into ContactInfo values (:bind1, :bind2, :bind3, :bind4, :bind5)", $alltuples2);
		executeBoundSQL("insert into NPOContactInfo values (:bind1, :bind2)", $alltuples3);
		if (isset($_POST['organization'])){
			if ($_POST['organization'] == 'adoption'){
				$tuple4 = array (
				":bind1" => $_POST['organizationID'],
				":bind2" => $_POST['numberAnimals']
				);
				$alltuples4 = array (
					$tuple4
				);
				executeBoundSQL("insert into Animal_Adoption_Center values (:bind1, :bind2)", $alltuples4);
			} else{
				$tuple4 = array (
				":bind1" => $_POST['organizationID'],
				":bind2" => $_POST['funding']
				);
				$alltuples4 = array (
					$tuple4
				);
				executeBoundSQL("insert into Charity values (:bind1, :bind2)", $alltuples4);
			}			
		}
		OCICommit($db_conn);
		}
	OCILogoff($db_conn);
} else {
	echo "cannot connect";
	echo htmlentities($e['message']);
}

?>