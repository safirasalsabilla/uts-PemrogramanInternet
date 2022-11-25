<?php
$conn = mysqli_connect('localhost','root','','crud');
if($conn){
} else {
    echo 'gagal terhubung ke database';
}
?>