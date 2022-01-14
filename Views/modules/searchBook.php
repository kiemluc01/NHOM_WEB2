<form action="" method="post" class="d-flex position-relative">
    <input type="text" id="#searchBookBtn" name="find" placeholder="Tìm kiếm .." class="form-control me-2" onfocus="showBook(this.value)" onkeyup="showBook(this.value)" onblur="hideliveSearch()">
    <div id="liveSearch"></div>
    <button type="submit" name="findbook" id="findbook" class="btn btn-outline-dark"><i class="fa fa-search"></i></button>
</form>