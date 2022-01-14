<?php
if (isset($_REQUEST['btn_add'])) {
  $tensach = $_POST['Tensach'];
  $tacgia = $_POST['Tacgia'];
  $nxb = $_POST['NXB'];
  $danhmucsach = $_POST['idDanhmuc'];
  $file = $_FILES['imgSach']['tmp_name'];
  $imgSach = 'Public/images/' . $_FILES['imgSach']['name'];
  $tomtatND = $_POST['tomtatND'];
  move_uploaded_file($file, $imgSach);
  $Listbook = loadModel('Listbook');
  $insert = $Listbook->Insert_book($imgSach, $tensach, $tacgia, $nxb, $danhmucsach, $tomtatND);
  if ($insert > 0) {
    echo '<script>alert("Thêm thành công");
    location.assign("index.php?option=quanlysach&page=1");</script>';
  } else {
    echo '<script>alert("Có lỗi");</script>';
  }
}
?>
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Thêm sách</h3>
    </div>
    <div class="title_right">
      <div class="col-md-5 col-sm-5  form-group row pull-right top_search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
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
          <h2>Three Owls Book <small>thêm sách</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br>
          <!-- Smart Wizard -->
          <form method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên sách <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="Tensach" name="Tensach" required="required" class="form-control  ">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tác giả<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="Tacgia" name="Tacgia" required="required" class="form-control ">
              </div>
            </div>
            <div class="item form-group">
              <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Năm xuất bản</label>
              <div class="col-md-6 col-sm-6 ">
                <input id="NXB" class="form-control col" type="text" name="NXB">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Chọn danh mục <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <select id="idDanhmuc" name="idDanhmuc" class="date-picker form-control">
                  <option value="">Chọn tên danh mục</option>
                  <?php
                  $cat = loadModel('Listcategories');
                  $result = $cat->getAll();
                  if ($result->num_rows > 0)
                    while ($row = $result->fetch_assoc()) { ?>
                    <option value="<?php echo $row['idDanhmuc'] ?>"><?php echo $row['Tendanhmuc'] ?></option>
                  <?php }
                  ?>
                </select>
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Hình Ảnh Sách <span class="required">*</span>
              </label>

              <div class="col-md-6 col-sm-6 ">
                <input type="file" id="imgSach" name="imgSach" class="form-control col" required="required">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Tóm tắt nội dung <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input id="tomtatND" class="date-picker form-control" name="tomtatND" required="required" type="text">
              </div>
            </div>
            <div class="ln_solid"></div>
            <div class="item form-group">
              <div class="col-md-6 col-sm-6 offset-md-3">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
            <!-- <input type="submit" name="btn_add" class="btn btn-success" value="Thêm"> -->
          </form>
        </div>
      </div>
    </div>
  </div>
</div>