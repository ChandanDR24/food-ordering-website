<!DOCTYPE html>
<html lang="en">
<?php
session_start();
error_reporting(0);
include("../connection/connect.php");

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $mql = "INSERT INTO `admin` (`username`, `password`, `email`, `date`) VALUES ('$username', '".md5($password)."', '$email', NOW())";
    
    if(mysqli_query($db, $mql)) {
        echo "<script>alert('Registration successful!');</script>";
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Error in registration: " . mysqli_error($db) . "');</script>";
    }
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Admin-Registration</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 20px; margin: 0; overflow-x: hidden;">
    
    <div class="container">
        
        <div class="form" style="max-width: 90%; width: 400px; margin: 0 auto; padding: 30px; background: #fff; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
            <h1 style="text-align: center; color: #2c3e50; font-size: clamp(20px, 4vw, 28px); margin-bottom: 20px; font-weight: 600;">Admin Registration</h1>
            <div class="thumbnail" style="text-align: center; margin-bottom: 25px;">
                <img src="images/manager.png" style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%; box-shadow: 0 5px 15px rgba(0,0,0,0.1);" />
            </div>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required 
                        style="width: 100%; padding: 12px; margin-bottom: 15px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 14px; transition: all 0.3s ease; outline: none; box-sizing: border-box;">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email Address" required 
                        style="width: 100%; padding: 12px; margin-bottom: 15px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 14px; transition: all 0.3s ease; outline: none; box-sizing: border-box;">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required 
                        style="width: 100%; padding: 12px; margin-bottom: 20px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 14px; transition: all 0.3s ease; outline: none; box-sizing: border-box;">
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block" 
                    style="width: 100%; padding: 12px; background: linear-gradient(to right, #5c4ac7, #4f3eb0); color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 14px; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(92, 74, 199, 0.3);">
                    Register
                </button>
            </form>
            <p style="text-align: center; margin-top: 20px; color: #666; font-size: 14px;">
                Already have an account? <a href="index.php" style="color: #5c4ac7; text-decoration: none; font-weight: 600; transition: color 0.3s ease;">Login</a>
            </p>
        </div>
    </div>
        
</body>

</html>