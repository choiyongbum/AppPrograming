<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <?php

    $host = 'localhost';
    $user = 'korea';
    $pw = '1234';
    $dbName = 'test';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $운동종목 = $_POST['운동종목'];
      $세트 = $_POST['세트'];
      $횟수 = $_POST['횟수'];
   
    $sql = "insert into 가슴운동 (
        운동종목,
        세트,
        횟수
    )";
    
    $sql = $sql. "values (
        '$운동종목',
        '$세트',
        '$횟수'
    )";

    if($mysqli->query($sql)){ 
      echo '<script>alert("success inserting")</script>'; 
    }else{ 
      echo '<script>alert("fail to insert sql")</script>';
    }

    mysqli_close($mysqli);
    
  ?>

<script>
  location.href = "가슴운동.html";
</script>

</html> 