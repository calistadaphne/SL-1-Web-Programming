<?php
    session_start();

    if ( isset($_POST['submit'])){
        if (($_POST['username'] == $_SESSION['usernameSession']) && 
            ($_POST['password'] == $_SESSION['passwordSession'])){
            header("location:home.php");
        }else{
            // echo "Incorrect password and username. Please try again.</br>";
            header("location:login.php");
        }
    }
?>