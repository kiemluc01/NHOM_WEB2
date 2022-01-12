function showBook(filter, inp) {
    if (filter.length == 0) {
        // document.getElementById("liveSearch").innerHTML = "";
        document.getElementById("liveSearch").style.display = "none";
    }
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("liveSearch").style.display = "block";
            document.getElementById("liveSearch").innerHTML=this.responseText;
            document.getElementById("liveSearch").style.border="2px solid yellow"
        }
    }
    xmlhttp.open("GET", "Views/modules/livesearchbuonba.php?q=" + filter, true);
    xmlhttp.send();
}
function hideliveSearch() {
    document.getElementById("liveSearch").style.display = "none";
}
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