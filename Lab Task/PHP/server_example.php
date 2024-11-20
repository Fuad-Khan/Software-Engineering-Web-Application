<!DOCTYPE html>
<html>
<head>
    <title>Server Variables</title>
</head>
<body>
    <h2>Server Information</h2>
    <p>PHP Self: <?php echo $_SERVER['PHP_SELF']; ?></p>
    <p>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></p>
    <p>Host: <?php echo $_SERVER['HTTP_HOST']; ?></p>
    <p>User Agent: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
    <p>Request Method: <?php echo $_SERVER['REQUEST_METHOD']; ?></p>
</body>
</html>