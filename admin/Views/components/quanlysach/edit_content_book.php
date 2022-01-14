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
      <h3>Sửa Nội Dung Sách</h3>
    </div>

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <h2>Danh Sách Chương</h2>
          <div class="x_title">
            <div class="x_content">
              <!-- Smart Wizard -->
              <div id="step-1">

                <form id="form_edit_book " class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                  <?php
                  $book = $Listbook->Select_Chapters($_REQUEST['idSach']);
                  if ($book->num_rows > 0) {
                    while ($row = $book->fetch_assoc()) {
                      $idChuong = $row['idChuong'];
                      $TenChuong = $row['TenChuong'];
                      $noidung = $row['noidung'];
                  ?>
                      <table>
                        <a href="<?php echo '?option=quanlysach&child_option=find_chapter&idChuong=' . $idChuong; ?>" class="btn btn-warning" name="TenChuong" id="TenChuong"><?php echo $TenChuong; ?></a>
                      </table>

                    <?php
                    }
                    ?>

                    <div class="x_title">
                      <div class="title">
                        <h4>Thêm mới một chương</h4>
                      </div>
                    </div>
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
              <!-- End SmartWizard Content -->
              <!-- End SmartWizard Content -->
            </div>
          </div>
        </div>
      </div>
    </div>
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