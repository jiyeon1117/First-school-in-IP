<meta charset="UTF-8">
<?php

include('./db_conn.php');

$m_title =  $_POST['title'];
$m_content = $_POST['content'];

header("Content-Type: text/html; charset=UTF-8");

if(!$m_title) {
    echo "<script>alert('제목을 입력해주세요.')</script>";
    echo "<script>location.replace('../qna.php');</script>";
    exit;
}
if(!$m_content) {
    echo "<script>alert('내용을 입력해주세요.')</script>";
    echo "<script>location.replace('../qna.php');</script>";
    exit;
}


$sql="insert into qna(title,content)values('$m_title','$m_content')";
mysqli_query($conn,$sql);
mysqli_close($conn);

echo("<script>location.href='../index.html'; alert('답변이 완료되기까지 하루정도 소요됩니다.');</script>"); 


?>