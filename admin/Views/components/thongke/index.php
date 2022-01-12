</div>
        <!-- top navigation -->
 <!-- Main content -->
 <?php 
    $Listbook = loadModel("Listbook");
    $soSach = $Listbook->Count_book();
    $Select = $Listbook->Select_Chitiet();
    $chart_data = '';
    if($Select->num_rows > 0)
    {
      while($row = $Select->fetch_assoc())
      {
        $chart_data .= "{ Tensach:'".$row["Tensach"]."', Luotxem:".$row["Luotxem"].", Favorite:".$row["Favorite"].", Feedback:".$row["Feedback"]."}, ";
      }
    }
    $chart_data = substr($chart_data, 0, -2);
  ?>
        <!-- page content -->
        <div class="right_col" role="main" style=" height: 100vh!important;
    overflow: auto!important;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Thống kê </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
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
            <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <?php 
                    $Listbook = loadModel("Listbook");
                    $view = $Listbook->Select_view();
                    if($view->num_rows>0)
                    while($row = $view->fetch_assoc()){ ?>    
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $row['Favorite']?></h3>
                <p>Số lượt thích</p>
              </div>
              <div class="icon">
                <i class="fab fa-gratipay"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $row['Luotxem']?></h3><sup style="font-size: 20px"></sup>
                <p>Số lượt xem</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                 <h3><?php echo $row['Feedback']?></h3>

                <p>Số lượt bình luận</p>
              </div>
              <div class="icon">
                <i class="fas fa-comments-dollar"></i>
              </div>
              <a href="index.php?option=feedback" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <?php }?>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                    <?php 
                    $Listbook = loadModel("Listbook");
                    $soSach = $Listbook->Count_book();
                     ?>
                         <h3><?php echo $soSach;?></h3>
                    <?php 
                ?>
                <p>Tổng số sách</p>
              </div>
              <div class="icon">
                <i class="fas fa-book-reader"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Thống kê sách
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                    <div class="container" style="width:auto;">
                        <h2 align="center">Web đọc sách online</h2>
                        <h3 align="center">Thống kê số lượt tương tác </h3>   
                        <br /><br />
                        <div id="chart"></div>
                    </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="row">
              
            </div>
            <div class="clearfix"></div>
            <div class="row">
             
          
            </div>
            <div class="clearfix"></div>
            <div class="row">
            </div>
          </div>
          <script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'Tensach',
 ykeys:['Luotxem', 'Favorite', 'Feedback'],
 labels:['Luotxem', 'Favorite', 'Feedback'],
 hideHover:'auto',
 stacked:true
});
</script>