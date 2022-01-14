$(document).ready(function () {
    $("#btnDeleteCmt").on("mouseup", function () {
        $("#cmtId").text($("#btnDeleteCmt").attr("data-cmt-id"));
    });
});
