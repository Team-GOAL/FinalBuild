<?php
require 'db-setup.php'; // construct the database
header('Content-type: application/json');

//Succeeded in browser.

global $suburb;
global $sports;
global $sql;

$suburb = "";
$sports = "";

/*
 * Test data:
 * $_POST["suburb"] = "CLAYTON";
 * $_POST["sports"] = "Soccer";
 */

if (isset($_POST["suburb"]) && !empty($_POST["suburb"])){
    $suburb = strtoupper($_POST["suburb"]);
}
if (isset($_POST["sports"]) && !empty($_POST["sports"])){
    $sports = $_POST["sports"];
}


if ($suburb == "")
{
    $sql ="select * from sports where sports.SportsPlayed like '$sports'";
}
if ($sports == "")
{
    $sql ="select * from sports where sports.SuburbTown like '$suburb'";
}
if ($sports != "" && $suburb != "")
//$sql = "select * from sports where sports.SuburbTown like ? and sports.SportsPlayed like ?";
$sql = "select * from sports where sports.SuburbTown like '$suburb' and sports.SportsPlayed like '$sports'";

$result = mysqli_query($conn, $sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}


class Location
{
    public $facilityName;
    public $lat;
    public $lng;
    public $sports;
    public $address;
    public $condition;
    public $suburb;
}

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $s = new Location();
        $s->facilityName = $row['FacilityName'];
        $s->lat = $row['Latitude'];
        $s->lng = $row['Longitude'];
        $s->sports = $row['SportsPlayed'];
        $streetNo = strval($row['StreetNo']);
        $s->address=$streetNo." ".$row['StreetName']." ".$row['StreetType']." ".$row['SuburbTown']." VIC ".$row['Postcode'];
        $s->condition = $row['FacilityCondition'];
        $s->suburb = $row['SuburbTown'];
        $arr[] = $s;
    }
    echo json_encode($arr);
} else {
    echo "";
}
$conn->close();

?>