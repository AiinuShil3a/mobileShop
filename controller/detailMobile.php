<?php
    include_once("../model/ConDB.php");
    include_once("../model/functionM.php");
    $id = htmlspecialchars($_GET["id"]);

    $obj_name = new Team();
    $rs2 = $obj_name->getMobileDetail($id);
    $jsonCode = $rs2;
    $jsonDecode = json_decode($jsonCode, true);
    include "../view/mobileDetail.php";
?>