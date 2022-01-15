 <?php
  $Listbook = loadModel("Listbook");
  $soSach = $Listbook->Count_book();
  ?>
 <!-- page content -->

 <div class="">
   <div class="page-title">
     <div class="title_left">
       <h3>Thống kê </h3>
     </div>

     <div class="title_right">
       <div class="col-md-5 col-sm-5   form-group pull-right top_search">
         <div class="input-group">
           <select class="select-date">
             <option value='7ngay'>7 ngày qua</option>
             <option value='28ngay'>28 ngày qua</option>
             <option value='90ngay'>90 ngày qua</option>
             <option value='365ngay'>365 ngày qua</option>
           </select>
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
          if ($view->num_rows > 0)
            while ($row = $view->fetch_assoc()) { ?>
           <div class="col-lg-3 col-6">
             <!-- small box -->
             <div class="small-box bg-info">
               <div class="inner">
                 <h3><?php echo $row['Favorite'] ?></h3>
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
                 <h3><?php echo $row['Luotxem'] ?></h3><sup style="font-size: 20px"></sup>
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
                 <h3><?php echo $row['Feedback'] ?></h3>

                 <p>Số lượt bình luận</p>
               </div>
               <div class="icon">
                 <i class="fas fa-comments-dollar"></i>
               </div>
               <a href="index.php?option=feedback&page=1" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
             </div>
           </div>
         <?php } ?>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
           <!-- small box -->
           <div class="small-box bg-danger">
             <div class="inner">
               <?php
                $Listbook = loadModel("Listbook");
                $soSach = $Listbook->Count_book();
                ?>
               <h3><?php echo $soSach; ?></h3>
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
             Thống kê sách theo :<span id="text-date"></span>
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
   </section>
 </div>
 <script>
   $(document).ready(function() {
     thongke();
     var char = new Morris.Area({
       element: 'chart',
       xkey: 'NgayDang',
       ykeys: ['Luotxem', 'Favorite', 'Feedback'],
       labels: ['Lượt Xem', 'Yêu Thích', 'Phản Hồi'],
       hideHover: 'auto',
       stacked: true,
       parseTime: false,
     });

     $('.select-date').change(function() {
       var thoigian = $(this).val();
       if (thoigian == '7ngay') {
         var text = '7 ngày qua';
       } else if (thoigian == '28ngay') {
         var text = '28 ngày qua';
       } else if (thoigian == '90ngay') {
         var text = '90 ngày qua';
       } else if (thoigian == '365ngay') {
         var text = '365 ngày qua';
       }

       $.ajax({
         url: "thongke.php",
         method: "post",
         dataType: "json",
         date: {
           thoigian: thoigian
         },
         success: function(data) {
           char.setData(data);
           $('#text-date').text(text);
         }
       });
     })

     function thongke() {
       var text = '365 ngày qua';
       $('#text-date').text(text);
       $.ajax({
         url: "thongke.php",
         method: "POST",
         dataType: "JSON",
         success: function(data) {
           char.setData(data);
           $('#text-date').text(text);
         }
       })
     }
   });
 </script>