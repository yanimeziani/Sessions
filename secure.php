<?php
    $message= "";
    session_start();
    if(isset($_SESSION['email'])){
        $message = 'Here is my bank account password: <strong>123456</strong>';
    } else {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure</title>
</head>
<body>
    <p><?php echo $message;?></p>
</body>
</html>