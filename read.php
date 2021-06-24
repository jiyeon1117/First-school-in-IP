<?php
	include('src/db_conn.php');
?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>첫 등교는 ip로!</title>
<link rel="stylesheet" type="text/css" href="css/read.css" />
  <link rel="stylesheet" href="css/footer.css">
  <link rel="shortcut icon" href="images/web_logo.png">
  <link rel="stylesheet" 
  href="css/header.css">
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
  
  <img id="banner" src="./images/qna-banner.jpg">
	<?php
		$bno = $_GET['num']; 
		$sql = "select title, content,date, answer from qna where num= '".$bno."' and answer is not null"; 
		$result = mysqli_query($conn, $sql);
	?>

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
        padding: 10px;
        vertical-align: top;
        border-bottom: 2px solid #ccc;
      }
    </style>
    <table style="padding-top:50px" align = center width=600 border=0 cellpadding=2 >
      <tr>
      <td bgcolor=white>
        <table class = "table2">
          <?php 
            while($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
              <td width="50">제목</td>
              <td width="800"><?php echo $row["title"] ?></td>
              </tr>

              <tr>
              <td width="50">날짜</td>
              <td width="800"><?php echo $row["date"] ?></td>
              </tr>

              <tr>
              <td width="50">내용</td>
              <td width="800"><?php echo $row["content"] ?></td>
              </tr>

              <tr>
              <td width="50">답변</td>
              <td width="800"><?php echo $row["answer"] ?></td>
              </tr>
            <?php }?>
        </table>
      </td>
      </tr>
    </table>
  <center>
	<div id="bo_ser">
		<ul>
      <br>
			<a href="./list.php">[목록으로]</a>
		</ul>
	</div>
  </center>
</body>
</html>