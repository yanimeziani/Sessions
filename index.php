<?php
session_start();
$message = '';
if(!isset($_SESSION['email'])){
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if(!empty($email) && !empty($password)){
            if($email == 'yani.meziani@protonmail.com' && $password == '123456'){
                
                $_SESSION['email'] = $email;
                header('Location: welcome.php');
                exit();
            } else {
                $message = 'Email or password is incorrect.';
            }
        }else{
            $message = 'Please fill in all fields.';
        }
    }
} else {
    header('Location: welcome.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="index.php" method="post">
        <h1>Login to this website</h1>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Login">
        <p><?php echo $message; ?></p>
    </form>
</body>
</html>