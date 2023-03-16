<?php
    include_once 'model/functionM.php';
    $filename = 'model/data.json';
    $obj_name = new mobileWEBSITE();
    $rs2 = $obj_name->getMobile($filename);

    foreach ($rs2 as $result2){
        include "view/allMobile.php";
    }
?>