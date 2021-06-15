<?php 
    include('db_conn.php');s
    $sql = "SELECT title, categorie, content, date FROM qna WHERE num = num";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<div class="balloon">";
            echo 
?>