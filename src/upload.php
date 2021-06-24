<?php include('db_conn.php'); 
    $upload = $_GET['q'];
    mysqli_query($conn, $upload);
?>