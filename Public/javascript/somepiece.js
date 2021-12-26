var cmtMem = document.getElementsByClassName('cmt_member');
var cmtBook = document.getElementById('cmtBook');
if (cmtMem.length == 0) {
    cmtBook.classList.add("empty-comment")
} else {
    cmtBook.classList.remove("empty-comment");
}