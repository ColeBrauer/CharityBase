<!DOCTYPE html>
<html lang"en">
  <head>
    <meta charset="utf-8">
    <title>CharityBase - Admin</title>
    <link rel="stylesheet" type="text/css" href="adminAnimalsStyle.css" />
    <script src="adminStyle.js"></script>
  </head>
  <body>
    <div id="navbaradmin">
      <a href="index.php" id="logo"><span class="black">Charity</span><span class="white">Base</span></a>
      <div id="subtitle"> admin</div>
      <div id="navbaradmin-left">
        <a href="AdminHome.html">About</a>
        <a href="AdminNPO.php">Non-Profit Organizations</a>
        <a class="active" href="AdminAnimals.php">Animals</a>
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
                                <input name="animalID" type="text" placeholder="input animal ID">
                            </label>
                        </div>
                        <div>
                            <label>
                                Organization ID:
                                <input name="OrgId" type="text" placeholder="input Organization ID">
                            </label>
                        </div>
                        <div>
                            <label>
                                Name:
                                <input name="name" type="text" placeholder="input name">
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
                                <input name="description" type="text" placeholder="short description">
                            </label>
                        <div>
                            <label>
                                Gender:
                                <input type="radio" name="gender" value="male"> Male
                                <input type="radio" name="gender" value="female"> Female
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
                  run_animalTable(); ?>
                <h2>Cats</h2>
                <?php 
                  run_catTable(); ?>
                <h2>Dogs</h2>
                <?php 
                  run_dogTable(); ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>


<?php
include 'db.php';
if ($db_conn) {
    if (array_key_exists('animalSubmit', $_POST)) {
        $tuple = array (
            ":bind1" => $_POST['animalID'],
            ":bind2" => $_POST['OrgId'],
            ":bind3" => $_POST['name'],
            ":bind4" => $_POST['age'],
            ":bind5" => $_POST['gender'],
            ":bind6" => $_POST['breed'],
            ":bind7" => $_POST['personality'],
            ":bind8" => $_POST['HealthConsideratioins'],
            ":bind9" => $_POST['date'],         
            ":bind10" => $_POST['adoptionFee']
        );
        $alltuples = array (
            $tuple
        );
        executeBoundSQL("insert into sheltered_animal values (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6, :bind7, :bind8, to_date(:bind9, 'DD/MM/YYYY'), :bind10)", $alltuples);
        if (isset($_POST['animal'])){
            if ($_POST['animal'] == 'cat'){
                $tuple2 = array (
                    ":bind1" => $_POST['animalID'],
                    ":bind2" => $_POST['orgid'],
                    ":bind3" => $_POST['declawed']
                );
                $alltuples2 = array (
                    $tuple2
                );
                executeBoundSQL("insert into cat values (:bind1, :bind2, :bind3)", $alltuples2);
            } else {
                $tuple2 = array (
                    ":bind1" => $_POST['animalID'],
                    ":bind2" => $_POST['orgid'],
                    ":bind3" => $_POST['weight']
                );
                $alltuples2 = array (
                    $tuple2
                );
                executeBoundSQL("insert into dog values (:bind1, :bind2, :bind3)", $alltuples2);
            }
        }
        OCICommit($db_conn);
    } 
     else if (array_key_exists('deleteAnimalSubmit', $_POST)) {
        $tuple = array (
            ":bind1" => $_POST['deleteAnimalID'],
            ":bind2" => $_POST['deleteOrgId']
        );
        $alltuples = array (
            $tuple
        );
        executeBoundSQL("delete from sheltered_animal where Animal_ID=:bind1 AND Organization_ID=:bind2", $alltuples);
        OCICommit($db_conn);
    } 
     else if (array_key_exists('updateFeeSubmit', $_POST)) {
        $tuple = array (
            ":bind1" => $_POST['updateAnimalID'],
            ":bind2" => $_POST['updateOrgId'],
            ":bind3" => $_POST['updateFee']
        );
        $alltuples = array (
            $tuple
        );
        executeBoundSQL("update sheltered_animal set price=:bind3 where Animal_ID=:bind1 AND Organization_ID=:bind2", $alltuples);
        OCICommit($db_conn);
    }

    OCILogoff($db_conn);
} else {
    echo "cannot connect";
    echo htmlentities($e['message']);
}

function run_animalTable(){
    if ($_POST && $success) {
        header("location: AdminAnimals.php");
    } else {
        $result = executePlainSQL("select * from Sheltered_Animal");
           $columnNames = array("animal id", "Org ID", "name", "Age", "Gender", "Breed", "Personality", "Health", "Since", "Price");
           printTable($result, $columnNames);
    }
    OCICommit($db_conn);
}

function run_catTable(){
    if ($_POST && $success) {
        header("location: AdminAnimals.php");
    } else {
        $result = executePlainSQL("select * from cat");
           $columnNames = array("animal id", "Org ID", "declawed");
           printTable($result, $columnNames);
    }
    OCICommit($db_conn);
}

function run_dogTable(){
    if ($_POST && $success) {
        header("location: AdminAnimals.php");
    } else {
        $result = executePlainSQL("select * from dog");
           $columnNames = array("animal id", "Org ID", "weight");
           printTable($result, $columnNames);
    }
    OCICommit($db_conn);
}
?>