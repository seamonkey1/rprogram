<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../bootstrapl/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <title>R Programming</title>
  <style media="screen">
    .title {
      color: #467438;
    }
  </style>
</head>
<body>

  <div class="container-fluid">
    <div class="row mb-5">
      <div class="col-md-12 text-center mt-3">
        <div class="title">
          <h1>사전 학습</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 mx-auto text-center">
        <h3>
          <p>자 이제 본격적으로 R프로그래밍 언어에 대하여 학습해볼까요?</p>
          <p>학습 분비가 되셨으면 Start 버튼을 눌러 학습을 시작하십시오.</p>
        </h3>
      </div>
    </div>
    <div class="text-center">
      <a href="page6.php" class="btn btn-primary mb-3">Start</a>
    </div>
  </div>


  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
  error_reporting(E_ERROR|E_PARSE);
  $first = "1번 답 : ".$_POST["first"].PHP_EOL;
  $second = "2번 답 : ".$_POST["second"].PHP_EOL;
  $third = "3번 답 : ".$_POST["third"].PHP_EOL;
  $fourth = "4번 답 : ".$_POST["fourth"].PHP_EOL;
  $fifth = "5번 답 : ".$_POST["fifth"].PHP_EOL;
  $sixth = "6번 답 : ".$_POST["sixth"].PHP_EOL;
  $seventh = "7번 답 : ".$_POST["seventh"].PHP_EOL;
  $eighth = "8번 답 : ".$_POST["eighth"].PHP_EOL;
  $nineth = "9번 답 : ".$_POST["nineth"].PHP_EOL;
  $tenth = "10번 답 : ".$_POST["tenth"].PHP_EOL;
  if(isset($_POST["first"])||isset($_POST["second"])||isset($_POST["third"])||isset($_POST["fourth"])||isset($_POST["fifth"])||
  isset($_POST["sixth"])||isset($_POST["seventh"])||isset($_POST["eighth"])||isset($_POST["nineth"])||isset($_POST["tenth"])){
    echo "<script type='text/javascript'>alert(\"등록되었습니다.\");</script>";
    $file = fopen("진단하기1.txt","w");
    fwrite($file, $first);
    fwrite($file, $second);
    fwrite($file, $third);
    fwrite($file, $fourth);
    fwrite($file, $fifth);
    fwrite($file, $sixth);
    fwrite($file, $seventh);
    fwrite($file, $eighth);
    fwrite($file, $nineth);
    fwrite($file, $tenth);
    fclose($file);
  }
 ?>
