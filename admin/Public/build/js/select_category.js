$(document).ready(function() {
        // var iddm = document.getElementById('category').value
        console.log("dkasodksoa")
        $.ajax({
            url: "Models/DataCategory.php",
            dataType: 'json',
            success: function(data) {
                console.log("data:",data)
               $("#category").htm("");
                for (i = 0; i < data.length; i++) {
                    console.log("lỗi...");
                    var book = data[i]
                        str = "<option value='" + book['idDanhmuc']+"'>"+book['Tendanhmuc']+"</option>";       
                        $("#category").append(str);          
                }
                $( "#category").on("change", function(e) { select_book();});

            }
        });
});