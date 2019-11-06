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

$suburb = "";
$sports = "";

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
if($sports != "" && $suburb != "") {
    if (ctype_digit($suburb)){
        $stmt = $conn->prepare("select * from sports where sports.Postcode like ? and sports.SportsPlayed like ?");
    }
    else{
        $stmt = $conn->prepare("select * from sports where sports.SuburbTown like ? and sports.SportsPlayed like ?");
    }
    $stmt->bind_param("ss", $suburb, $sports); // Bind the variable to $sports and $suburb
}

/**
 * Use prepared statements.
 * If one of the inputs is not filled, search by suburb alone or activity alone.
 */
if ($suburb == ""){
    $stmt = $conn->prepare("select * from sports where sports.SportsPlayed like ?");
    $stmt->bind_param("s", $sports); // Bind the variable to $sports declared above.
}
if ($sports == "")
{
    if (ctype_digit($suburb)){
        $stmt = $conn->prepare("select * from sports where sports.Postcode like ?");
        echo("search by postcode"); // Search by postcode
    }
    else{
        $stmt = $conn->prepare("select * from sports where sports.SuburbTown like ?");
    }
    $stmt->bind_param("s", $suburb); // Search by suburb name
}

/**
 * Execute the prepared statements and get results.
 */
$stmt->execute();
$result = $stmt->get_result();

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


/**
 * If the sql queries returned results, wrap the data into the Location object.
 */
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $s = new Location();
        $s->facilityName = $row['FacilityName'];
        $s->lat = $row['Latitude'];
        $s->lng = $row['Longitude'];
        $s->sports = $row['SportsPlayed'];
        $streetNo = strval($row['StreetNo']);
        $streetName = $row['StreetName'];
        $streetType = $row['StreetType'];
        // If street number is empty, emit the street number.
        if ($streetNo == 0  || $streetName == "") {
            $streetNo = "";
        }
        if ($streetName == "") {
            $streetNo = "";
            $streetType = "";
        }
        $postcode = $row['Postcode'];
        if (empty($row['Postcode']) ||$row['Postcode']==0 ){
            $postcode ="";
        }
            $s->address = $streetNo . " " . $streetName . " " . $streetType . " " . $row['SuburbTown'] . " VIC " . $postcode;
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