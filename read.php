<?php
	include('src/db_conn.php');
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
		$sql = "select title, content, from qna where num='".$bno."'"; 
		$result = mysqli_query($conn, $sql);
	?>
<!-- 글 불러오기 -->
<div id="board_read">
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
        echo "<th>답변 내용: </th> <td>".$row["date"]."</td>";
        } ?>
	<div id="bo_ser">
		<ul>
			<a href="/">[목록으로]</a>
		</ul>
	</div>
</div>
</body>
</html>