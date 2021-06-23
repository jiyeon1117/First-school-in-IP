<?php 
include './src/db_conn.php'; 
?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" href="css/list.css">
</head>
<body>
<div id="board_area"> 
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="100">작성일</th>
            </tr>
        </thead>
        <?php
        // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
          $sql = "select * from qna order by num asc limit 0,5"; 
          $result = mysqli_query($conn, $sql);
            while($qna = mysqli_fetch_assoc($result))
            {
              //title변수에 DB에서 가져온 title을 선택
              $title=$qna["title"]; 
              if(strlen($title)>30)
              { 
                //title이 30을 넘어서면 ...표시
                $title=str_replace($qna["title"],mb_substr($qna["title"],0,30,"utf-8")."...",$qna["title"]);
              }
        ?>
      <tbody>
        <tr>
          <td width="70"><?php echo $qna['num']; ?></td>
          <td width="500"><a href="read.php?num=<?php echo $qna["num"];?>"><?php echo $title;?></a></td>
          <td width="100"><?php echo $qna['date']?></td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
    <div id="write_btn">
      <a href="Q&A.html"><button>글쓰기</button></a>
    </div>
  </div>
</body>
</html>