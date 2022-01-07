function select_book(){
    var iddm = $('#category').val();
        $.ajax({
            url: "http://localhost/nhom_web2/admin/Models/DataBooks.php?idDanhmuc=" + iddm,
            dataType: 'json',
            success: function(data) {
                var str = '<table><tr> <th>STT</th><th>Tên sách</th><th>Tên tác giả</th><th>Năm xuất bản</th><th>Ngày Đăng</th><th>Hình ảnh sách</th> <th>Danh Mục</th><th>Thao tác</th></tr>'
                var stt = 1
                for (i = 0; i < data.length; i++) {
                    var book = data[i]
                    var dm = book['idDanhmuc']
                    if (iddm == dm) {
                        str = str + '<tr><td>' + stt + '</td><td>' + book['Tensach'] + '</td><td>' + book['Tacgia'] + '</td><td>' + book['NXB'] + '</td><td>' + book['NgayDang'] + '</td><td>' + book['imgSach'] + '</td><td>' + book['Tendanhmuc'] + '</td><td><input type="submit" value="Xóa" name="' + book['idSach'] + '" id="' + book['idSach'] + '"><input type="submit" value="sửa" name="' + book['idSach'] + '" id="' + book['idSach'] + '"></td></tr>'
                        stt++
                    }
                }
                str = str + '</table>'
                document.getElementById('data_table').innerHTML = ""
                document.getElementById('data_table').innerHTML = str
            }
})
}