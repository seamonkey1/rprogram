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
  .box {
    background-color: #FF9999;
  }
  .mybox {
    color : #333333;
  }
  .step1box {
    width: 100%;
    height: 304px;
    background-color: #C0C0C0;
  }
  .step2box {
    width: 100%;
    height: 24px;
    background-color: #C0C0C0;
  }
  </style>
</head>
<body>


<div class="container-fluid">

  <div class="row">
    <div class="col-md-12 text-center">
      <div class="box mt-3"><h3 class="mt-3">정답을 확인하고, 자신이 어떤 부분을 틀렸는지 확인해봅시다.</h3></div>
    </div>
  </div>

  <div class="row mt-5">

    <div class="col-md-6">
      <h2 class="mybox text-center mb-5"><i class="fas fa-user-edit"></i>본인이 쓴답</h2>
      <h5>Step1. learner, major, attendence, lateness, absence, exam, discussion, day 변수를 설정해보세요.</h5>
      <div class="step1box pl-2">
        <?php
          echo nl2br($_POST["page15_1"]);
        ?>
      </div>
      <h5 class="mt-5">Step2. final 을 구하는 식을 활용하여 final의 값을 구해보세요.</h5>
      <div class="step2box pl-2">
        <?php echo $_POST["page15_2"]; ?>
      </div>
      <h6 class="mt-5">Step3. learner, major, attendence, lateness, absence, exam, discussion, day, final이 포함된 데이터 프레임을 만들어 data3으로 명명하여 저장하세요. </h6>
      <div class="step2box pl-2">
        <?php echo $_POST["page15_3"]; ?>
      </div>
    </div>

    <div class="col-md-6">
      <h2 class="mybox text-center mb-5"><i class="far fa-check-square"></i>정답</h2>
      <h5>Step1. learner, major, attendence, lateness, absence, exam, discussion, day 변수를 설정해보세요.</h5>
      <div class="step1box pl-2">
          <p>learner<-c(“성예은”,“성순리”,“서지윤”,“장수영”,“이동주”,“안성찬”,“선우진”)</p>
          <p>major<-c(“관현악”,“컴퓨터”,“산업융합”,“중어중문”,“컴퓨”,“경영”,“국악”)</p>
          <p>attendence<-c(15,8,13,15,15,15,15)</p>
          <p>lateness<-c(0,7,2,0,0,0,0)</p>
          <p>absense<-c(0,7,2,0,0,0,0)</p>
          <p>exam<-c(86,64,72,91,92,79,80_</p>
          <p>discussion<-c(6,9,4,5,8,1,2)</p>
          <p>day<-c(“Mon”,“Wed”,“Tue”,“Mon”,“Thu”,“Fri”,“Sat”)</p>
      </div>
      <h5 class="mt-5">Step2. final 을 구하는 식을 활용하여 final의 값을 구해보세요.</h5>
      <div class="step2box pl-2">
        <p>final<-0.1*absence+0.8*exam+0.1*discussion</p>
      </div>
      <h6 class="mt-5">Step3. learner, major, attendence, lateness, absence, exam, discussion, day, final이 포함된 데이터 프레임을 만들어 data3으로 명명하여 저장하세요. </h6>
      <div class="step2box pl-2">
        <p>data3<-data.frame(learner,major,attendence,lateness,absense,exam,discussion,day,final)</p>
      </div>
    </div>

  </div>
  <div class="text-right mt-3 mb-3">
    <a href="page17.php" class="btn btn-primary mb-3">다음 문제 풀기</a>
  </div>
</div>


  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
  error_reporting(E_ERROR|E_PARSE);
  $step1_1 = "1번 답 : ".$_POST["page15_1"].PHP_EOL;
  $step1_2 = "2번 답 : ".$_POST["page15_2"].PHP_EOL;
  $step1_3 = "3번 답 : ".$_POST["page15_3"].PHP_EOL;

  if(isset($_POST["page15_1"])||isset($_POST["page15_2"])||isset($_POST["page15_3"])){
    echo "<script type='text/javascript'>alert(\"등록되었습니다.\");</script>";
    $file = fopen("학습하기1_3.txt","a");
    fwrite($file, $step1_1);
    fwrite($file, $step1_2);
    fwrite($file, $step1_3);
    fwrite($file,"종료시간 : ".date("h:i:s").PHP_EOL);
    fclose($file);
  }
 ?>
