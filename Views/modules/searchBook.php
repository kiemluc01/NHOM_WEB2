<form action="" method="post" class="d-flex" id="searchBox">
    <input type="search" name="find" placeholder="Tìm kiếm .." class="form-control me-2 prompt" autocomplete="off" onfocus="showBook(this.value)" onkeyup="showBook(this.value)">
    <!--   -->
    <div id="liveSearch" class="list-group">
    </div>
    <button type="submit" name="findbook" id="findbook" class="btn btn-outline-dark"><i class="fa fa-search"></i></button>
</form>