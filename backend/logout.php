<?php 
    include('./config/connect.php');
    session_start();
    if(isset($_SESSION['user'])){
        unset($_SESSION['user']);
        $_SESSION['logout'] = "<div class='alert-success text-center'>Đăng xuất thành công</div>";  
        echo "<script>window.location.href='/index.php'</script>";
    }else{
        echo "Lỗi đăng xuất";
    }
?>