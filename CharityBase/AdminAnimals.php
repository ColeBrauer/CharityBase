<!DOCTYPE html>
<html lang"en">
  <head>
    <meta charset="utf-8">
    <title>CharityBase - Admin Animals</title>
    <link rel="stylesheet" type="text/css" href="adminStyle.css" />
    <script src="adminStyle.js"></script>
  </head>
  <body>
    <div id="navbaradmin">
      <a href="index.php" id="logo"><span class="black">Charity</span><span class="white">Base</span></a>
      <div id="subtitle"> admin</div>
      <div id="navbaradmin-left">
        <a href="AdminHome.html">About</a>
        <a class="active" href="AdminAnimals.php">Animals</a>
        <a href="AdminNPO.php">Non-Profit Organizations</a>
      </div>
    </div>
    <img src="images/lineup.png" class="center" >
    <div id="content animalRow">
    <! <img class="picture" src="images/Happy People.jpg"/> 
        <!--TODO: update action link-->
        <div class="animalColumn">
            <div class="postBox">
                <div style="display: inline-block; text-align: left;">
                    <div class="admincontenttext">
                        <h3>Add a new animal to the database</h3>
                    </div>
                    <form method="POST" action="AdminAnimals.php">
                        <div>
                            <label>
                                Which Animal?
                                <label class="container">Cat
                                <input type="radio" name="Cat" value="cat">
                                <span class="checkmark"></span>
                                </label>
                                <label class="container">Dog
                                <input type="radio" name="Dog" value="dog">
                                <span class="checkmark"></span>
                                </label>
                            </label>
                        </div>
                        <div>
                            
                        </div>
                        <div>
                            <label>
                                Animal ID:
                                <input name="addAnimalID" type="text" placeholder="input animal ID">
                            </label>
                        </div>
                        <div>
                            <label>
                                Organization ID:
                                <input name="addOrgID" type="text" placeholder="input Organization ID">
                            </label>
                        </div>
                        <div>
                            <label>
                                Name:
                                <input name="addName" type="text" placeholder="input name">
                            </label>
                        </div>
                        <div>
                            <label>
                                Age in years(Integer): 
                                <input name="age" type="text" placeholder="input age">
                                </select>
                            </label>
                       
                            <label>
                                Gender:
                                <label class="container">Male
                                <input type="radio" name="addMale" value="male">
                                <span class="checkmark"></span>
                                </label>
                                <label class="container">Female
                                <input type="radio" name="addFemale" value="female">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div>
                            <label>
                                Personality:
                                <select name="Personality">
                                    <option>none</option>
                                    <option>Aggressive</option>
                                    <option>Calm</option>
                                    <option>Cuddly</option>
                                    <option>Energetic</option>
                                    <option>Friendly</option>
                                    <option>Passive</option>
                                    <option>Socialable</option>
                                    <option>Territorial</option>
                                    <option>Timid</option>
                                </select>
                            </label>
                        </div>
                        <div>
                            <label>
                                Health Considerations:
                                <input name="HealthConsiderations" type="text" placeholder="list health considerations">
                            </label>
                        </div>
                        <div>
                            <label>
                                Intake_Date:
                                <input name="Date" type="text" placeholder="MM-DD-YY">
                            </label>
                        </div>
                        <div>
                            <label>
                                Adoption Fee:
                                <input name="AdoptionFee" type="text" placeholder="enter in the format 123.99">
                            </label>
                        </div>
                        <hr>
                        <div>
                            <b>
                                Cat Specific: 
                            </b> &nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                Cat Breed:
                                <select name="catBreed">
                                    <option>none</option>
                                    <option>American Shorthair</option>
                                    <option>British Shorthair</option>
                                    <option>Burmese</option>
                                    <option>Domestic Shorthair</option>
                                    <option>Domesting Longhair</option>
                                    <option>Himalayan</option>
                                    <option>Maine Coon</option>
                                    <option>Norwegian Forest</option>
                                    <option>Persian</option>
                                    <option>Ragdoll</option>
                                    <option>Russian Blue</option>
                                    <option>Savannah</option>
                                    <option>Scottish Fold</option>
                                    <option>Siamese</option>
                                    <option>Sphynx</option>
                                    <option>Other</option>
                                </select>
                            </label> &nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                Is the cat declawed?
                                <input name="declawed" id="declawed" type="checkbox" value="T">
                            </label> 
                        </div>
                        <div>
                            <b>
                                Dog Specific: 
                            </b> &nbsp;&nbsp;&nbsp;&nbsp;
                            <label> 
                                Dog Breed:
                                <select name="dogBreed">
                                    <option>none</option>
                                    <option>Akita</option>
                                    <option>Australian Shepherd</option>
                                    <option>Beagle</option>
                                    <option>Border Collie</option>
                                    <option>Bulldog</option>
                                    <option>Cockapoo</option>
                                    <option>Corgi</option>
                                    <option>Dachshund</option>
                                    <option>German Shepherd</option>
                                    <option>Golden Retriever</option>
                                    <option>Jack Russell Terrier</option>
                                    <option>Labrador Retriever</option>
                                    <option>Maltese</option>
                                    <option>Pomeranian</option>
                                    <option>Poodle</option>
                                    <option>Saint Bernard</option>
                                    <option>Scottish Terrier</option>
                                    <option>Other</option>
                                </select>
                            </label>
                            <label> &nbsp;&nbsp;&nbsp;&nbsp;
                                Dog's Weight:
                                <input name="Weight" type="text" placeholder="dog's weight in kg">
                            </label>
                        </div>
                        <div class="submitButton">
                            <center><button class="button" type="submit" name="addAnimalSubmit"><span>Add to database</span></button></center>
                        </div>
                    </form>
                </div>
            </div>
            <hr >
            <div class="admincontenttext">
                <h3>Delete an animal from the database</h3>
            </div>
            <div class="postBox">
                <div style="display: inline-block; text-align: left;">
                    <form method="POST" action="AdminAnimals.php">
                        <div>
                            <label>
                                Animal ID:
                                <input name="deleteAnimalID" type="text" placeholder="input animal ID">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            </label>
                        </div>
                        <div>
                            <label>
                                Organization ID:
                                <input name="deleteOrgID" type="text" placeholder="input Organization ID">
                            </label>
                        </div>
                        <div class="submitButton">
                            <center><button class="button" type="submit" name="deleteAnimalSubmit"><span>Delete from database</span></button></center>
                        </div>
                        <div>
                    </form>
                </div>
            </div>
            <hr>
            <div class="admincontenttext">
                <h3>Update an animal's adoption fee</h3>
            </div>
            <div class="postBox">
                <div style="display: inline-block; text-align: left;">
                    <form method="POST" action="AdminAnimals.php">
                        <div>
                            <label>
                                Animal ID:
                                <input name="updateAnimalID" type="text" placeholder="input animal ID">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            </label>
                        </div>
                        <div>
                            <label>
                                Organization ID:
                                <input name="updateOrgID" type="text" placeholder="input Organization ID">
                            </label>
                        </div>
                        <div>
                            <label>
                                Update adoption fee to:
                                <input name="updateFee" type="text" placeholder="ex. 123.99">
                            </label>
                        </div>
                        <div class="submitButton">
                        <center><button class="button" type="submit" name="updateFeeSubmit"><span>Update adoption fee</span></button></center>
                        </div>
                        <div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
        <div class="animalColumn">
            <div class="postBox">
            <div style="display: inline-block; text-align: left;">
                <h3>Sheltered Animals</h3>
                <form method="POST" action="AdminAnimals.php">
                    <div class="submitButton">
                        <button class="button" type="submit" name="split"><span>Split Cats and Dogs</span></button></br></br>
                        </div>                     
                    </form>
                <?php include 'db.php';
				
				if (isset($_POST['addAnimalSubmit'])){
					$aID=$_POST['addAnimalID'];
					$oID=$_POST['addOrgID'];
					$name=$_POST['addName'];
					$age=$_POST['age'];
					if(isset($_POST['addMale'])){
						$Gender='M';
					}else{$Gender='F';}
					$personality=$_POST['Personality'];
					$health=$_POST['HealthConsiderations'];
					$date=$_POST['Date'];
					$fee=$_POST['AdoptionFee'];
							
					if(isset($_POST['Cat'])){
						$breed=$_POST['catBreed'];
						if($_POST['declawed']){$declawed='T';}else{$declawed='F';}
						 
	 
						$sql = "INSERT INTO Sheltered_Animal(Animal_ID,Organization_ID,Name,Age,Gender,Breed,Personality,Health_Considerations,Intake_Date,Price)
						VALUES ('$aID','$oID','$name',$age ,'$Gender','$breed','$personality','$health',STR_TO_DATE('$date','%m-%d-%y'),$fee)";
						
						$sql1 = "INSERT INTO Cat(Animal_ID,Organization_ID,Declawed)
						VALUES ('$aID','$oID','$declawed')";
						
						mysqli_query($con,$sql);
						mysqli_query($con,$sql1);
							
					}

					if(isset($_POST['Dog'])){
						$breed=$_POST['dogBreed'];
						$weight=$_POST['Weight'];
						
						$sql = "INSERT INTO Sheltered_Animal(Animal_ID,Organization_ID,Name,Age,Gender,Breed,Personality,Health_Considerations,Intake_Date,Price)
						VALUES ('$aID','$oID','$name',$age ,'$Gender','$breed','$personality','$health',STR_TO_DATE('$date','%m-%d-%y'),$fee)";
						
						$sql1 = "INSERT INTO Dog(Animal_ID,Organization_ID,Weight)
						VALUES ('$aID','$oID',$weight)";

						mysqli_query($con,$sql);
							mysqli_query($con,$sql1);
						
						}

				}
				
				if (isset($_POST['deleteAnimalSubmit'])){
					$aID = $_POST['deleteAnimalID'];
					$oID = $_POST['deleteOrgID'];
					$sql="DELETE FROM Sheltered_Animal WHERE (Organization_ID='$oID' AND Animal_ID='$aID')";
									
					if (mysqli_query($con,$sql)) {
						echo "New record deleted successfully";
						} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
				}
				
				if (isset($_POST['updateFeeSubmit'])){
					$aID = $_POST['updateAnimalID'];
					$oID = $_POST['updateOrgID'];
					$fee = $_POST['updateFee'];
					
					$sql = "
					UPDATE Sheltered_Animal
					SET Price=$fee
					WHERE (Organization_ID='$oID' AND Animal_ID='$aID')";
				
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
				if(isset($_POST['split'])){
					print "<h2>Cats</h2>";
					$Orgresult = mysqli_query($con,"
				  SELECT * 
				  FROM Sheltered_Animal S, Cat C 
				  WHERE (S.Animal_ID=C.Animal_ID AND S.Organization_ID=C.Organization_ID )");
					display_data($Orgresult);
					print "<h2>Dogs</h2>";
				$Orgresult = mysqli_query($con,"
				  SELECT * 
				  FROM Sheltered_Animal S, Dog D 
				  WHERE (S.Animal_ID=D.Animal_ID AND S.Organization_ID=D.Organization_ID )");
					display_data($Orgresult);
				
				}else{
                  $Orgresult = mysqli_query($con,"
				  SELECT * 
				  FROM Sheltered_Animal S");
					display_data($Orgresult);
				}
					//Display TABLES
					?>
            </div>
        </div>
    </div>
</div>
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
</body>
</html>

