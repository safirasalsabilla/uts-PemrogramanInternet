<?php
include 'connection.php';
if(isset($_GET['npsn'])){
    $delete = mysqli_query($conn, "DELETE FROM utscrud WHERE npsn = '".$_GET['npsn']."' ");
    header('location:index.php');
}
?>