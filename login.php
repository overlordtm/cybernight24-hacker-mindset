<?php

include_once("db.php");

// if it is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $q = "SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "'";
        $result = $db->query($q);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            setcookie("cybernightapp", $username, time() + (86400 * 30), "/", "", false, true);
            header("Location: index.php?page=home.php");
        } else {
            echo "Invalid username or password";
        }
    }
} else {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Login</title>
    </head>

    <body>

        <h1>Login</h1>

        <form action="login.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Login">
        </form>

    </body>

    </html>

<?php
}
