<?php 
include './src/db_conn.php'; 
?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" href="css/list.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
</head>
<body>
<div class="container">
    <aside id="aisdeLeft"></aside>
    <section id="section">
      <div class="navbar">
        <!-- 로고 -->
        <a href="index.html"><img class="logo-image" src="images/logo.png"></a>
        <div class="leftmenu">
          <div class="tab">
            <li class="menu"><a href="roadview.html">로드뷰</a></li>
            <li class="menu"><a href="map.html">교무실 맵</a></li>
            <li class="menu"><a href="list.php">Q&A</a></li>
          </div>
        </div>
      </div>
    </section>
    <aside id="aisdeRight"></aside>
  </div>
    <!-- 배너 -->
  <img id="banner" src="./images/qna-banner.jpg">
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
          $sql = "SELECT * FROM qna WHERE answer IS NOT NULL ORDER BY num ASC LIMIT 0 , 5"; 
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