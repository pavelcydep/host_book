<?php
include("bd.php");
 $query = "SELECT * FROM `comments`"; 
 $result=mysqli_query($link, $query);

 for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = 
 $row); 


function comment($data) {
    foreach ($data as $elem) {
    echo '<span class="date">'.$elem['date'].'</span>';
    echo '<span class="name">'.$elem['name'].'</span>';
    echo  '<p class="container">'.$elem['comment'].'</p>';
    
}

}

?>