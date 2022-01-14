<?php
$Listbook = loadModel('Listbook');
if (isset($_REQUEST['btn_add']) && isset($_REQUEST['idChuong'])) {
  if (isset($_REQUEST['TenChuong']) && isset($_REQUEST['noidung'])) {
    $TenChuong = $_REQUEST['TenChuong'];
    $noidung = $_REQUEST['noidung'];
    $chapter_update = $Listbook->Update_Chapters($_REQUEST['idChuong'], $TenChuong, $noidung);
    if ($chapter_update) {
      echo '<script>alert("Update Thành Công");
      </script>';
    } else {
      echo '<script>alert("Update Không Thành Công");</script>';
    }
  }
}

?>
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Sửa sách</h3>
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
            <div id="step-1">

              <form id="form_edit_book " class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                <?php
                $book = $Listbook->Select_ChildChapters($_REQUEST['idChuong']);
                if ($book->num_rows > 0) {
                  while ($row = $book->fetch_assoc()) {
                    $idChuong = $row['idChuong'];
                    $TenChuong = $row['TenChuong'];
                    $noidung = $row['noidung'];
                ?>
                    <div class="form-group row">
                      <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">TenChuong</label>
                      <div class="col-md-6 col-sm-6 ">
                        <input id="TenChuong" class="form-control col" type="text" value="<?php echo $TenChuong; ?>" name="TenChuong">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Nội dung chương <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <textarea id="noidung" class="date-picker form-control" value="" name="noidung"><?php echo  $noidung; ?></textarea></br>
                      </div>
                    </div>

                  <?php
                  }
                  ?>
                  <input type="submit" name="btn_add" id="btn_add" class="btn btn-success submit" value="Update">
                <?php
                }
                ?>
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