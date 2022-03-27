<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="header">
        Aplikasi Pengelolaan Keuangan
        <div class="homebox"><a href="home.php">Home</a></div>
        <div class="profilebox"><a href="profile.php">Profile</a></div>
        <?php
            if(isset($_SESSION['usernameSession'])!=""){
                echo "<a href='logout.php'>Logout</a><br>";
            }
        ?>
    </div>
    <div class="homebody">
        Hello <span class="boldname"><?php echo $_SESSION['frontnameSession'] . " " . $_SESSION['middlenameSession'] 
        . " " . $_SESSION['backnameSession'] ?></span> , Selamat datang di Aplikasi Pengelolaan Keuangan
    </div>
</body>
</html>