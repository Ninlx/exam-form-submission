<?php
    require_once('../connection.php');
    $id = $_GET['id'];

    $que = "DELETE FROM add_s2 where id = '$id'";
    $exe = mysqli_query($con,$que);

    header('location:dashboard.php?page=disp_s2');
