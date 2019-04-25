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
    height: 24px;
    background-color: #C0C0C0;
  }
  .step2box {
    width: 100%;
    height: 24px;
    background-color: #C0C0C0;
  }
  .step3box {
    width: 100%;
    height: 72px;
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
      <h5>Step2. 순이익(net income)식을 활용하여 순이익을 산출하여 netincome으로 저장하세요.</h5>
      <div class="step1box pl-2">
        <?php
          echo $_POST["step2"];
        ?>
      </div>
      <h5 class="mt-5">Step3. [표1]은 데이터 프레임 이름을 tire1으로 저장하여 만들고, [표2]는 데이터 프레임을 tire2로 저장하여 만드세요.</h5>
      <div class="step3box pl-2">
        <?php echo nl2br($_POST["step3"]); ?>
      </div>
      <h6 class="mt-5">Step4. tire2데이터의 결측값이 포함된 행을 제거하여 tire2로 재명명하세요.</h6>
      <div class="step2box pl-2">
        <?php echo $_POST["step4"]; ?>
      </div>
      <h6 class="mt-5">Step5. tire1과 tire2를 알파벳 순서로 배열하여 각각 tire3과 tire4로 저장하세요.</h6>
      <div class="step3box pl-2">
        <?php echo nl2br($_POST["step5"]); ?>
      </div>
      <h6 class="mt-5">Step6. tire3 데이터프레임과 tire4데이터프레임을 tirename1, tirename2 기준으로 병합하여 tire5로 저장하세요.</h6>
      <div class="step2box pl-2">
        <?php echo $_POST["step6"]; ?>
      </div>
      <h6 class="mt-5">Step7. tire5에서 나라가 미국(USA)이고, 판매량(number)이 100개 이상인 행을 추출하세요.</h6>
      <div class="step2box pl-2">
        <?php echo $_POST["step7"]; ?>
      </div>
      <h6 class="mt-5">Step8. tire5에서 나라가 일본(JPN) 또는 성능점수(perforamnce)가 85점 이상인 행을 추출하세요.  </h6>
      <div class="step2box pl-2">
        <?php echo $_POST["step8"]; ?>
      </div>
    </div>

    <div class="col-md-6">
      <h2 class="mybox text-center mb-5"><i class="far fa-check-square"></i>정답</h2>
      <h5>Step2. 순이익(net income)식을 활용하여 순이익을 산출하여 netincome으로 저장하세요.</h5>
      <div class="step1box pl-2">
          <p>netincome<-income-productioncost*number</p>
      </div>
      <h5 class="mt-5">Step3. [표1]은 데이터 프레임 이름을 tire1으로 저장하여 만들고, [표2]는 데이터 프레임을 tire2로 저장하여 만드세요.</h5>
      <div class="step3box pl-2">
        <p>tire1<-data.frame(tirename1,income,productioncost,number,netincome)</p>
        <p>tire2<-data.frame(tirename2,performance,country)</p>
      </div>
      <h6 class="mt-5">Step4. tire2데이터의 결측값이 포함된 행을 제거하여 tire2로 재명명하세요.</h6>
      <div class="step2box pl-2">
        <p>tire2<-na.omit(tire2)</p>
      </div>
      <h6 class="mt-5">Step5. tire1과 tire2를 알파벳 순서로 배열하여 각각 tire3과 tire4로 저장하세요.</h6>
      <div class="step3box pl-2">
        <p>tire3<-tire1[order(tirename1),]</p>
        <p>tire4<-tire2[order(tirename2),]</p>
      </div>
      <h6 class="mt-5">Step6. tire3 데이터프레임과 tire4데이터프레임을 tirename1, tirename2 기준으로 병합하여 tire5로 저장하세요.</h6>
      <div class="step2box pl-2">
        <p>tire5<-merge(tire3,tire4,by.x="tirename1",by.y="tirename2")</p>
      </div>
      <h6 class="mt-5">Step7. tire5에서 나라가 미국(USA)이고, 판매량(number)이 100개 이상인 행을 추출하세요.</h6>
      <div class="step2box pl-2">
        <p>subset(tire5,country=="USA"&number>100)</p>
      </div>
      <h6 class="mt-5">Step8. tire5에서 나라가 일본(JPN) 또는 성능점수(perforamnce)가 85점 이상인 행을 추출하세요.</h6>
      <div class="step2box pl-2">
        <p>subset(tire5,country==“JPN”|performance>=85)</p>
      </div>
    </div>

  </div>
  <div class="text-right mt-3 mb-3">
    <a href="page27.php" class="btn btn-primary mb-3">다음 문제 풀기</a>
  </div>
</div>


  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
  error_reporting(E_ERROR|E_PARSE);
  $step1_1 = "1번 답 : ".$_POST["step2"].PHP_EOL;
  $step1_2 = "2번 답 : ".$_POST["step3"].PHP_EOL;
  $step1_3 = "3번 답 : ".$_POST["step4"].PHP_EOL;
  $step1_4 = "4번 답 : ".$_POST["step5"].PHP_EOL;
  $step1_5 = "5번 답 : ".$_POST["step6"].PHP_EOL;
  $step1_6 = "6번 답 : ".$_POST["step7"].PHP_EOL;
  $step1_7 = "7번 답 : ".$_POST["step8"].PHP_EOL;

  if(isset($_POST["step2"])||isset($_POST["step3"])||isset($_POST["step4"])||isset($_POST["step5"])||isset($_POST["step6"])||isset($_POST["step7"])||isset($_POST["step8"])){
    echo "<script type='text/javascript'>alert(\"등록되었습니다.\");</script>";
    $file = fopen("학습하기3_3.txt","a");
    fwrite($file, $step1_1);
    fwrite($file, $step1_2);
    fwrite($file, $step1_3);
    fwrite($file, $step1_4);
    fwrite($file, $step1_5);
    fwrite($file, $step1_6);
    fwrite($file, $step1_7);
    fwrite($file,"종료시간 : ".date("h:i:s").PHP_EOL);
    fclose($file);
  }
 ?>
