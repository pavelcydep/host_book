<?php
include("bd.php");
    if (isset($_POST['userName'])) { $userName = $_POST['userName']; if ($userName == '') { unset($userName);} } 
    if (isset($_POST['comment'])) { $comment= $_POST['comment']; if ($comment =='') { unset($comment);} }
   
  
 if (empty($userName) || empty($comment) ) 
    {
    echo ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
$date= date('H:i:s d.m.Y');
$query = "INSERT INTO `comments` (`name`, `comment`,`date`) VALUES ('$userName', '$comment','$date')"; 
$result=mysqli_query($link, $query);
 header('Location: /');
?>