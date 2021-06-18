<meta charset="UTF-8">
<?php
   include('src/db_conn.php');

   $sql = "SELECT title, categorie, content, date FROM qna WHERE answer is not null";
   $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["title"]."&nbsp".$row["categorie"]. $row["content"]. $row["date"]."<br><br>";
    }
   }else{
    echo "질문이 없습니다.";
   }
   mysqli_close($conn);
?>