</div>
        <!-- top navigation -->
 <!-- Main content -->
 <?php 
    $Listbook = loadModel("Listbook");
    $soSach = $Listbook->Count_book();
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
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                    if($soSach->num_rows>0)
                    while($row = $soSach->fetch_assoc()){ ?>
                         <h3><?php echo $row['tongsosach'];?></h3>
                    <?php }
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
                  Sales
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Ngày</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Tháng</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Năm</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
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