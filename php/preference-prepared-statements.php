<?php

require 'db-setup.php';


header('Content-type: application/json');

/**
 * Instantiate the variables
 */
global $sql;
global $display;


global $gender;
global $age;
global $team;
global $individual;
global $indoor;
global $outdoor;


$_POST["gender"] = "female";
$_POST["teamIndividual"] = "team";
$_POST["indoorOutdoor"] = "indoor";
$_POST["age"] = 7;

$team = $individual = $indoor = $team = 0;

/**
 * Assign the posted values to variables
 */
$gender = $_POST["gender"];
$age = $_POST["age"];
    if ($_POST["teamIndividual"] === "team") {
        $team = 1;
    } else {
        $individual = 1;
    }

/**
 * Do sql  query based on the
 */
if ($individual === 1) {
    $sql = "select * from preference where Min_Age <= '$age' and Max_Age >= '$age' and Gender = '$gender' and Individual_Sport = 1";
} elseif ($team === 1) {
    $sql = "select * from preference where Min_Age <= '$age' and Max_Age >= '$age' and Gender = '$gender' and Team_Sport = 1";
} else {
    $sql = "select * from preference where Min_Age <= '$age' and Max_Age >= '$age' and Gender = '$gender'";
}

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "Unfortunately, no were results found. Please modify your preference.";
}

//$arr = array();

class SportsObject{
    public $sportsActivity;
}

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $s=new SportsObject();
        $s->sportsActivity=$row['SportsPlayed'];
        $arr[]=$s;
    }
    echo json_encode($arr);
} else {
    echo mysqli_error($conn);
}

$conn->close();

?>



