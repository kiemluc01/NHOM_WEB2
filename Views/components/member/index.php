<?php
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
<div>
    <div id="BGR">
        <img src="admin/Public/images/avatar/hailong.jpg" alt="ảnh bìa" class="bgr">
        <img src="http://cdn.onlinewebfonts.com/svg/img_211436.png" alt="nút sauwr ảnh" class="edit" id="edit_bgr">
    </div>
    <div id="AVT">
        <img src="admin/Public/images/avatar/kiemluc.jpg" alt="?nh d?i di?n" class="avt">
        <img src="http://cdn.onlinewebfonts.com/svg/img_211436.png" alt="n�t s?a ?nh" id="edit_avt" class="edit">
    </div>
    <div class="infor">
        <h1>? d�y show th�ng tin</h1>
    </div>
</div>
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
            <h3>c?p nh?t ?nh d?i di?n</h3><br>
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
        <h3>c?p nh?t th�nh c�ng</h3><br>
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