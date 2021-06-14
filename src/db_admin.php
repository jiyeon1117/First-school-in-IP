<meta charset="UTF-8">
<?php
   include('db_conn.php');
   $sql = "SELECT title, categorie, content, date FROM qna WHERE answer is null";
   $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["title"]."&nbsp".$row["categorie"].$row["content"].$row["date"]."<br><br>";
    }
   }else{
    echo "질문이 없습니다.";
   }
   mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
    <head>
    <style>
        table.table2{
            border-collapse: separate;
            border-spacing: 1px;
            text-align: left;
            line-height: 1.5;
            border-top: 1px solid #ccc;
            margin : 20px 10px;
        }
        table.table2 tr {
            width: 100px;
            padding: 10px;
            font-weight: bold;
            vertical-align: top;
            border-bottom: 1px solid #ccc;
        }
        table.table2 td {
            width: 100px;
            padding: 10px;
            vertical-align: top;
            border-bottom: 1px solid #ccc;
        }
    </style>
    </head>
<body>
    <div class ="container">
        <table class ="table2">
            <thead>
                <caption>글 읽기</caption>
            </thead>
            <tbody>
                <tr>
                    <th>제목 : </th>
                    <td><?php echo $data['title'];?></td>
                </tr>
                <tr>
                    <th>카테고리 : </th>
                    <td><?php echo $data['categorie'];?></td>
                </tr>
                <tr>
                    <th>내용 : </th>
                    <td><?php echo $data['content'];?></td>
                </tr>
                <tr>    
                    <th>답글 : </th>
                    <td><?php echo $data['answer'];?></td>
                </tr>
                <tr>
                    <th>날짜 : </th>
                    <td><?php echo $data['date'];?></td>
                </tr>
            </tbody>
        </table>
    </body>
    </