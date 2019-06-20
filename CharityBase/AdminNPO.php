<!DOCTYPE html>
<html lang"en">
  <head>
    <meta charset="utf-8">
    <title>CharityBase - Admin NPO</title>
    <link rel="stylesheet" type="text/css" href="adminStyle.css" />
    <script src="adminStyle.js"></script>
  </head>
  <body>
    <div id="navbaradmin">
      <a href="index.php" id="logo"><span class="black">Charity</span><span class="white">Base</span></a>
      <div id="subtitle"> admin</div>
      <div id="navbaradmin-left">
        <a href="AdminHome.html">About</a>
        <a href="AdminAnimals.php">Animals</a>
        <a class="active" href="AdminNPO.php">Non-Profit Organizations</a>
      </div>
    </div>
    <img src="images/lineup.png" class="center" >
    <div id="content animalRow">
        <div class="animalColumn">
            <div class="postBox">
                <div style="display: inline-block; text-align: left;">
                    <div class="admincontenttext">
                        <h3>Add a new charity to the non-profit organization database</h3>
                    </div>
                    <form method="POST" action="AdminNPO.php">
                        <div>
                            <label>
                                Non-Profit Organziation Type:
                                <label class="container">Animal Adoption Centre
                                <input type="radio" name="adoption" value="adoption">
                                <span class="checkmark"></span>
                                </label>
                                <label class="container">Charity
                                <input type="radio" name="charity" value="charity">
                                <span class="checkmark"></span>
                                </label>
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
                            <center><button class="button" type="submit" name="AddNPOSubmit"><span>Add to database</span></button></center>
                        </div>
                    </form>
                </div>
                <hr>
                <div class="admincontenttext">
                    <h3>Delete charity from the non-profit organization database</h3>
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
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;
                            </label>
                        </div>
                        <div class="submitButton">
                        <center><button class="button" type="submit" name="deleteOrgSubmit"><span>Delete from database</span></button></center>
                        </div>
                    </form>
                </div>
                <hr>
                <div class="admincontenttext">
                    <h3>Update funding to charities</h3>
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
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;
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
                        <center><button class="button" type="submit" name="updateFundingSubmit"><span>Update funding</span></button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="animalColumn">
            <div class="postBox">
                <div style="display: inline-block; text-align: left;">
				<div class="submitButton">
				 <h3>Non-Profit Organizations</h3>
				<form method="POST" action="AdminNPO.php">
                <button class="button" type="submit" name="Join" action="AdminNPO.php"><span>Join tables</span></button></br></br>
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
	
					}
					if (isset($_POST['Join'])){
					$Orgresult = mysqli_query($con,"SELECT * 
					 FROM Non_Profit_Organization N, Animal_Adoption_Center A, Charity C, ContactInfo X, NPOContactInfo I
					 WHERE (N.Organization_ID=A.Organization_ID AND A.Organization_ID=C.Organization_ID AND C.Organization_ID=I.Organization_ID AND I.Phone=X.Phone )");
					display_data($Orgresult);
					}else{
						print "<h2>Non-Profit Organizations</h2>";
                     $Orgresult = mysqli_query($con,"SELECT * FROM Non_Profit_Organization");
					display_data($Orgresult);
					print "<h2>Animal Adoption Centres</h2>";
					$Orgresult = mysqli_query($con,"SELECT * FROM Animal_Adoption_Center");
					display_data($Orgresult);
                   
					print "<h2>Charities</h2>";
                     $Orgresult = mysqli_query($con,"SELECT * FROM Charity");
					display_data($Orgresult);
					print "<h2>Contact Info</h2>";
					$Orgresult = mysqli_query($con,"SELECT * FROM ContactInfo C, NPOContactInfo N 
					Where N.Phone=C.Phone");
					display_data($Orgresult);
				
					}
					?>
               
                </div>
            </div>
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
