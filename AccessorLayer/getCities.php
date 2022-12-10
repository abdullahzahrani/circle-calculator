<?php
require("dbDetails.php");



$result = mysqli_query($conn, "SELECT city_name FROM cities ORDER BY city_name"); // using mysqli_query instead
$returnArray=[];


while($res = mysqli_fetch_array($result)) {
    $returnArray[]=$res;
}
mysqli_close($conn);

return ($returnArray[0]);


?>