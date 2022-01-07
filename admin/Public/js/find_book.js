$(document).ready(function() {
    $("#category").on('change',function(){
        var value = $(this).val();
        $.ajax({
            url:"select_book.php",
            type:"POST",
            data:'idDanhmuc='+ value,
            beforeSend:function() {
                $(".data_table").html("<span>Working....</span>");
            },
            success:function(data){
                $(".data_table").html(data);    
            }
        })
    })
})