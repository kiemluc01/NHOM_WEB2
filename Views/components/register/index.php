<?php
// if (isset($_POST['btnregister'])) {
if (isset($_POST['user']) && isset($_POST['Email']) && isset($_POST['password']) && isset($_POST['confirm_pass'])) {
    $email = $_POST['Email'];
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirm_pass'];
    if ($email != null &&  $user != null && $user != null && $confirm_pass != null) {
        $Member = loadModel('Member');
        $register = $Member->register($email, $user, $pass, $confirm_pass);
        if ($register === true) {
            echo '<script> alert("đăng kí thành công"); 
            location.assign("index.php?option=login");
        </script>';
        } else
            echo $register;
    } else
        echo '<script> alert("không được bỏ trống các thuộc tính") </script>';
}
// }
?>
<?php
if (isset($_POST['btnregister'])) {
}
?>
<div class="card">
    <h2>Đăng ký</h2>
    <form action="" method="post" id="register">
        <div class="row">
            <label for="email">Email:</label>
            <input type="text" name="Email" id="email" class="register">
        </div>
        <div class="row">
            <label for="uname">Tên tài khoản: </label>
            <input type="text" name="user" id="uname" class="register">
        </div>
        <div class="row">
            <label for="pass">Mật khẩu: </label>
            <input type="password" name="password" id="pass" class="register">
        </div>
        <div class="row">
            <label for="cpass">Nhập lại mật khẩu: </label>
            <input type="password" name="confirm_pass" id="cpass" class="register">
        </div>
        <div class="row">
            <input type="submit" value="Đăng kí" id="btnregister">
        </div>
        <div class="row">
            <p>Bạn đã có tài khoản? <a href="index.php?option=login" class="register">Đăng nhập</a></p>
        </div>
    </form>
</div>