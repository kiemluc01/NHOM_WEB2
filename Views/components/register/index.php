<?php
// if (isset($_POST['btnregister'])) {
if (isset($_POST['user']) && isset($_POST['Email']) && isset($_POST['password']) && isset($_POST['confirm_pass'])) {
    $email = $_POST['Email'];
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirm_pass'];
    if ($email != null &&  $user != null && $pass != null && $confirm_pass != null) {
        $Member = loadModel('Member');
        $register = $Member->register($email, $user, $pass, $confirm_pass);
        if ($register === true) {
            echo '<script> alert("Đăng kí thành công"); 
            location.assign("index.php?option=login");
        </script>';
        } else
            echo $register;
    } else
        echo '<script> alert("Vui lòng điền đầy đủ các thông tin") </script>';
}
// }
?>
<?php
if (isset($_POST['btnregister'])) {
}
?>
<div class="container mt-5 text-center">
    <div class="row">
        <div class="col-12">
            <div class="card w-50 mx-auto p-4">
                <div class="card-header">
                    <h1 class="display-5">Đăng ký</h1>
                </div>
                <div class="card-body">
                    <form action="" method="post" novalidate class="needs-validation" id="register">
                        <div class="mt-3 mb-3">
                            <div class="form-floating mb-3">
                                <input type="text" name="Email" required class="form-control">
                                <label for="email">Email</label>
                            </div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="user" required class="form-control">
                            <label for="uname">Tên tài khoản</label>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" required class="form-control">
                            <label for="pass">Mật khẩu</label>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="confirm_pass" required class="form-control">
                            <label for="cpass">Nhập lại mật khẩu</label>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <button class="w-100 btn btn-lg text-light btn-secondary fw-bold border-dark bg-dark" type="submit">Đăng ký</button>
                    </form>
                </div>
                <div class="card-footer">
                    <p>Bạn đã có tài khoản? <a href="index.php?option=login" class="register">Đăng nhập</a></p>
                </div>
            </div>
        </div>
    </div>
</div>