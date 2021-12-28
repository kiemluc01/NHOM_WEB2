function showBook(filter) {
    if (filter.length == 0) {
        // document.getElementById("liveSearch").innerHTML = "";
        document.getElementById("liveSearch").style.border = "2px solid red";
    }
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("liveSearch").innerHTML=this.responseText;
            document.getElementById("liveSearch").style.border="2px solid yellow"
        }
    }
    xmlhttp.open("GET", "Views/modules/livesearchbuonba.php?q=" + filter, true);
    xmlhttp.send();
    // document.getElementById("liveSearch").style.background = "orange";
}