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
        <!--TODO: update action link-->
        <div class="animalColumn">
            <div class="postBox">
                <div style="display: inline-block; text-align: left;">
                    <div class="admincontenttext">
                        <h2>Add a new animal to the database</h2>
                    </div>
                    <form method="POST" action="AdminAnimals.php">
                        <div>
                            <label>
                                Which Animal?
                                <input type="radio" name="animal" value="cat"> Cat
                                <input type="radio" name="animal" value="dog"> Dog
                            </label>
                        </div>
                        <div>
                            
                        </div>
                        <div>
                            <label>
                                Animal ID:
                                <input name="addanimalID" type="text" placeholder="input animal ID">
                            </label>
                        </div>
                        <div>
                            <label>
                                Organization ID:
                                <input name="addOrgId" type="text" placeholder="input Organization ID">
                            </label>
                        </div>
                        <div>
                            <label>
                                Name:
                                <input name="addname" type="text" placeholder="input name">
                            </label>
                        </div>
                        <div>
                            <label>
                                Age in years: 
                                <select name="age">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                </select>
                            </label>
                        </div>
                            <label>
                                Description:
                                <input name="adddescription" type="text" placeholder="short description">
                            </label>
                        <div>
                            <label>
                                Gender:
                                <input type="radio" name="addgender" value="male"> Male
                                <input type="radio" name="addgender" value="female"> Female
                            </label>
                        </div>
                        <div>
                            <label>
                                Personality:
                                <select name="personality">
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
                                <input name="healthConsiderations" type="text" placeholder="list health considerations">
                            </label>
                        </div>
                        <div>
                            <label>
                                Intake_Date:
                                <input name="date" type="text" placeholder="DD/MM/YYYY">
                            </label>
                        </div>
                        <div>
                            <label>
                                Adoption Fee:
                                <input name="adoptionFee" type="text" placeholder="enter in the format 123.99">
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
                                <input name="weight" type="text" placeholder="dog's weight in kg">
                            </label>
                        </div>
                        <div class="submitButton">
                            <input type="submit" value="Add to database" name="animalSubmit">
                        </div>
                    </form>
                </div>
            </div>
            <hr >
            <div class="admincontenttext">
                <h2>Delete an animal from the database</h2>
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
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </label>
                        </div>
                        <div>
                            <label>
                                Organization ID:
                                <input name="deleteOrgId" type="text" placeholder="input Organization ID">
                            </label>
                        </div>
                        <div class="submitButton">
                            <input type="submit" value="Delete from database" name="deleteAnimalSubmit">
                        </div>
                        <div>
                    </form>
                </div>
            </div>
            <hr>
            <div class="admincontenttext">
                <h2>Update an animal's adoption fee</h2>
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
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </label>
                        </div>
                        <div>
                            <label>
                                Organization ID:
                                <input name="updateOrgId" type="text" placeholder="input Organization ID">
                            </label>
                        </div>
                        <div>
                            <label>
                                Update adoption fee to:
                                <input name="updateFee" type="text" placeholder="ex. 123.99">
                            </label>
                        </div>
                        <div class="submitButton">
                            <input type="submit" value="Update adoption fee" name="updateFeeSubmit">
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
                <h2>Sheltered Animal</h2>
                <?php include 'db.php';
				if (isset($_POST['ShortlistAdd'])){
					$input = $_POST['Organization_ID'];
					$sql = "INSERT INTO NPO_Shortlist(Animal_ID,Organization_ID,Name,Age,gender,Breed,Personality,Health_Considerations,Intake_Date) 
					VALUES ('100001','$input')";
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
				
                  $Orgresult = mysqli_query($con,"SELECT * FROM Sheltered_Animal");
					display_data($Orgresult);
					//Display TABLES
					?>
            </div>
        </div>
    </div>
</div>
</body>
</html>

