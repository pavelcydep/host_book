<?php
include("bd.php");
include("upload.php");
    if (isset($_POST['userName'])) { $userName = $_POST['userName']; if ($userName == '') { unset($userName);} } 
    if (isset($_POST['comment'])) { $comment= $_POST['comment']; if ($comment =='') { unset($comment);} }
    upload();
  
 if (empty($userName) || empty($comment) ) 
    {
    echo ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    
    
    $image= $_FILES['filename']['name'];
$date= date('H:i:s d.m.Y');
$query = "INSERT INTO `comments` (`name`, `comment`,`date`,`image`) VALUES ('$userName', '$comment','$date','$image')"; 
$result=mysqli_query($link, $query);

?>