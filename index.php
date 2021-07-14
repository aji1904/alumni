<!DOCTYPE html>
<html lang="en">

<?php
  // dev mode 
  // error_reporting(0);

  include_once "config.php";
  include_once "components/header.php";
?>

<?php
  $action = $_GET['page'];
  $home = $url."?page=home";
    
  switch ($action) {
    case 'home'                           : include_once "page/index.php" ; break;
    case 'cari'                           : include_once "page/cari.php" ; break;
    case 'tambah'                         : include_once "page/tambahUser.php" ; break;
    case 'data'                           : include_once "page/data.php" ; break;
    case 'profil'                         : include_once "page/profil.php" ; break;
    case 'login'                          : include_once "page/login.php" ; break;
    case 'logout'                         : session_destroy(); session_unset(); header("location:".$home);  ; break;
    case 'listuser'                       : include_once "page/listuser.php" ; break;
    case 'listdata'                       : include_once "page/listalumni.php" ; break;
    
    default                         : header("location: $home"); break;
  }

  
  include "components/script.php";
?>



</html>