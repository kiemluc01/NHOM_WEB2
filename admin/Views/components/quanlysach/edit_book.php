

</div>
<?php
$Listbook = loadModel('Listbook');
$book = $Listbook->getBook($_REQUEST['idSach']);
if($book->num_rows > 0)

while ($row = $book->fetch_assoc()){
  $tensach = $row['Tensach'];
  $tacgia = $row['Tacgia'];
  $nxb = $row['NXB'];
  $danhmucsach = $row['idDanhmuc'];
  // $file = $_FILES['imgSach']['tmp_name'];
  $imgSach = $row['imgSach'];
  $tomtatND = $row['tomtatND'];
}
?>

<div class="right_col" role="main">
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
                        <form action="admin/upload_image.php" id="form_file_upload" class="form-horizontal form-label-left"  method="post" enctype="multipart/form-data">

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên sách <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="Tensach" name = "Tensach" value="<?php echo $tensach ;?>" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tác giả<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="Tacgia" name="Tacgia" value="<?php echo $tacgia ;?>" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Năm xuất bản</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="NXB" class="form-control col" type="text" value = "<?php echo $nxb;?>" name="NXB">
                            </div>
                          </div>  
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Chọn danh mục <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <select id="idDanhmuc" name = "idDanhmuc" class="date-picker form-control">
                               
                                <?php
                                    $cat = loadModel('Listcategories');
                                    $result = $cat->getAll();
                                    if ($result->num_rows > 0)
                                    {
                                        while ($row = $result->fetch_assoc()) {
                                          if($row['idDanhmuc'] == $idDanhmuc) 
                                          {?>
                                        <option value="<?php echo $row['idDanhmuc'] ?>" selected><?php echo $row['Tendanhmuc'] ?></option>
                                    <?php
                                          }  
                                    else ?>
                                    <option value="<?php echo $row['idDanhmuc'] ?>" ><?php echo $row['Tendanhmuc'] ?></option>
                                    <?php }
                                    }
                                    ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Hình Ảnh Sách <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="file" id="file" name="file" class="date-picker form-control" required>
                              <div class = "form-group__image">
                                  <label>Ảnh cũ</label>
                                  <img src="<?php echo $imgSach ?>" height = "100" width="150" class = "img-thumbnail"/>
                                  <label>Ảnh mới</label>
                                  <img src="" height = "100" width="150" id = "img_new" class = "img-thumbnail"/>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tóm tắt nội dung <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="tomtatND" class="date-picker form-control" value="<?php echo $tomtatND ;?>" name = "tomtatND" required="required" type="text">
                            </div>
                          </div>
                          <input type="submit" name = "submit" id = "submit" class="btn btn-success submit" value = "Update">
                        </form>
                      </div>
                    <!-- End SmartWizard Content -->
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>
