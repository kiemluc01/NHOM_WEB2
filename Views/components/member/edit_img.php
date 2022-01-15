<?php
include('Views/components/member/index.php');
if (isset($_REQUEST['upload_AVT'])) {
    echo '<script> alert("m") </script>';
    $file = $_FILES['upload_AVT']['tmp_name'];
    $path = 'Public/images/' . $_FILES['upload_AVT']['name'];
    if (move_uploaded_file($file, 'admin/' . $path)) {
        $member->update_AVT($path);
        echo "<script>
            $(document).ready(function(){
                document.getElementById('loadAVT').style.display = 'none';
                window.location='index.php?option=member';
            });
        </script>";
    } else
        echo 'fail';
}
