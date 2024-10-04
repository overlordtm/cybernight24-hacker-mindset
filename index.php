<?php

include_once("db.php");

if (isset($_GET["page"])) {
    include($_GET["page"]);
    exit();
} else {

    if (isset($_COOKIE["cybernightapp"])) {
        include("home.php");
    } else {
        include("login.php");
    }
}
?>

