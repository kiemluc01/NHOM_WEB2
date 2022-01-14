<?php
$rowmember = array();
$member = loadModel('Member');
// $idMember = '';
// $username = '';
// $username = '';
// $password = '';
// $email = '';
// $IMG = '';
// $Ngaysinh = '';
// $Gioitinh = '';
$result = $member->get_member($_SESSION['user']);
while ($rowmember = $result->fetch_assoc()) {
  $idMember = $rowmember['idMember'];
  if ($rowmember['MemberName'] == null || $rowmember['MemberName']  == "Chưa đặt tên")
    $username = $rowmember['username'];
  else
    $username = $rowmember['MemberName'];
  $password = $rowmember['password'];
  $email = $rowmember['email'];
  $IMG = $rowmember['ImgAvatar'];
  $Ngaysinh = $rowmember['Ngaysinh'];
  $Gioitinh = $rowmember['Gioitinh'];
}

?>

<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
    </div>
    <div class="clearfix"></div>
    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="<?php echo $IMG; ?>" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2><?php echo $username; ?></h2>
      </div>
    </div>
    <!-- /menu profile quick info -->
    <br />
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a href="index.php?option=admin_home"><i class="fa fa-home"></i> Trang Chủ </a></li>
          <li><a href="index.php?option=quanlysach&page=1"><i class="fa fa-book"></i> Quản lý sách</a></li>
          <li><a href="index.php?option=quanlydanhmuc"><i class="fa fa-bookmark"></i>Quản lý danh mục</a></li>
          <li><a href="index.php?option=thongke"><i class="fa fa-bar-chart-o"></i>Thống kê</a></li>
          <li><a href="index.php?option=control_nguoidung"><i class="fa fa-user"></i> Quản lý người dùng</a></li>
          <li><a href="index.php?option=banner"><i class="fa fa-image"></i> Quản lý banner</a></li>
          <li><a href="index.php?option=feedback&page=1"><i class="fa fa-comments"></i> Tương tác</a>
          <li><a href="index.php?option=rate"><i class="fas fa-star"></i>Đánh giá sách</a>
          </li>

        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>