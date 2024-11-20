<?php
session_start(); // Starts the session
if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
</head>
<body>
    <form method="POST" action="session_example.php">
        <label for="name">Enter your name:</label>
        <input type="text" name="name" id="name">
        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_SESSION['name'])) {
        echo "Session Name: " . $_SESSION['name'];
    }
    ?>
</body>
</html>