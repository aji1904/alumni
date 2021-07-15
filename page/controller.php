<?php
// if login
if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = md5($_POST['password']);
    
    $cek_user = mysqli_query($CONNECT, "SELECT * FROM admin WHERE username='".$username."' ");
    
    if (mysqli_num_rows($cek_user) == 1) {
        $cek_user_password_admin = mysqli_query($CONNECT, "Select password from admin where password='".$password."'");
        if (mysqli_num_rows($cek_user_password_admin) == 1) {
        $_SESSION['user'] = "admin";
        header("location:".$url."?page=cari");
        exit();
        } else {
        $_SESSION['message'] = "Password admin Salah";
        header("location:".$url."?page=login");
        exit();
        }
    }
    
    if (mysqli_num_rows($cek_user) == 0) {
        $cek_user_biasa = mysqli_query($CONNECT, "Select username from user where username='".$username."'");
        if (mysqli_num_rows($cek_user_biasa) == 1) {
        // cek password
        $cek_user_password = mysqli_query($CONNECT, "Select password from user where password='".$password."'");
        if (mysqli_num_rows($cek_user_password) == 1) {
            $_SESSION['user'] = "user";
            header("location:".$url."?page=cari");
            exit();
        } else {
            $_SESSION['message'] = "Password Anda Salah";
            header("location:".$url."?page=login");
            exit();
        }
        } else {
        $_SESSION['message'] = "Username Tidak Terdaftar";
        header("location:".$url."?page=login");
        exit();
        } 
    }
    
}

// if Logout
if (isset($_POST['logout'])) {
    session_destroy();
    echo $_SESSION['user'];
}
?>