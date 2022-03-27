<?php
    session_start();

    // echo "TEST";

    if ( isset($_POST['register'])){
        $frontname = $_POST['frontname'];
        $middlename = $_POST['middlename'];
        $backname = $_POST['backname'];
        $birthplace = $_POST['birthplace'];
        $birthdate = $_POST['birthdate'];
        $nik = $_POST['nik'];
        $citizenship = $_POST['citizenship'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $postalcode = $_POST['postalcode'];
        
        $picture = $_FILES['profile']['name'];
        $tempName = $_FILES['profile']['tmp_name'];

        $dirTujuan = "profilepic/";

        $upload = move_uploaded_file($tempName, $dirTujuan.$picture);

        if($upload){
        }else{
            echo "File upload was Unsuccessful :(";
        }

        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpass = $_POST['confirmpass'];

        
        $_SESSION['frontnameSession'] = $frontname;
        $_SESSION['middlenameSession'] = $middlename;
        $_SESSION['backnameSession'] = $backname;
        $_SESSION['birthplaceSession'] = $birthplace;
        $_SESSION['birthdateSession'] = $birthdate;
        $_SESSION['nikSession'] = $nik;
        $_SESSION['citizenshipSession'] = $citizenship;
        $_SESSION['emailSession'] = $email;
        $_SESSION['phoneSession'] = $phone;
        $_SESSION['addressSession'] = $address;
        $_SESSION['postalcodeSession'] = $postalcode;

        // $picture = $_FILES['profile']['name'];
        $_SESSION['profileSession'] = $dirTujuan.$picture;

        $_SESSION['usernameSession'] = $username;
        $_SESSION['passwordSession'] = $password;
        
        // header("location:index.php");
        // echo "<script>document.location.href = 'welcome.php'</script>";
        if($_POST['password'] == $_POST['confirmpass']){
            $_SESSION['passwordSession'] = $password;
            header("location:welcome.php");
            // echo "<script>document.location.href = 'welcome.php'</script>";
        }else{
            echo "Password 1 and Password 2 don't match</br>";
            echo "<a href='register.php'>Back to Register Form</a><br>";
            echo "<a href='welcome.php'>Back to Welcome Page</a><br>";
        }

    }
?>