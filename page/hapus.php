<?php 
    if (isset($_POST['hapus_listuser'])) {

    $hapus = mysqli_query($CONNECT,"delete from user where id='".$_POST['id']."'");
    $_SESSION['message'] = '<div class="alert alert-success ml-3 mr-3 mt-3">
                                <span><b>DATA Berhasil di Hapus</b></span>
                                </div>';
    }
    header("location:".$url."?page=listuser");
?>