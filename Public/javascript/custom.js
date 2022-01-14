$(document).ready(function () {
    $(".btnDeleteCmt").on("mouseup", function () {
        var id = $(this).attr("data-cmt-id");
        $("#cmtId").text(id);
    });
});
