<?php

if (isset($_POST['user_login']) &&  isset($_POST['password_login'])) {
    $user = $_POST['user_login'];
    $pass = $_POST['password_login'];
    if ($user != null && $pass != null) {
        $Member = loadModel('Member');
        $login = $Member->login($user, $pass);
        if ($login === true) {
            $_SESSION['user'] = $user;
            if ($user == 'admin') {

                echo '<script> location.href="admin/index.php" </script>';
            } else
                echo '<script> alert("Đăng nhập thành công"); 
            location.assign("index.php?condition=' . $user . '");
        </script>';
        } else
            echo '<script> alert("Sai tài khoản hoặc mật khẩu");
            return false; 
            </script>';
    }
    //  else
    //     echo '<script> alert("không được bỏ trống các thuộc tính") </script>';
} else {
    unset($_SESSION['user']);
}

// }
?>
<?php
if (isset($_POST['btnlogin'])) {
}
?>
<div class="container mt-5 text-center">
    <div class="row">
        <div class="col-12">
            <div class="card w-50 mx-auto p-4">
                <div class="card-header">
                    <h1 class="display-5">Đăng nhập</h1>
                </div>
                <div class="card-body">
                    <form action="" method="POST" novalidate class="needs-validation" id="login">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="user_login" required>
                            <label for="uname">Tên tài khoản</label>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password_login" required>
                            <label for="pass">Mật khẩu</label>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <button class="w-100 btn btn-lg text-light btn-secondary fw-bold border-dark bg-dark" type="submit">Đăng nhập</button>
                    </form>
                </div>
                <div class="card-footer">
                    <p>Bạn chưa có tài khoản? <a href="index.php?option=register" id="btnlogin_register">Tạo tài khoản mới</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>