<?php

include_once("db.php");

$targetDir = "uploads/";

    $targetFile = $targetDir . basename($_FILES["image"]["name"]);

    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

    $db->query("INSERT INTO posts (username, image_path, comment) VALUES ('" . $_COOKIE["cybernightapp"] . "', '" . $targetFile . "', '" . $_POST["text"] . "')");

    header("Location: index.php?page=home.php");
?>