<?php
$Listbook = loadModel('Listbook');
if (isset($_REQUEST['btn_add'])) {
  if (isset($_REQUEST['TenChuong']) && isset($_REQUEST['noidung'])) {
    $TenChuong = $_REQUEST['TenChuong'];
    $noidung = $_REQUEST['noidung'];
    $chapter_insert = $Listbook->Insert_chapter($_REQUEST['idSach'], $TenChuong, $noidung);
    if ($chapter_insert) {
      echo '<script>alert("Thêm Thành Công");
      location.assign("?option=quanlysach&sub_option=edit_content_book&idSach=' . $_REQUEST['idSach'] . '");</script>';
    } else {
      echo '<script>alert("Thêm Không Thành Công");</script>';
    }
  }
}

?>
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Quản lý sách <small>Sửa nội dung sách</small></h3>
    </div>
    <div class="title_right">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Three Owls Book <small>Danh Sách Chương</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Settings 1</a>
                <a class="dropdown-item" href="#">Settings 2</a>
              </div>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <!-- Smart Wizard -->
          <div class="row" id="step-1">
            <div class="col-sm-12">
              <?php
              $book = $Listbook->Select_Chapters($_REQUEST['idSach']);
              if ($book->num_rows > 0) {
                while ($row = $book->fetch_assoc()) {
                  $idChuong = $row['idChuong'];
                  $TenChuong = $row['TenChuong'];
                  $noidung = $row['noidung'];
              ?>
                  <div class="list-group">
                    <a href="<?php echo '?option=quanlysach&child_option=find_chapter&idChuong=' . $idChuong; ?>" class="list-group-item list-group-item-action" name="TenChuong" id="TenChuong"><?php echo $TenChuong; ?></a>
                  </div>

                <?php
                }
                ?>
            </div>
          </div>
        </div>
      </div>
      <div class="x_panel">
        <div class="x_title">
          <h2>Three Owls Book <small>Thêm mới chương</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <form id="form_edit_book " class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
            <div id="form_add">
              <div class="form-group row">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tên Chương</label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="TenChuong" class="form-control col" type="text" placeholder="Thêm tên chương" name="TenChuong">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Nội dung chương <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <textarea id="noidung" class="date-picker form-control" value="" name="noidung"></textarea></br>
                </div>
              </div>
            </div>
            <input type="submit" name="btn_add" id="btn_add" class="btn btn-success submit" value="Thêm Mới Chương">
          <?php
              } else {
          ?>
            <div class="form-group row">
              <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tên Chương</label>
              <div class="col-md-6 col-sm-6 ">
                <input id="TenChuong" class="form-control col" type="text" placeholder="Thêm tên chương" name="TenChuong">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Nội dung chương <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <textarea id="noidung" class="date-picker form-control" value="" name="noidung"></textarea></br>
              </div>
            </div>
            <input type="submit" name="btn_add" id="btn_add" class="btn btn-success submit" value="Thêm Mới Chương">
          <?php
              }
          ?>
          </form>
        </div>
      </div>
    </div>
    <!-- End SmartWizard Content -->
    <!-- End SmartWizard Content -->
  </div>
</div>


<script>
  function newDoc() {
    if (document.getElementById('form_add').style.display === "block") {
      document.getElementById('form_add').style.display = "none";
      document.getElementById('btn_add').innerHTML = "Thêm"

    } else {

      document.getElementById('form_add').style.display = "block";
      document.getElementById('btn_add').innerHTML = "Thêm Mới Chương"
    }
  }
</script>