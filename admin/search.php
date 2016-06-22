<?php
    include '../connect.php';
    $keyword = filter_input(INPUT_POST, 'keyword', FILTER_SANITIZE_STRING);
    $query = "SELECT Id FROM pinball WHERE filmin_adi LIKE '%$keyword%'";
    $q = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($q);
    if($row) {
        header("Location:../more.php?id=".$row['Id']);
    } else {
        echo 'nese oldu';
    }

?>