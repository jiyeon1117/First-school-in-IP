<?php
$conn=mysqli_connect('localhost','map','2LjB9XqPE7jj2mpa','map');
if($conn){
   echo "연결 성공";
}else{
   die("연결 실패");
}
mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");
mysqli_query($conn, "set @cnt = 0;");
mysqli_query($conn, "update qna set qna.num = @cnt:=@cnt+1;");
?>