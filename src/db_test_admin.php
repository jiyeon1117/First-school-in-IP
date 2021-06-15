<?php include('db_conn.php');

    $sql = "SELECT title, categorie, content, date FROM qna WHERE num = num";
    $result = mysqli_query($conn, $sql);

    echo "<style>
    table{
        border-collapse: separate;
        border-spacing: 1px;
        text-align: left;
        line-height: 1.5;
        border-top: 1px solid #ccc;
        margin : 20px 10px;
    }
    tr{
        width: 100px;
        padding: 10px;
        font-weight: bold;
        vertical-align: top;
        border-bottom: 1px solid #ccc;
    }
    td{
        width: 100px;
        padding: 10px;
        vertical-align: top;
        border-bottom: 1px solid #ccc;
    }
    </style>";

    echo "<table><tbody>";

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo"<tr>";
            echo"<th>제목 : </th><td>".$row["title"]."</td>";
            echo"</tr>";
            echo"<tr>";
            echo"<th>카테고리 : </th><td>".$row["categorie"]."</td>";
            echo"</tr>";
            echo"<tr>";
            echo"<th>내용 : </th><td>".$row["content"]."</td>";
            echo"</tr>";
            echo"<tr>";
            echo"<th>날짜 : </th><td>".$row["date"]."</td>";
            echo"</tr>";
            echo"<tr>
            <td>답변 내용: </td>
            <td><textarea name=admin-content cols=50 rows=8></textarea></td>
            </tr>";
        }
    }else{
        echo "질문이 없습니다.";
    }
    mysqli_close($conn);
    echo "<table><tbody>";
?>
<input type="submit" value="답변하기">
<!-- https://itlove.tistory.com/1695 -->