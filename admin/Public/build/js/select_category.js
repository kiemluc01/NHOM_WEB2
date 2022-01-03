$(document).ready(function() {
        // var iddm = document.getElementById('category').value
        $.ajax({
            url: "Models/DataCategory.php",
            dataType: 'json',
            success: function(data) {
               $("#category").htm("");
                for (i = 0; i < data.length; i++) {
                    var book = data[i]
                        str = "<option value='" + book['idDanhmuc']+"'>"+book['Tendanhmuc']+"</option>";       
                        $("#category").append(str);          
                }
                $( "#category").on("change", function(e) { select_book();});

            }
        });
});