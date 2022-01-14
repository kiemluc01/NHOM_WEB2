$(document).ready(function() {
    $(".btnDeleteCmt").click(function() {
        var id = $(this).attr("data-cmt-id");
        $("#cmtId").text(id);
    });


    $("#searchBookBtn").on({
        keyup: function() {
            var filter = $(this).value;
            if (filter.length == 0) {
                // document.getElementById("liveSearch").innerHTML = "";
                $("#liveSearch").style.display = "none";
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("liveSearch").style.display = "block";
                    document.getElementById("liveSearch").innerHTML = this.responseText;
                    document.getElementById("liveSearch").style.border = "2px solid yellow"
                }
            }
            xmlhttp.open("GET", "Views/modules/livesearchbuonba.php?q=" + filter, true);
            xmlhttp.send();
        }
    })
    $('.del_f').click(function() {
        var idsach = $(this).attr("id-book");
        var idmember = $(this).attr("id-member");
        $.ajax({
            url: "Models/favourite.php",
            type: "POST",
            data: {
                idsach: idsach,
                idmember: idmember
            },
            success: function(data) {
                $('#book_f').html(data);
                // window.location.reload()
            }
        })
    })
});