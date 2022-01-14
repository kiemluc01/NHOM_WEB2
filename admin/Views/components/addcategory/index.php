<?php
if (isset($_REQUEST['btn_add'])) {
  if (isset($_POST['Tendanhmuc'])) {
    $Tendanhmuc = $_POST['Tendanhmuc'];
    $Listcategories = loadModel('Listcategories');
    $insert = $Listcategories->Insert_category($Tendanhmuc);
    if ($insert > 0) {
      echo '<script>alert("Thêm thành công");
          location.assign("index.php?option=quanlydanhmuc");</script>';
    } else {
      echo '<script>alert("Có lỗi");</script>';
    }
  }
}
?>

<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Thêm danh mục</h3>
    </div>
    <div class="title_right">
      <div class="col-md-5 col-sm-5  form-group row pull-right top_search">
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
          <div class="x_content">
            <!-- Smart Wizard -->
            <div id="step-1" class="y-centent">
              <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nhập tên danh mục <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="Tendanhmuc" name="Tendanhmuc" required="required" class="form-control  ">
                  </div>
                </div>
                <input type="submit" name="btn_add" class="btn btn-success" value="Thêm">
              </form>
            </div>

            <!-- End SmartWizard Content -->
            <!-- End SmartWizard Content -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>