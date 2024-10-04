<?php

$db = new mysqli("db", "dev", "geslo", "dev");

$db->query("CREATE TABLE IF NOT EXISTS users (id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(255) NOT NULL UNIQUE, password VARCHAR(255) NOT NULL)");
$db->query("CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    comment TEXT
)");

# create three users test1 to test3 with passwords pass1 to pass3
$db->query("INSERT INTO users (username, password) VALUES ('test1', 'pass1')");
$db->query("INSERT INTO users (username, password) VALUES ('test2', 'pass2')");
$db->query("INSERT INTO users (username, password) VALUES ('test3', 'pass3')");
$db->query("INSERT INTO users (username, password) VALUES ('flag', 'cn{YoUcAnInJ3ct}')");