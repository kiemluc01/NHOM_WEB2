
<?php 
require('../admin/Carbon/autoload.php');
include('../config.php');
session_start();
define('BASEPATH', true);
include_once('core/Database.php');
include_once('core/load.php');
use Carbon\Carbon;
if(isset($_POST['thoigian']))
{
    $thoigian = $_POST['thoigian'];
}else
{
$thoigian = '';
$subdays = Carbon::now('Asia/Ho_Chi_Minh') -> subDays(365)->toDateTimeString();
}

if($thoigian == '7ngay')
{
    $subdays = Carbon::now('Asia/Ho_Chi_Minh') -> subDays(7)->toDateTimeString(); 
}else if($thoigian == '28ngay')
{
    $subdays = Carbon::now('Asia/Ho_Chi_Minh') -> subDays(28)->toDateTimeString(); 
}else if($thoigian == '90ngay')
{
    $subdays = Carbon::now('Asia/Ho_Chi_Minh') -> subDays(90)->toDateTimeString(); 
}else if($thoigian == '365ngay'){
    $subdays = Carbon::now('Asia/Ho_Chi_Minh') -> subDays(365)->toDateTimeString(); 
}
$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
$Listbook = loadModel('Listbook');
$datas = $Listbook->Select_date($subdays , $now);

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
