<!DOCTYPE>
 
<html>
<head>
  <meta charset = 'utf-8'>
</head>
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
<body>
  <form action="src/db_upload.php" method="post">
    <table style="padding-top:50px" align = center width=900 border=0 cellpadding=2 >
      <tr>
      <td height=20 align= center bgcolor=#ccc><font color=white> 글쓰기</font></td>
      </tr>
      <tr>
      <td bgcolor=white>
        <table class = "table2">
          <tr>
          <td>제목</td>
          <td><input id="title" type="text" name="title" size="20" placeholder="제목입니다" required> </td>
          </tr>

          <tr>
          <td>카테고리</td>
          <td><input id="categorie" type="text" name="categorie" size="20" placeholder="카테고리입니다." required></td>
          </tr>

          <tr>
          <td>내용</td>
          <td><textarea name = content id="content" type = text cols=85 rows=15 placeholder="내용입니다." required></textarea></td>
          </tr>

          <tr>
          <td>비밀번호</td>
          <td><input type = password name = pw size=10 maxlength=10></td>
          </tr>
          </table>

          <center>
          <input type="submit" class="apply" value="작성하기" onclick="location.href='submitaction.php'">
          </center>
        </td>
        </tr>
    </table>
    </form>
</body>
</html>