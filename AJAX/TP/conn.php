<?php
$conn = mysqli_connect("localhost","root","") or die(mysqli_error($conn));
mysqli_select_db( $conn, "db_cat_dwm") or die(mysqli_error($conn));
?>