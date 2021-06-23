<?php
	include('src/db_conn.php');

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
?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="css/read.css" />
</head>
<body>
	<?php
		$bno = $_GET['num']; 
		$sql = "select title, content,date, answer from qna where num= '".$bno."' and answer is not null"; 
		$result = mysqli_query($conn, $sql);
	?>
<!-- 글 불러오기 -->
    <?php while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<th>제목 : </th><td>".$row["title"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>내용 : </th><td>".$row["content"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>날짜 : </th><td>".$row["date"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>답변 내용: </th> <td>".$row["answer"]."</td>";
            } 
        echo "</table></tbody>";?>
	<div id="bo_ser">
		<ul>
			<a href="/">[목록으로]</a>
		</ul>
	</div>
</div>
</body>
</html>