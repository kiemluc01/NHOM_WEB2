

</div>
<?php
if(isset($_REQUEST['btn_add'])){
  echo '<script> alert("1")</script>';
  if(isset($_REQUEST['tensach']) )
{
  echo '<script> alert("2")</script>';
  $tensach = $_REQUEST['tensach'];
  $tacgia = $_REQUEST['tacgia'];
  $nxb = $_REQUEST['nxb'];
  $danhmucsach = $_REQUEST['danhmucsach'];
  $file = $_FILES['imgSach']['tmp_name'];
  $imgSach = 'Public/images/' . $_FILES['imgSach']['name'];
  
  $tomtatND = $_REQUEST['tomtatND'];
  move_uploaded_file($file, $imgSach);
 
  $Listbook = loadModel('Listbook');
  
  if($Listbook->Insert_book($imgSach , $tensach, $tacgia , $nxb , $danhmucsach,$tomtatND))
  {
    echo '<sript>alert("Thêm thành công");
    location.assign("index.php?option=quanlysach");</sript>';
  }else{
    echo '<sript>alert("Có lỗi");</sript>';
  }
    
  
}
}
?>
<div class="right_col" role="main">
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
                        <form class="form-horizontal form-label-left"  method="post" enctype="multipart/form-data">

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên sách <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="tensach" name = "tensach" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tác giả<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="tacgia" name="tacgia" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Năm xuất bản</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="nxb" class="form-control col" type="text" name="nxb">
                            </div>
                          </div>  
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Chọn danh mục  <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <select id="danhmucsach" name = "danhmucsach" class="date-picker form-control">
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
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Hình Ảnh Sách <span class="required">*</span>
                            </label>
                         
                            <div class="col-md-6 col-sm-6 ">
                              <input type="file" id="imgSach" name="imgSach" class="date-picker form-control"  required="required">
                            </div>
                            
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tóm tắt nội dung <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="tomtatND" class="date-picker form-control" name = "tomtatND" required="required" type="text">
                            </div>
                          </div>
                          <input type="submit" name = "btn_add" class="btn btn-success" value = "Thêm">
                        </form>
                      </div>
                     
                    <!-- End SmartWizard Content -->





            
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>