<?php
    $x = new PDO("mysql:host=localhost;dbname=gaming_hub_db","root","");
    $y = $x -> prepare("delete from products where ref = ? ");
    $y -> execute(array($_POST["delete"]));
?>