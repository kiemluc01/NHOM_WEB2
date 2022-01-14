<?php
$member = loadModel('Member');
if (isset($_REQUEST['loadAVT'])) {
    $file = $_FILES['AVT']['tmp_name'];
    $path = 'Public/images/' . $_FILES['AVT']['name'];
    if (move_uploaded_file($file, $path)) {
        $person->update_IMGAVT($path);
        echo "<script>
            $(document).ready(function(){
                document.getElementById('loadAVT').style.display = 'none';
                
            });
        </script>";
    } else
        echo 'fail';
}
if (isset($_REQUEST['loadBGR'])) {
    $file = $_FILES['BGR']['tmp_name'];
    $path = 'Public/images/' . $_FILES['BGR']['name'];
    if (move_uploaded_file($file, $path)) {
        $person->update_IMGBGR($path);
        echo "<script>
            $(document).ready(function(){
                document.getElementById('message').style.display = 'block';
            });
        </script>";
    } else
        echo 'fail';
}
?>
<div class="fluid-container mt-2">
    <div class="cover-photo" style="background: url(<?php echo (substr($member->BGR(), 0, 4) == "http" ? $member->BGR() : "admin/" . $member->BGR()); ?>);">
        <div class="profile-photo-container">
            <img src="<?php echo (substr($member->AVT(), 0, 4) == "http" ? $member->AVT() : "admin/" . $member->AVT()); ?>" alt="Profile photo" class="profile">
            <button class="btn btn-info text-light" id="edit_avt"><i class="fas fa-camera"></i></button>
        </div>
        <button class="btn btn btn-info text-white" id="edit_bgr"><i class="fas fa-camera"></i></button>
    </div>
    <div class="profile-name custom-min-box-fit-content">
        <h5 class="[  custom-book-info-heading  custom-book-info-heading--5  ]">Tên thành viên</h5>
    </div>
    <p class="profile-email">Email thành viên</p>
    <div class="dialog" id="dialog_bgr">
        <div style="width:98%">
            <center>
                <h3>Cập nhật ảnh bìa</h3><br>
                <form action="" method="post">
                    <input type="file" name="upload_BGR" id="upload_BGR">
                    <input type="submit" value="C?p nh?t" name="loadBGR">
                </form>
            </center>
        </div>

        <img src="https://topbag.vn/themes/giaodienweb/images/icon-close.jpg" id="close_bgr" alt="" style="width:30px;height:30px;">
    </div>
</div>
<div class="container mt-5 custom-max-box">
    <div class="row">
        <div class="col-lg-3">
            <ul class="nav flex-column nav-pills" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="pill" href="#userinfo">
                        <i class="fas fa-user-cog me-3"></i>
                        Thông tin tài khoản
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#library">
                        <i class="fas fa-book me-3"></i> Thư viện
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#notifi">
                        <i class="fas fa-bell me-3"></i> Thông báo
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#passchange">
                        <i class="fas fa-key me-3"></i> Đổi mật khẩu
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?option=login" onclick="destroy()">
                        <i class="fas fa-sign-out-alt me-3"></i> Đăng xuất
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-lg-9">
            <div class="tab-content">
                <div class="tab-pane container active" id="userinfo">
                    <form action="" method="post">
                        <div class="mb-3 mt-3">
                            <label for="user_name" class="form-label">Tên tài khoản:</label>
                            <input type="text" class="form-control" id="user_name" placeholder="vanhoang" name="user_name">
                        </div>
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Họ và tên:</label>
                            <input type="text" class="form-control" id="fullname" placeholder="Văn Hoàng" name="fullname">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="vanhoang@gmail.com" name="email">
                        </div>
                        <div class="mb-3 d-flex gap-5">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Nam
                                <label class="form-check-label" for="radio1"></label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Nữ
                                <label class="form-check-label" for="radio2"></label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="dbo" class="form-label">Ngày sinh:</label>
                            <input type="date" class="form-control" id="dbo" name="dbo">
                        </div>
                        <button type="submit" class="btn btn-lg text-light btn-info fw-bold border-info bg-info">Lưu</button>
                    </form>
                </div>
                <div class="tab-pane container fade" id="library">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3 d-flex gap-3">
                            <div>
                                <img src="admin\Public\images\avatar\ahuhu.jpg" alt="" width="80">
                            </div>
                            <div class="d-flex flex-column justify-content-between flex-grow-1">
                                <div><a href="#">Book name (link to book)</a></div>
                                <div class="text-end"><a href="#">Xoá khỏi danh sách yêu thích</a></div>
                            </div>
                        </li>
                        <li class="list-group-item p-3 d-flex gap-3">
                            <div>
                                <img src="admin\Public\images\avatar\ahuhu.jpg" alt="" width="80">
                            </div>
                            <div class="d-flex flex-column justify-content-between flex-grow-1">
                                <div><a href="#">Book name (link to book)</a></div>
                                <div class="text-end"><a href="#">Xoá khỏi danh sách yêu thích</a></div>
                            </div>
                        </li>
                        <li class="list-group-item p-3 d-flex gap-3">
                            <div>
                                <img src="admin\Public\images\avatar\ahuhu.jpg" alt="" width="80">
                            </div>
                            <div class="d-flex flex-column justify-content-between flex-grow-1">
                                <div><a href="#">Book name (link to book)</a></div>
                                <div class="text-end"><a href="#">Xoá khỏi danh sách yêu thích</a></div>
                            </div>
                        </li>
                        <li class="list-group-item p-3 d-flex gap-3">
                            <div>
                                <img src="admin\Public\images\avatar\ahuhu.jpg" alt="" width="80">
                            </div>
                            <div class="d-flex flex-column justify-content-between flex-grow-1">
                                <div><a href="#">Book name (link to book)</a></div>
                                <div class="text-end"><a href="#">Xoá khỏi danh sách yêu thích</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane container fade" id="notifi">
                    Tính năng đang xây dựng
                </div>
                <div class="tab-pane container fade" id="passchange">
                    <form action="" method="post">
                        <div class="mb-3 mt-3">
                            <label for="pwd_change" class="form-label">Mật khẩu mới:</label>
                            <input type="password" class="form-control" id="pwd_change" name="pwd_change">
                        </div>
                        <div class="mb-3">
                            <label for="pwd_change_confirm" class="form-label">Nhập lại mật khẩu:</label>
                            <input type="password" class="form-control" id="pwd_change_confirm" name="pwd_change_confirm">
                        </div>
                        <button type="submit" class="btn btn-lg text-light btn-info fw-bold border-info bg-info">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div>
    <div id="BGR">
        <img src="<?php echo (substr($member->BGR(), 0, 4) == "http" ? $member->BGR() : "admin/" . $member->BGR()); ?>" alt="ảnh bìa" class="bgr">
        <img src="http://cdn.onlinewebfonts.com/svg/img_211436.png" alt="nút sauwr ảnh" class="edit" id="edit_bgr">
    </div>
    <div id="AVT">
        <img src="<?php echo (substr($member->AVT(), 0, 4) == "http" ? $member->AVT() : "admin/" . $member->AVT()); ?>" alt="?nh d?i di?n" class="avt">
        <img src="http://cdn.onlinewebfonts.com/svg/img_211436.png" alt="n�t s?a ?nh" id="edit_avt" class="edit">
    </div>
    <div class="infor">

    </div>
</div> -->
<!-- form load ?nh b�a -->
<div class="dialog" id="dialog_bgr">
    <div style="width:98%">
        <center>
            <h3>c?p nh?t ?nh b�a</h3><br>
            <form action="" method="post">
                <input type="file" name="upload_BGR" id="upload_BGR">
                <input type="submit" value="C?p nh?t" name="loadBGR">
            </form>
        </center>
    </div>

    <img src="https://topbag.vn/themes/giaodienweb/images/icon-close.jpg" id="close_bgr" alt="" style="width:30px;height:30px;">
</div>
<!-- form load ?nh d?i di?n -->
<div class="dialog" id="dialog_avt">
    <div style="width:98%">
        <center>
            <h3>Cập nhật ảnh đại diện</h3><br>
            <form action="" method="post">
                <input type="file" name="upload_AVT" id="upload_AVT">
                <input type="submit" value="C?p nh?t" name="loadAVT">
            </form>
        </center>
    </div>
    <img src="https://topbag.vn/themes/giaodienweb/images/icon-close.jpg" id="close_avt" alt="" style="width:30px;height:30px;">
</div>
<!-- message  -->
<div id="message" class="dialog">
    <center>
        <br>
        <h3>Cập nhật thành công</h3><br>
        <input type="submit" value="OK" id="ok_message">
    </center>

</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#ok_message').click(function() {
            document.getElementById('message').style.display = 'none'
        });
        $('#edit_bgr').click(function() {
            document.getElementById('dialog_bgr').style.display = 'flex'
        })
        $('#edit_avt').click(function() {
            document.getElementById('dialog_avt').style.display = 'flex'
        })
        $('#close_avt').click(function() {
            document.getElementById('dialog_avt').style.display = 'none'

        })
        $('#close_bgr').click(function() {
            document.getElementById('dialog_bgr').style.display = 'none'
        })
    })
</script>