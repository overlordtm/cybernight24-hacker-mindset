<?php

include_once("db.php");

$username = $_COOKIE["cybernightapp"];

if (!isset($username)) {
    header("Location: index.php?page=login.php");
}

$users = $db->query("SELECT username FROM users WHERE username != '" . $username . "' ORDER BY id DESC");

if (isset($_GET["filter"])) {
    $q = "SELECT * FROM posts WHERE username = '" . $_GET["filter"] . "'";
    

} else {
    $q = "SELECT * FROM posts ORDER BY id DESC";
}
$posts = $db->query($q);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My timeline</title>
</head>
<body>
    <!-- Debug query: <?= $q ?> -->

    <form action="post.php" method="post" enctype="multipart/form-data">
        <label for="image">Select image:</label>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>

        <label for="text">Enter text:</label><br>
        <textarea id="text" name="text" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Upload">
    </form>

    <h1>Pozdravljen <?= $username ?></h1>

    <ul>
        <?php foreach ($users as $user) : ?>
            <li><a href="?filter=<?= $user["username"] ?>"><?= $user["username"] ?></a></li>
        <?php endforeach; ?>
    </ul>

    <div>
        <?php foreach ($posts as $post) : ?>
            <div>
                <p><?= $post["username"] ?></p>
                <img src="<?= $post["image_path"] ?>">
                <p><?= $post["comment"] ?></p>
            </div>
            <hr>
        <?php endforeach; ?>

    </div>

</body>
</html>