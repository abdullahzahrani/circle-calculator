<?php

$returnArray =[];

function getLatLong($city)
{
    include("dbDetails.php");
    $result = mysqli_query($conn, "SELECT latitude,longitude  FROM cities WHERE city_name='$city'"); // using mysqli_query instead
    $returnArray = [];


    while ($res = mysqli_fetch_array($result)) {
        $latitude = $res[0];
        $longitude = $res[1];
        $returnArray['city'] = $city;
        $returnArray['latitude'] = $latitude;
        $returnArray['longitude'] = $longitude;
    }
    mysqli_close($conn);

    return ($returnArray);

}

?>
