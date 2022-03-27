<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="header">
        Aplikasi Pengelolaan Keuangan
        <div class="homebox"><a href="home.php">Home</a></div>
        <div class="profilebox"><a href="profile.php">Profile</a></div>
        <div class="logout"><a href="logout.php">Logout</a></div>
    </div>
    <div class="headertitle">Profil Pribadi</div>
    <div class="profilebody">
        <table class="center">
            <tr>
                <td>Nama Depan</td>
                <th><?php echo $_SESSION['frontnameSession'] ?></th>
                <td>Nama Tengah</td>
                <th><?php echo $_SESSION['middlenameSession'] ?></th>
                <td>Nama Belakang</td>
                <th><?php echo $_SESSION['backnameSession'] ?></th>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <th><?php echo $_SESSION['birthplaceSession'] ?></th>
                <td>Tgl Lahir</td>
                <th><?php echo $_SESSION['birthdateSession'] ?></th>
                <td>NIK</td>
                <th><?php echo $_SESSION['nikSession'] ?></th>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <th><?php echo $_SESSION['citizenshipSession'] ?></th>
                <td>Email</td>
                <th><?php echo $_SESSION['emailSession'] ?></th>
                <td>No HP</td>
                <th><?php echo $_SESSION['phoneSession'] ?></th>
            </tr>
            <tr>
                <td>Alamat</td>
                <th><?php echo $_SESSION['addressSession'] ?></th>
                <td>Kode Pos</td>
                <th><?php echo $_SESSION['postalcodeSession'] ?></th>
                <td>Foto Profil</td>
                <th><img src="<?php echo $_SESSION['profileSession'] ?>" 
                width=100 height=100 alt=Image path Invalid name=image /></th>
            </tr>
        </table>
    </div>
</body>
</html>