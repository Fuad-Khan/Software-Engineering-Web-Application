<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
</head>
<body>
    <form method="POST" action="post_example.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['name'])) {
        echo "Hello, " . htmlspecialchars($_POST['name']) . "!";
    }
    ?>
</body>
</html>