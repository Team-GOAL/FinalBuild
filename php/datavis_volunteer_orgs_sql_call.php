<?php
require 'db-setup.php';
header('Content-type: application/json');
global $sql;

//change query here
$sql = "SELECT 
			*
			FROM kidsdatabase.vic_yearly_volunteer_orgs
			where `year` = (select max(`year`) from kidsdatabase.vic_yearly_volunteer_orgs)
			;";

//output result
$result = mysqli_query($conn, $sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

//convert to json
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    echo json_encode($arr, JSON_NUMERIC_CHECK);
} else {
    echo mysqli_error($conn);
}

$conn->close();

?>