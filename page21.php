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
      <h5>Step1.  name, single, double, triple, bat의 변수를 설정하세요.</h5>
      <div class="step1box pl-2">
        <?php
          echo nl2br($_POST["step1"]);
        ?>
      </div>
      <h5 class="mt-5">Step2. 안타 수를 구하는 식을 통해 선수 별로 안타의 수를 구해보세요.</h5>
      <div class="step2box pl-2">
        <?php echo $_POST["step2"]; ?>
      </div>
      <h6 class="mt-5">Step3. 타율을 구하는 식을 통해 선수 별로 타율을 구해보세요.</h6>
      <div class="step2box pl-2">
        <?php echo $_POST["step3"]; ?>
      </div>
      <h6 class="mt-5">Step4. name, average, single, double, triple, home, hit, bat 변수를 포함한 데이터프레임을 baseball1 로 저장하세요.</h6>
      <div class="step2box pl-2">
        <?php echo $_POST["step4"]; ?>
      </div>
      <h6 class="mt-5">Step5. baseball1의 데이터프레임에서 결측값이 포함된 행을 제외하여 baseball2로 저장하세요. </h6>
      <div class="step2box pl-2">
        <?php echo $_POST["step5"]; ?>
      </div>
      <h6 class="mt-5">Step6. baseball2의 데이터 프레임에서 이름을 순서대로 배열하여 baseball3로 저장하세요.</h6>
      <div class="step2box pl-2">
        <?php echo $_POST["step6"]; ?>
      </div>
      <h6 class="mt-5">Step7. baseball2의 데이터에서 single과 double의 데이터를 출력하여 baseball4로 저장하세요.</h6>
      <div class="step2box pl-2">
        <?php echo $_POST["step7"]; ?>
      </div>
      <h6 class="mt-5">Step8. baseball2의 데이터에서 안타(single) 수가 20이상인 선수의 성적을 출력하여 baseball5로 저장하세요.</h6>
      <div class="step2box pl-2">
        <?php echo $_POST["step8"]; ?>
      </div>
    </div>

    <div class="col-md-6">
      <h2 class="mybox text-center mb-5"><i class="far fa-check-square"></i>정답</h2>
      <h5>Step1.  name, single, double, triple, bat의 변수를 설정하세요.</h5>
      <div class="step1box pl-2">
          <p>name<-c("진갑용","박진만","추신수","이대호","김태균","최희섭","이종범")</p>
          <p>single<-c(12,11,25,30,34,21,16)</p>
          <p>double<-c(5,NA,6,2,1,4,6)</p>
          <p>triple<-c(2,6,4,2,5,5,1)</p>
          <p>home<-c(1,NA,12,13,10,9,0)</p>
          <p>bat<-c(62,61,65,69,74,61,60)</p>
      </div>
      <h5 class="mt-5">Step2. 안타 수를 구하는 식을 통해 선수 별로 안타의 수를 구해보세요.</h5>
      <div class="step2box pl-2">
        <p>hits<-single+double+triple+home</p>
      </div>
      <h6 class="mt-5">Step3. 타율을 구하는 식을 통해 선수 별로 타율을 구해보세요.</h6>
      <div class="step2box pl-2">
        <p>average<-hits/bat</p>
      </div>
      <h6 class="mt-5">Step4. name, average, single, double, triple, home, hit, bat 변수를 포함한 데이터프레임을 baseball1 로 저장하세요.</h6>
      <div class="step2box pl-2">
        <p>baseball1<-data.frame(name,average,single,double,triple,home,hits,bat)</p>
      </div>
      <h6 class="mt-5">Step5. baseball1의 데이터프레임에서 결측값이 포함된 행을 제외하여 baseball2로 저장하세요.</h6>
      <div class="step2box pl-2">
        <p>baseball2<-na.omit(baseball1)</p>
      </div>
      <h6 class="mt-5">Step6. baseball2의 데이터 프레임에서 이름을 순서대로 배열하여 baseball3로 저장하세요.</h6>
      <div class="step2box pl-2">
        <p>baseball3<-baseball2[order(name),]</p>
      </div>
      <h6 class="mt-5">Step7. baseball2의 데이터에서 single과 double의 데이터를 출력하여 baseball4로 저장하세요.</h6>
      <div class="step2box pl-2">
        <p>baseball4<-baseball2[,c(3,4)]</p>
      </div>
      <h6 class="mt-5">Step8. baseball2의 데이터에서 안타(single) 수가 20이상인 선수의 성적을 출력하여 baseball5로 저장하세요.</h6>
      <div class="step2box pl-2">
        <p>baseball5<-subset(baseball2,single>=20)</p>
      </div>
    </div>

  </div>
  <div class="text-right mt-3 mb-3">
    <a href="page22.php" class="btn btn-primary mb-3">다음 문제 풀기</a>
  </div>
</div>


  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
  error_reporting(E_ERROR|E_PARSE);
  $step1_1 = "1번 답 : ".$_POST["step1"].PHP_EOL;
  $step1_2 = "2번 답 : ".$_POST["step2"].PHP_EOL;
  $step1_3 = "3번 답 : ".$_POST["step3"].PHP_EOL;
  $step1_4 = "4번 답 : ".$_POST["step4"].PHP_EOL;
  $step1_5 = "5번 답 : ".$_POST["step5"].PHP_EOL;
  $step1_6 = "6번 답 : ".$_POST["step6"].PHP_EOL;
  $step1_7 = "7번 답 : ".$_POST["step7"].PHP_EOL;
  $step1_8 = "8번 답 : ".$_POST["step8"].PHP_EOL;

  if(isset($_POST["step1"])||isset($_POST["step2"])||isset($_POST["step3"])||isset($_POST["step4"])||isset($_POST["step5"])||isset($_POST["step6"])||isset($_POST["step7"])||isset($_POST["step8"])){
    echo "<script type='text/javascript'>alert(\"등록되었습니다.\");</script>";
    $file = fopen("학습하기2_3.txt","a");
    fwrite($file, $step1_1);
    fwrite($file, $step1_2);
    fwrite($file, $step1_3);
    fwrite($file, $step1_4);
    fwrite($file, $step1_5);
    fwrite($file, $step1_6);
    fwrite($file, $step1_7);
    fwrite($file, $step1_8);
    fwrite($file,"종료시간 : ".date("h:i:s").PHP_EOL);
    fclose($file);
  }
 ?>
