<!-- <?php
        $connect = mysqli_connect("localhost", "bord", "root", "mirim2") or die("fail");
                $number = $_POST[number];                      //Writer
                $categori = $_POST[categori];                        //Password
                $title = $_POST[title];                  //Title
                $content = $_POST[content];              //Content
                $date = $_POST[date]; 
                $c_content = $_POST[c_content];//Date
 
                $URL = './QuestionWrite.php';                   

                $categori = $_POST[categori];                        //Password
                $query = "insert into bord (number, categori, title, content, date, c_content) 
                        values(null, '$category', '$title', '$content', null, null)";
 
 
                $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($connect);
?> -->
