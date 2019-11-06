<?php
require 'db-setup.php'; // construct the database
header('Content-type: application/json');

/**
 * Instantiate the variables
 */
global $suburb;
global $sports;
global $sql;
global $results;
global $postcode;

$suburb = "";
$sports = "";
$postcode = 0;

$_POST["suburb"] = "CLAYTON";
$_POST["sports"] = "Soccer";

/**
 * Assign the posted values to variables
 */
if (isset($_POST["suburb"]) && !empty($_POST["suburb"])) {
    $suburb = strtoupper($_POST["suburb"]);
}
if (isset($_POST["sports"]) && !empty($_POST["sports"])) {
    $sports = $_POST["sports"];
}

/**
 * Use prepared statements.
 * If both inputs are filled, search by suburb and activity.
 */
$stmt = $conn->prepare("select * from sports where sports.SuburbTown like ?");
$stmt->bind_param("s", $suburb);
$stmt->execute();
$result = $stmt->get_result();

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_row($result);
    $postcode = $row[9];
}

/**
 * Get the areas nearby by specifying the postcode.
 */
$postcodePlus = $postcode+1;
$postcodeMinus = $postcode-1;

/**
 * Use prepared statements.
 * If one of the inputs is not filled, search by suburb alone or activity alone.
 */
if ($sports == "") {
    $sql = "select * from sports where sports.Postcode = $postcode";
}
if ($sports != "" && $suburb != "") {
    $sql = "select * from sports where sports.SportsPlayed like '$sports'  AND  (sports.Postcode = $postcodeMinus or sports.Postcode = $postcodePlus)";
}
$result = $conn->query($sql);

/**
 * If an error occurred, display the error.
 */
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

/**
 * Declare a Location class to store the data to send back to the client
 */

require 'Location-class.php';

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
    echo json_encode($arr);
} else {
    echo "";
    // recommend locations from the suburb nearby
}
$conn->close();

?>