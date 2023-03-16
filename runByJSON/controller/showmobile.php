<?php
    include_once 'model/functionM.php';
    $obj_name = new mobileWEBSITE();
    $rs2 = $obj_name->getMobile();

    foreach ($rs2 as $result2){
        include "view/allMobile.php";
    }
?>