<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>學生資料管理系統</title>
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <!---匯入要使用的函式庫--->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>
  <h1 class="header"><a href="#" onlick="home()">學生資料管理系統</a></h1>
    <div class="">

    </div>



<?php
$sql="SELECT `classroom` as '班級',count(`id`) as '人數' FROM `students` GROUP by `classroom`;";
$rows=$Stu->q($sql);
foreach($rows as $row){
    echo $row['班級']."-".$row['人數']."<br>";
}

?>
</body>

</html>
<script>
  /************************************
  * 1.考慮觸發行為的事件
  * 2.建立監聽行為
  * 3.考慮是否需要代入參數
  * 4.是否會有回傳值？回傳值的功用及處理？
  * 5.是否需要更新畫面內容？更新畫面的方法？
  ************************************/
  function list(){
    
  }

  //新增資料的函式
  function create() {

  }

  //查詢資料的函式
  function query() {

  }

  //編輯資料的函式
  function update() {

  }

  //刪除資料的函式
  function del() {

  }

</script>