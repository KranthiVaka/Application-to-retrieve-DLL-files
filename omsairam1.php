<?php

//connect to mysql db
include('dbConnect.php');


//read json file contents
$jsondata = file_get_contents('userData.json');

//convert json object to php associative array
$data1 = json_decode($jsondata, true);

//get the details from database
foreach ($data1 as $data) {
    $bits = $data['bits'];
    $companyname = $data['companyname'];
    $description = $data['description'];
    $filename = $data['filename'];
    $filesize = $data['filesize'];
    $md5 = $data['md5'];
    $name = $data['os']['name'];
    $versionMajor = $data['os']['versionMajor'];
    $versionMinor = $data['os']['versionMinor'];
    $productname = $data['productname'];
    $version = $data['version'];

    //Query to insert details
    $sql = mysqli_query($conn, "INSERT INTO user(bits, companyname, description, filename, filesize, md5, name, versionMajor, versionMinor, productname, version) VALUES('" . $bits . "', '" . $companyname . "', '" . $description . "','" . $filename . "','" . $filesize . "', '" . $md5 . "', '" . $name . "', '" . $versionMajor . "','" . $versionMinor . "','" . $productname . "', '" . $version . "')");
}
mysqli_close($conn);
?>
