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
<center>
    <form action="" method="post" id="register">
        <table class="register">
            <tr>
                <td class="register">Email: </td>
                <td class="register">
                    <input type="text" name="Email" id="Email" class="register" placeholder="enter your email!">
                </td>
            </tr>
            <tr>
                <td class="register">Username: </td>
                <td class="register">
                    <input type="text" name="user" id="user" class="register" placeholder="enter your user!">
                </td>
            </tr>
            <tr>
                <td class="register">Password: </td>
                <td class="register">
                    <input type="password" name="password" id="password" class="register" placeholder="enter your password!">
                </td>
            </tr>
            <tr>
                <td class="register">Confirm Password: </td>
                <td class="register">
                    <input type="password" name="confirm_pass" id="confirm_pass" class="register" placeholder="confirm your password!">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="register">
                    <center><input type="submit" value="Đăng kí" id="btnregister"></center>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="register">
                    <center style="color: #fff;">bạn đã có tài khoản? <a href="index.php?option=login" class="register">Đăng nhập</a></center>
                </td>
            </tr>
        </table>
    </form>
</center>