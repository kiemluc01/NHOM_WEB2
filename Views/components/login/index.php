<?php
// if (isset($_POST['btnregister'])) {
if (isset($_POST['user_login']) &&  isset($_POST['password_login'])) {
    $user = $_POST['user_login'];
    $pass = $_POST['password_login'];
    if ($user != null && $pass != null) {
        $Member = loadModel('Member');
        $login = $Member->login($user, $pass);
        if ($login === true) {
            echo '<script> alert("đăng nhập thành công"); 
            location.assign("index.php?condition=' . $user . '");
        </script>';
        } else
            echo '<script> alert("sai tài khoản hoặc mật khẩu");
            return false; 
            </script>';
    } else
        echo '<script> alert("không được bỏ trống các thuộc tính") </script>';
}
// }
?>
<?php
if (isset($_POST['btnlogin'])) {
}
?>
<div class="card">
    <h2>Đăng nhập</h2>
    <form action="" method="post" id="login">
        <div class="row">
            <label for="uname">Tên tài khoản: </label>
            <input type="text" name="user_login" id="uname" class="login">
        </div>
        <div class="row">
            <label for="pass">Mật khẩu: </label>
            <input type="password" name="password_login" id="pass" class="login">
        </div>
        <div class="row">
            <input type="submit" value="Đăng nhập" id="btnlogin">
        </div>
        <div class="row">
            <p>Bạn chưa có tài khoản? <a href="index.php?option=register" id="btnlogin_register">Tạo tài khoản mới</a></p>
        </div>
    </form>
</div>