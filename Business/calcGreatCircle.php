<?php
include_once("../AccessorLayer/getLatLong.php");
function toRad($degrees) {
// Converts $degrees to equivalent value in radians.
    $radians = $degrees * (pi()/180);
    return $radians;  }
function calculateGreatCircle( $cityl,$city2) {
    $latl = $cityl['latitude'];
    $longl = $cityl['longitude'];
    $lat2 = $city2['latitude'];
    $long2 = $city2['longitude'];
    $latl = toRad($latl);
    $longl = toRad($longl);
    $lat2 = toRad($lat2);
    $long2 = toRad($long2);
    $theta = $long2 - $longl;
    $distance = acos((sin($latl) * sin($lat2)) + (cos($latl) * cos($lat2) *  cos($theta)));
    if ($distance < 0) {  $distance = $distance + pi(); }
    $distance = $distance * 6371.2;
    return $distance;

}


?>