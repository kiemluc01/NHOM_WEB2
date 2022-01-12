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
        <img src="admin/Public/images/avatar/hailong.jpg" alt="?nh b�a" class="bgr">
        <img src="http://cdn.onlinewebfonts.com/svg/img_211436.png" alt="n�t s?a ?nh" class="edit">
    </div>
    <div id="AVT">
        <img src="admin/Public/images/avatar/kiemluc.jpg" alt="?nh d?i di?n" class="avt">
        <img src="http://cdn.onlinewebfonts.com/svg/img_211436.png" alt="n�t s?a ?nh" class="edit">
    </div>
    <div class="infor">
        <h1>? d�y show th�ng tin</h1>
    </div>
</div>
<!-- form load ?nh b�a -->
<div class="dialog" id="dialogbgr">
    <center>
        <h3>c?p nh?t ?nh b�a</h3><br>
        <form action="" method="post">
            <input type="file" name="upload_BGR" id="upload_BGR">
            <input type="submit" value="C?p nh?t" name="loadBGR">
        </form>
    </center>

</div>
<!-- form load ?nh d?i di?n -->
<div class="dialog" id="dialogavt">
    <center>
        <h3>c?p nh?t ?nh d?i di?n</h3><br>
        <form action="" method="post">
            <input type="file" name="upload_AVT" id="upload_AVT">
            <input type="submit" value="C?p nh?t" name="loadAVT">
        </form>
    </center>
</div>
<!-- message  -->
<div id="message" class="dialog">
    <center>
        <br>
        <h3>c?p nh?t th�nh c�ng</h3><br>
        <input type="submit" value="OK" id="ok_message">
    </center>
</div>
<script>
    jQuery.noConflict();
    jQuery(document).ready(function() {
        $('#ok_message').click(function() {
            document.getElementById('message').style.display = 'none'
        })(jQuery);
    })

    // function close() {
    //     document.getElementById('message').style.display = 'none'
    // }
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.2.8/emojionearea.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.2.8/emojionearea.min.js"></script>

<script src="https://unpkg.com/file-upload-with-preview@4.0.2/dist/file-upload-with-preview.min.js"></script>