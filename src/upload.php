<?php include('db_conn.php'); 
    $upload = $_GET['q'];
    mysqli_query($conn, $upload);
    echo("<script>location.href='db_admin.php'; alert('업로드완료');</script>"); 
?>