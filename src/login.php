<?php
    include('db_conn.php');
    $password = $_POST[ 'password' ];
    
    $sql = "SELECT password FROM qna WHERE password is not null";
    $result = mysqli_query( $conn, $sql );

    while ($row = mysqli_fetch_array($result)) {
        $encrypted_password = $row['password'];
    }
    if ( is_null( $encrypted_password ) ) {
        $wu = 1;
    } else {
        if ( password_verify( $password, $encrypted_password ) ) {
        header( 'Location:https://map.emirim.kr/src/db_test_admin.php' );
        } else {
        $wp = 1;
        }
    }
?>
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>로그인</title>
    <style>
      body { font-family: sans-serif; font-size: 14px; }
      input, button { font-family: inherit; font-size: inherit; }
    </style>
  </head>
  <body>
    <center>
    <h1>로그인</h1>
    <form action="login.php" method="POST">
      <p><input type="password" name="password" placeholder="비밀번호" required></p>
      <p><input type="submit" value="로그인"></p>
      <?php
        if ( $wp == 1 ) {
            echo "<script>alert('비밀번호가 틀렸습니다.');</script>";
        }
      ?>
    </form>
    </center>
  </body>
</html>