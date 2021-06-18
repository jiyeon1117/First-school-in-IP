<meta charset="UTF-8">
<?php

    include('./db_conn.php');

    $m_answer =  $_POST['answer'];
    $m_num = $_POST['num'];

    header("Content-Type: text/html; charset=UTF-8");

    if(!$m_answer) {
        echo "<script>alert('답변 내용을 작성해주세요.')</script>";
    }

    $sql="update qna set answer = '$m_answer' where answer is null and num='$m_num'";
    mysqli_query($conn,$sql);
    mysqli_close($conn);

    echo("<script>location.href='index.html'; alert('답변 완료');</script>"); 
?>