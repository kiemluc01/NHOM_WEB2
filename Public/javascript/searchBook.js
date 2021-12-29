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