<?php
    $message= "";
    session_start();
    if(isset($_SESSION['email'])){
        $message = 'Welcome, ' . $_SESSION['email'];
    } else {
        header('Location: index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <p><?php echo $message; ?></p>
    <a href="secure.php"><p>Go to very secure page -></p></a>
    <a href="logout.php"><p>Logout</p></a>
</body>
</html>