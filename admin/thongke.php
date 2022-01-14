
<?php 
require('../admin/Carbon/autoload.php');
include('../config.php');
session_start();
define('BASEPATH', true);
include_once('core/Database.php');
include_once('core/load.php');
use Carbon\Carbon;
$connect = mysqli_connect("localhost" , "root", "" , "docsach");
mysqli_query($connect,"SET NAMES 'utf8'");
if(isset($_POST['thoigian']))
{
    $thoigian = $_POST['thoigian'];
}else
{
$thoigian = '';
$subdays = Carbon::now('Asia/Ho_Chi_Minh') -> subdays(365)->toDateTimeString();
}


if($thoigian == '7ngay')
{
    $subdays = Carbon::now('Asia/Ho_Chi_Minh') -> subdays(7)->toDateTimeString(); 
}else if($thoigian == '28ngay')
{
    $subdays = Carbon::now('Asia/Ho_Chi_Minh') -> subdays(28)->toDateTimeString(); 
}else if($thoigian == '90ngay')
{
    $subdays = Carbon::now('Asia/Ho_Chi_Minh') -> subdays(90)->toDateTimeString(); 
}else if($thoigian == '365ngay'){
    $subdays = Carbon::now('Asia/Ho_Chi_Minh') -> subdays(365)->toDateTimeString(); 
}
$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
// $sql = "SELECT tblsach.idSach , tblsach.NgayDang , tblsach.Tensach , chitietsach.Luotxem , chitietsach.Favorite , chitietsach.Feedback FROM tblsach , chitietsach WHERE tblsach.idSach = chitietsach.idSach and tblsach.NgayDang BETWEEN '$sundays' AND '$now' ORDER BY tblsach.NgayDang ASC";
// $sql_query = mysqli_query($connect,$sql);
$Listbook = loadModel('Listbook');
$datas = $Listbook->Select_date($subdays , $now);

// while ($row = mysqli_fetch_array($datas))
// {
   
//         // $index['NgayDang'] = $row['NgayDang'];
//         // $index['Tensach'] = $row['Tensach'];
//         // $index['Luotxem'] = $row['Luotxem'];
//         // $index['Favorite'] = $row['Favorite'];
//         // $index['Feedback'] = $row['Feedback'];
//         $chart_data[] = array(
//         'NgayDang' => $row['NgayDang'],
//         'Tensach' => $row['Tensach'],
//         'Luotxem' => $row['Luotxem'],
//        'Favorite' => $row['Favorite'],
//         'Feedback' => $row['Feedback']
//         );
// } 
while($row = $datas->fetch_assoc())
{
         $chart_data[] = array(
        'NgayDang' => $row['NgayDang'],
        'Luotxem' => $row['Luotxem'],
        'Favorite' => $row['Favorite'],
        'Feedback' => $row['Feedback']
        );
}
echo $data = json_encode($chart_data);
?>
