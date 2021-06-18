<meta charset="UTF-8">
<?php
include './src/db_conn.php';

$name = $_POST['number'];
$student_id = $_POST['student_id'];
$five = $_POST['five'];
$motive = $_POST['content'];
$phone = $_POST['phone'];


$sql="insert into qna(name,student_id,five,motive,phone)values('$name','$student_id','$five','$motive','$phone')";
mysqli_query($conn,$sql);
mysqli_close($conn);

echo("<script>location.href='index.php'; alert('글 등록이 완료되었습니다\n답변 후 게시판에서 확인하실 수 있습니다.');</script>"); 

?>

