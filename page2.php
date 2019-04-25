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
          <h1>The R programming Language</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 mx-auto">
        <h3>
          <p>이 프로그램은 통계와 데이터 과학에 쓰이는 오픈 소스 프로그래밍 언어인 R프로그래밍 언어에 관한 가장 기초적인 내용을 다루고 있습니다.</p>
          <p>
            R프로그래밍 언어와 관련한 개요와 설명을 사전에 습득하고, R프로그래밍을 활용하여 데이터를 선언하고, 연산하고, 데이터프레임을 만들어 해당되는
            조건에 해당되는 행이나 열을 추출하는 함수의 사용을 익히는데 주안점을 두고 있습니다.
          </p>
          <p>
            또한 여러분이 학습이 진행되어가는 중에 과제와 관련한 도움말이 게시될 것입니다. 도움말을 잘 보시면 곳곳에 힌트가 숨어있습니다. 잘 보시고
            올바른 답을 기입 또는 선택해주세요. 학습이 준비되었으면  NEXT 버튼을 누르세요.
          </p>
        </h3>
      </div>
    </div>
    <div class="text-center">
      <a href="page3.php" class="btn btn-primary mb-3">Next</a>
    </div>
  </div>



  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
  error_reporting(E_ERROR|E_PARSE);
  $name = "이름 : ".$_POST["name"].PHP_EOL;
  $filename = $_POST["name"];
  $phone = "전화번호 : ".$_POST["phone"].PHP_EOL;
  $major = "전공 : ".$_POST["major"].PHP_EOL;
  $age = "나이 : ".$_POST["age"].PHP_EOL;
  $sex = "성별 : ".$_POST["sex"].PHP_EOL;
  $have = "경험 : ".$_POST["have"].PHP_EOL;
  $level = "실력 : ".$_POST["level"].PHP_EOL;
  if(isset($_POST["name"])||isset($_POST["phone"])||isset($_POST["major"])||isset($_POST["age"])||isset($_POST["sex"])||isset($_POST["level"])||isset($_POST["have"])){
    echo "<script type='text/javascript'>alert(\"등록되었습니다.\");</script>";
    $file = fopen("$filename.txt","w");
    fwrite($file, $name);
    fwrite($file,$phone);
    fwrite($file,$major);
    fwrite($file,$age);
    fwrite($file,$sex);
    fwrite($file,$have);
    fwrite($file,$level);
    fclose($file);
  }
 ?>
