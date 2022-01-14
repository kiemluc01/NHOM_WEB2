<?php
$Account = loadModel('Account');
if (isset($_REQUEST['btn_add'])) {
  $idquyen = $_POST['idquyen'];
  $insert = $Account->Update_member($_REQUEST['idMember'], $idquyen);
  if ($insert > 0) {
    echo '<script>alert("Update Thành Công");
    location.assign("index.php?option=control_nguoidung");</script>';
  } else {
    echo '<script>alert("Update Không Thành Công");</script>';
  }
}

$account = $Account->getUser($_REQUEST['idMember']);
if ($account->num_rows > 0)
  while ($row = $account->fetch_assoc()) {
    $username = $row['username'];
    $MemberName = $row['MemberName'];
    $email = $row['email'];
    $Gioitinh = $row['Gioitinh'];
    $Ngaysinh = $row['Ngaysinh'];
    $tenquyen = $row['tenquyen'];
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
              <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">

                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên đăng nhập <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="username" name="username" value="<?php echo $username; ?>" required="required" class="form-control" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Họ tên<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="MemberName" name="MemberName" value="<?php echo $MemberName; ?>" required="required" class="form-control" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                  <div class="col-md-6 col-sm-6 ">
                    <input id="email" class="form-control col" type="text" value="<?php echo $email; ?>" name="email" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Giới tính</label>
                  <div class="col-md-6 col-sm-6 ">
                    <input id="Gioitinh" class="form-control col" type="text" value="<?php echo $Gioitinh; ?>" name="Gioitinh" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Ngày sinh</label>
                  <div class="col-md-6 col-sm-6 ">
                    <input id="Ngaysinh" class="form-control col" type="text" value="<?php echo $Ngaysinh; ?>" name="Ngaysinh" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 label-align">Chọn quyền<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <select id="idquyen" name="idquyen" class="date-picker form-control">

                      <?php
                      $cat = loadModel('Account');
                      $result = $cat->getAllPermission();
                      if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                          if ($row['idquyen'] == $idquyen) { ?>
                            <option value="<?php echo $row['idquyen'] ?>" selected><?php echo $row['tenquyen'] ?></option>
                          <?php
                          } else ?>
                          <option value="<?php echo $row['idquyen'] ?>"><?php echo $row['tenquyen'] ?></option>
                      <?php }
                      }
                      ?>
                    </select>
                  </div>
                </div>

                <input type="submit" name="btn_add" class="btn btn-success" value="Update">
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