<?php
if (isset($_POST['name'])) {
    setcookie("username", $_POST['name'], time() + (86400 * 30)); // Cookie set for 30 days
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>
    <form method="POST" action="cookie_example.php">
        <label for="name">Enter your name:</label>
        <input type="text" name="name" id="name">
        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_COOKIE['username'])) {
        echo "Cookie Value: " . $_COOKIE['username'];
    }
    ?>
</body>
</html>
