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
<center>
    <form action="" method="post" id="login">
        <table class="login">
            <tr>
                <td class="login">Username: </td>
                <td class="login">
                    <input type="text" name="user_login" id="user_login" class="login" placeholder="enter your user!">
                </td>
            </tr>
            <tr>
                <td class="login">Password: </td>
                <td class="login">
                    <input type="password" name="password_login" id="password_login" class="login" placeholder="enter your password!">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="login">
                    <center><input type="submit" value="Đăng nhập" id="btnlogin"></center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center style="color: blue;">Bạn chưa có tài khoản?</center>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="login">
                    <center>
                        <a href="index.php?option=register" id="btnlogin_register">
                            Tạo tài khoản mới
                        </a>
                    </center>
                </td>
            </tr>
        </table>
    </form>
</center>