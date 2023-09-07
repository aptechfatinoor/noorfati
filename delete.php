<?php
    $con = mysqli_connect("localhost","root","","db_form_assigment");

    $son2 = $_GET['son'];

    $query = "DELETE FROM `tbl_form_assigment` WHERE ID = $son2 ";
    $result =mysqli_query($con , $query);


    if($result){
        echo "<script>
        window.location.href='data-table.php'
        </script>";
    }













 ?>
