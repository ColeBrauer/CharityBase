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
    <div id="content animalRow">
    <! <img class="picture" src="images/Happy People.jpg"/> 
        <div class="animalColumn">
            <div class="postBox">
                <div style="display: inline-block; text-align: left;">
                    <div class="admincontenttext">
                        <h2>Add a new charity to the non-profit organization database</h2>
                    </div>
                    <form method="POST" action="AdminNPO.php">
                        <div>
                            <label>
                                Non-Profit Organziation Type:
                                <input type="radio" name="adoption" value="adoption"> Animal Adoption Centre
                                <input type="radio" name="charity" value="charity"> Charity
                            </label>
                        </div>
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                Number of Animals at Centre:
                                <input name="numberAnimals" type="text" placeholder="ex. 100">
                                <span class="notice">Leave blank if type = Charity</span>
                            </label>
                        </div>
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                Funding:
                                <input name="funding" type="text" placeholder="ex. 100000">
                                <span class="notice">Leave blank if type = Animal Adoption Centre</span>
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
						<div>
                            <label>
                                Organization Focus:
                                <input name="Focus" type="text" placeholder="input organization focus">
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
                            <input type="submit" value="Add to database" name="AddNPOSubmit">
                        </div>
                    </form>
                </div>
                <hr>
                <div class="admincontenttext">
                    <h2>Delete charity from the non-profit organization database</h2>
                </div>
                <div style="display: inline-block; text-align: left;">
                    <form method="POST" action="AdminNPO.php">
                        <div>
                            <label>
                                Organization ID:
                                <input name="deleteOrgID" type="text" placeholder="input Organization ID">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </label>
                        </div>
                        <div class="submitButton">
                            <input type="submit" value="Delete from database" name="deleteOrgSubmit">
                        </div>
                    </form>
                </div>
                <hr>
                <div class="admincontenttext">
                    <h2>Update funding to charities</h2>
                </div>
                <div style="display: inline-block; text-align: left;">
                    <form method="POST" action="AdminNPO.php">
                        <div>
                            <label>
                                Organization ID:
                                <input name="UpdateOrganization_ID" type="text" placeholder="input Organization ID">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </label>
                        </div>
                        <div>
                            <label>
                                Add to funding:
                                <input name="addFunding" type="text" placeholder="ex. 123.99">
                            </label>
                        </div>
                        <div>
                            <label>
                                Subtract from funding:
                                <input name="subtractFunding" type="text" placeholder="ex. 123.99">
                            </label>
                        </div>
                        <div class="submitButton">
                            <input type="submit" value="Update funding" name="updateFundingSubmit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="animalColumn">
            <div class="postBox">
                <div style="display: inline-block; text-align: left;">
				<div class="submitButton">
				 <h2>Non-Profit Organization</h2>
				<form method="POST" action="AdminNPO.php">
				<input type="submit" value="Join Tables" name="Join" action="AdminNPO.php">
				</p>
			</form>
			
			
                    <?php  include 'db.php';
					
					if (isset($_POST['AddNPOSubmit'])){
						$OrgID=$_POST['organizationID'];
						$name=$_POST['organizationName'];
						$number=$_POST['number'];
						$email=$_POST['email'];
						$address=$_POST['address'];
						$city=$_POST['city'];
						$pcod=$_POST['postalCode'];
						$focus=$_POST['Focus'];
						
						$sql1 = "INSERT INTO Non_Profit_Organization(Organization_ID,Organization_Name,Focus)
						VALUES ('$OrgID','$name', '$focus')";
											
						$sql3 = "INSERT INTO NPOContactInfo(Organization_ID,Phone)
						VALUES ('$OrgID','$number')";
						$sql2 = "INSERT INTO ContactInfo(Phone, Postal_Code,City,Street_Address,Email)
						VALUES ('$number','$pcod','$city','$address','$email')";
						
						if (mysqli_query($con,$sql1)) {
						echo "Table reset successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
						if (mysqli_query($con,$sql2)) {
						echo "Table reset successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
						if (mysqli_query($con,$sql3)) {
						echo "Table reset successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
						
				
						if(isset($_POST['charity'])){
						$funds=$_POST['funding'];
						$sql5 = "INSERT INTO Charity(Organization_ID,Funding)
						VALUES ('$OrgID','$funds')";
						if (mysqli_query($con,$sql5)) {
						echo "Table reset successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
						mysqli_query($con,$sql);
						}
						
						if(isset($_POST['adoption'])){
						$Anum=$_POST['numberAnimals'];
						$sql5 = "INSERT INTO Animal_Adoption_Center(Organization_ID,Number_Of_Animals)
						VALUES ('$OrgID','$Anum')";
						if (mysqli_query($con,$sql5)) {
						echo "Table reset successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
						mysqli_query($con,$sql);
						}
						
									
						if (mysqli_query($con,$sql)) {
						echo "Table reset successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
						if (mysqli_query($con,$sql1)) {
						echo "Table reset successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
						if (mysqli_query($con,$sql2)) {
						echo "Table reset successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
					}
					
					
					if (isset($_POST['deleteOrgSubmit'])){
						$org=$_POST['deleteOrgID'];
						$sql="DELETE FROM Non_Profit_Organization WHERE Organization_ID='$org'";
						$sql1="DELETE FROM Animal_Adoption_Center WHERE Organization_ID='$org'";
						$sql2="DELETE FROM Charity WHERE Organization_ID='$org'";
						
						if (mysqli_query($con,$sql)) {
						echo "Table reset successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
						if (mysqli_query($con,$sql1)) {
						echo "Table reset successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
						if (mysqli_query($con,$sql2)) {
						echo "Table reset successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
					}
					
					if (isset($_POST['updateFundingSubmit'])){
					$OID = $_POST['UpdateOrganization_ID'];
					if(isset($_POST['addFunding'])){
						$add=$_POST['addFunding'];
						$sql = "UPDATE Charity
						SET Funding=Funding+$add
						WHERE Organization_ID='$OID'";
						mysqli_query($con,$sql);
					}
					if(isset($_POST['subtractFunding'])){
						$sub=$_POST['subtractFunding'];
						$sql = "UPDATE Charity
						SET Funding=Funding-$sub
						WHERE Organization_ID='$OID'";
						mysqli_query($con,$sql);
					}
					/*
					$sql = "INSERT INTO NPO_Shortlist(User_ID,Organization_ID) VALUES ('100001','$input')";
					if (mysqli_query($con,$sql)) {
						echo "New record created successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}*/
					}
					if (isset($_POST['Join'])){
					$Orgresult = mysqli_query($con,"SELECT * 
					 FROM Non_Profit_Organization N, Animal_Adoption_Center A, Charity C, ContactInfo X, NPOContactInfo I
					 WHERE (N.Organization_ID=A.Organization_ID AND A.Organization_ID=C.Organization_ID AND C.Organization_ID=I.Organization_ID AND I.Phone=X.Phone )");
					display_data($Orgresult);
					}else{
                     $Orgresult = mysqli_query($con,"SELECT * FROM Non_Profit_Organization");
					display_data($Orgresult);
					
					$Orgresult = mysqli_query($con,"SELECT * FROM Animal_Adoption_Center");
					display_data($Orgresult);
                   
            
                     $Orgresult = mysqli_query($con,"SELECT * FROM Charity");
					display_data($Orgresult);
					
					$Orgresult = mysqli_query($con,"SELECT * FROM ContactInfo");
					display_data($Orgresult);
					
					$Orgresult = mysqli_query($con,"SELECT * FROM NPOContactInfo");
					display_data($Orgresult);
					}
					?>
               
                </div>
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