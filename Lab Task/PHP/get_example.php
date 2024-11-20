<!DOCTYPE html>
<html>
<head>
    <title>GET Example</title>
</head>
<body>
    <form method="GET" action="get_example.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_GET['name'])) {
        echo "Hello, " . htmlspecialchars($_GET['name']) . "!";
    }
    ?>
</body>
</html>