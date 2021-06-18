<!-- <?php
        $connect = mysqli_connect("localhost", "bord", "root", "mirim2") or die("fail");
                $number = $_POST[number];                      
                $categori = $_POST[categori];                    
                $title = $_POST[title];                  
                $content = $_POST[content];            
                $date = $_POST[date]; 
                $c_content = $_POST[c_content];
 
                $URL = './QuestionWrite.php';                   

                $categori = $_POST[categori];                 
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
