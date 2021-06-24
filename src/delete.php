<?php include('db_conn.php'); 
    $del = $_GET['q'];
    mysqli_query($conn, $del);
    echo("<script>location.href='db_admin.php'; alert('삭제완료');</script>"); 
?>