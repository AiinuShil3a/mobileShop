<?php
    include_once 'model/ConDB.php';
    include_once 'model/functionM.php';
    $obj_name = new mobileWEBSITE();
    $rs2 = $obj_name->getMobile();

    // Read JSON Decode From encode to decode
    $jsonCode = $rs2;
    $jsonDecode = json_decode($jsonCode, true);
    foreach ($jsonDecode as $result2){
        include "view/allMobile.php";
    }
?>