<?php
if (isset($_POST) && !empty($_FILES['file'])) {
    $ext = explode('.', $_FILES['file']['name']); // tách chuỗi khi gặp dấu .
    $ext = $ext[(count($ext) - 1)]; //lấy ra đuôi file
    // Kiểm tra xem có phải file ảnh không
    if ($ext === 'jpg' || $ext === 'png' || $ext === 'gif') {
        // tiến hành upload
        if (move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name'])) {
            // Nếu thành công
            die ('Upload thành công file: ' . $_FILES['file']['name']); //in ra thông báo + tên file
           
        } else { // nếu không thành công
            die('Có lỗi!'); // in ra thông báo
        }
    } else { // nếu không phải file ảnh
        die('Chỉ được upload ảnh'); // in ra thông báo
    }
}