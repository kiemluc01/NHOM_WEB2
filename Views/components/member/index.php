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
        <div class="col-md-3">
            <ul class="dropdown-menu dropdown-menu-light position-static d-block mx-0 border-0 shadow" style="width: 220px;">
                <li>
                    <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                        
                        Documents
                    </a>
                </li>
                <li>
                    <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#image-fill" />
                        </svg>
                        Photos
                    </a>
                </li>
                <li>
                    <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#film" />
                        </svg>
                        Movies
                    </a>
                </li>
                <li>
                    <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#music-note-beamed" />
                        </svg>
                        Music
                    </a>
                </li>
                <li>
                    <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#joystick" />
                        </svg>
                        Games
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#trash" />
                        </svg>
                        Đăng xuất
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9"></div>
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