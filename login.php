<?php

require 'database/mabour.php';

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($mabour,"SELECT*FROM pengunjung WHERE nama = '$username'");

    if(mysqli_num_rows($result) === 1){
        header("Location: ./index.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <style>
        
    </style>
</head>
<body>
    <div class="body">
        <div class=></div>
        <div class="wrapper"></dv>
        <form action="" method="post">
            <h1>Login</h1>
            <h2></h2>
            <div class="input-box">
                <input type="text" name="username" placeholder="Nama"
                required>
            </div>
            <div class="input-box">
                <input type="text" name="password" placeholder="No. Telp"
                required>
            </div>
            <div>
                <button name="login" type="submit" id="continue-button" class="btn text-white">Submit</button>
            </div>
        </form>
        </div>  
    </div>
</body>
</html>