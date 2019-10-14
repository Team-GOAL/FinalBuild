<?php
require 'db-setup.php'; // construct the database
header('Content-type: application/json');

//Receives a list of activities and find locations based on it.

global $arr;
global $sports;
global $sportsList;
global $sql;
global $resultList;


$sports = "";

$sportsList = ['{"Sportsplayed": "basketball"},{"Sportsplayed": "soccer"}'];

if (isset($_POST["Sportsplayed"]) && !empty($_POST["Sportsplayed"])) {
    $sportsList = $_POST["Sportsplayed"];
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

// Loop over the list of sports activities to find by each activity
foreach ($sportsList as $record){
    echo($record);
    //$sports = $sports.SportsPlayed;
    $stmt = $conn->prepare("select * from sports where sports.SportsPlayed like ?");
    $sports = $record['Sportsplayed'];
    $stmt->bind_param("s", $sports);
    $stmt->execute();
    $result = $stmt->get_result(); // get the list of returned locations
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $s = new Location();
            $s->facilityName = $row['FacilityName'];
            $s->lat = $row['Latitude'];
            $s->lng = $row['Longitude'];
            $s->sports = $row['SportsPlayed'];
            $streetNo = strval($row['StreetNo']);
            $s->address = $streetNo . " " . $row['StreetName'] . " " . $row['StreetType'] . " " . $row['SuburbTown'] . " VIC " . $row['Postcode'];
            $s->condition = $row['FacilityCondition'];
            $s->suburb = $row['SuburbTown'];
            $arr[] = $s;
        }
        array_merge($resultList, $arr);
    }
}

echo json_encode($arr);
$conn->close();

?>