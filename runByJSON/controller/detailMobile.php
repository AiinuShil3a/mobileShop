<?php
    include_once("../model/functionM.php");

    $id = isset($_GET["id"]) ? htmlspecialchars($_GET["id"]) : include "../assets/js/aleart_getID.js";
    $filename = '../model/data.json';
    $obj_name = new mobileWEBSITE();
    $rs2 = $obj_name->getMobile($filename);
    $BasicCode = $id - 1; //การจะเรียกใช้ตาม ARRAY จำนับจากตัวที่ 0 การทำแบบนี้ถือเป็นเพียงพื้นฐานเท่านั้นไม่แนะนำเท่าไหร่
    include "../view/mobileDetail.php"; 
?>