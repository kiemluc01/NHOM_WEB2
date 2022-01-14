function showBook(filter, inp) {
    if (filter.length == 0) {
        // document.getElementById("liveSearch").innerHTML = "";
        document.getElementById("liveSearch").style.display = "none";
    }
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var resultBox = document.getElementById("liveSearch");
            resultBox.style.display = "block";
            while (resultBox.hasChildNodes()) {
                resultBox.removeChild(resultBox.firstChild);
            }
            var listSearch = this.responseText.split("|");
            listSearch.forEach(book => {
                var bookInfo = book.split("_");
                var bookName = bookInfo[0];
                var bookId = bookInfo[1];
                var bookLinkDiv = document.createElement("div");
                var bookLink = document.createElement("a");
                var bookLinkText = document.createTextNode(bookName);
                bookLink.appendChild(bookLinkText);
                bookLink.style.cursor = "pointer";
                bookLink.classList.add("list-group-item", "list-group-item-action");
                bookLink.title = bookName;
                if (bookName != "Không tìm thấy kết quả phù hợp") {
                    bookLink.href = "index.php?option=book&idSach=" + bookId;
                    bookLinkDiv.appendChild(bookLink);
                    resultBox.appendChild(bookLinkDiv);
                }
            });
        }
    }
    xmlhttp.open("GET", "Views/modules/livesearchbuonba.php?q=" + filter, true);
    xmlhttp.send();
}
function hideliveSearch() {
    document.getElementById("liveSearch").style.display = "none";
}
document.addEventListener('mouseup', function (e) {
    var box = document.getElementById("searchBox");
    if (!box.contains(e.target)) {
        hideliveSearch();
    }
});
// Search chapter name
function searchChapterName() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("searchChapName");
    filter = input.value.toUpperCase();
    ul = document.getElementById('chapterNameList');
    li = ul.getElementsByTagName('li');
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName('a')[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}