<?php

require 'db-setup.php';

header('Content-type: application/json');

global $sql;
global $tableName;
global $display;

$tableName = "preference";

global $gender;
global $age;
global $team;
global $individual;

//$_POST["gender"] = "male";
//$_POST["teamIndividual"] = "team";
//$_POST["age"] = 5;

$team = $individual = 0;

$gender = strtoupper($_POST["gender"]);
$age = $_POST["age"];
if ($_POST["teamIndividual"] === "team") {
    $team = 1;
} else {
    $individual = 1;
}

if (empty($_POST["teamIndividual"])) {
    //$sql = "select * from sports where sports.SuburbTown like ? and sports.SportsPlayed like ?";
    $sql = "select * from preference where Min_Age <= '$age' and Max_Age >= '$age' and Gender = '$gender'";
}
if (!empty($_POST["teamIndividual"])) {
    $sql = "select * from preference where Min_Age <= '$age' and Max_Age >= '$age' and Gender = '$gender' and Team_Sport = '$team' and Individual_Sport = '$individual'";
}

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "Unfortunately, no were results found. Please modify your preference.";
}

//$arr = array();

class SportsObject
{
    public $sportsActivity;
}

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $s = new SportsObject();
        $s->sportsActivity = $row['SportsPlayed'];
        $arr[] = $s;
    }
    echo json_encode($arr);
} else {
    echo mysqli_error($conn);
}

$conn->close();


?>