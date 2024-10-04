<?php
die("It is not so easy!")
include_once("db.php");

// if it is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($_POST["username"]) && isset($_POST["password"])) {

        $db->query("INSERT INTO users (username, password) VALUES ('" . $username . "', '" . $password . "')");

        setcookie("cybernightapp", $username, time() + (86400 * 30), "/", "", false, true);
        header("Location: index.php?page=home.php");
    } else {
        echo "Invalid username or password";
    }
} else {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Register InstaScam account</title>
    </head>

    <body>

        <h1>Create an account</h1>

        <form action="register.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Register">
        </form>

    </body>

    </html>

<?php
}
