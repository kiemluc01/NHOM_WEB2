<?php 
if(isset($_REQUEST['action']) == 'edit' && $_REQUEST['idbanner'])
{
  $banner = loadModel('banner');
$target_dir = "Public/images/banner/";
$target_file = $target_dir.basename($_FILES['file']['name']);
$uploadError = 0;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_FILES['file']['name']))
{
  $check = getimagesize($_FILES['file']['tmp_name']);
  if($check == false)
  {
    echo json_encode(['success'=>true,'error'=>"File was not upload"]);
  }
  if(file_exists($target_dir))
  {
    echo json_encode(['success'=>true,'error'=>"File already exists"]);
    exit;
  }
  if($imageFileType !="jpg" && $imageFileType !="png" && $imageFileType !="jpeg" )
  {
  
    echo json_encode(['success'=>true,'error'=>"File type {$imageFileType} not allowed!"]);
    exit;
     
  }
  if($uploadError == 1)
  {
   
    echo json_encode(['success'=>true,'error'=>"File was not upload"]);
    exit;
  }
  else{
    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file))
    {
      echo json_encode(['success'=>true,'error'=>"The file". htmlspecialchars(basename($_FILES['file']['name']))."has been uploaded!"]);
    }else{
      echo json_encode(['success'=>true,'error'=>"Fild upload faild</br>"]);
    }
  }
}
$insert = $banner->Update_banner($_REQUEST['idbanner'] , $target_file);
if($insert>0)
{
  echo '<script>alert("Update Thành Công");
  location.assign("index.php?option=banner");</script>';
}else{
  echo '<script>alert("Update Không Thành Công");</script>';
}
}

?>