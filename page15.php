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
  table {
    width: 100%;
  }
  textarea {
    width: 100%;
  }
  </style>
</head>
<body>


<div class="container-fluid">

  <div class="row">
    <div class="col-md-12 text-center">
      <div class="box mt-3"><h3 class="mt-3">문제3. final 점수를 아래의 식을 통해 산출하고, 데이터프레임을 만들어 data3으로 명명하여 저장하세요.</h3></div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-md-12 text-center">
      <h5 class="text-right">final: (0.1 X 출석률) + (0.8 X 시험점수) + (0.1 X 토의점수) </h5>
      <table border="1">
        <tr>
          <td>learner</td>
          <td>major</td>
          <td>attendence</td>
          <td>lateness</td>
          <td>absence</td>
          <td>exam</td>
          <td>discussion</td>
          <td>day</td>
          <td>final</td>
        </tr>
        <tr>
          <td>성예은</td>
          <td>관현악</td>
          <td>15</td>
          <td>0</td>
          <td>0</td>
          <td>86</td>
          <td>6</td>
          <td>Mon</td>
          <td></td>
        </tr>
        <tr>
          <td>성순리</td>
          <td>컴퓨터</td>
          <td>8</td>
          <td>7</td>
          <td>7</td>
          <td>64</td>
          <td>9</td>
          <td>Wed</td>
          <td></td>
        </tr>
        <tr>
          <td>서지윤</td>
          <td>산업융합</td>
          <td>13</td>
          <td>2</td>
          <td>2</td>
          <td>72</td>
          <td>4</td>
          <td>Tue</td>
          <td></td>
        </tr>
        <tr>
          <td>장수영</td>
          <td>중어중문</td>
          <td>15</td>
          <td>0</td>
          <td>0</td>
          <td>91</td>
          <td>5</td>
          <td>Mon</td>
          <td></td>
        </tr>
        <tr>
          <td>이동주</td>
          <td>컴퓨터</td>
          <td>15</td>
          <td>0</td>
          <td>0</td>
          <td>92</td>
          <td>8</td>
          <td>Thu</td>
          <td></td>
        </tr>
        <tr>
          <td>안성찬</td>
          <td>경영</td>
          <td>15</td>
          <td>0</td>
          <td>0</td>
          <td>79</td>
          <td>1</td>
          <td>Fri</td>
          <td></td>
        </tr>
        <tr>
          <td>선우진</td>
          <td>국악</td>
          <td>15</td>
          <td>0</td>
          <td>0</td>
          <td>80</td>
          <td>2</td>
          <td>Sat</td>
          <td></td>
        </tr>
      </table>
    </div>
  </div>

<form action="page16.php" method="post">
  <div class="row mt-5">
    <div class="col-md-12">
        <h4>Step1. learner, major, attendence, lateness, absence, exam, discussion, day 변수를 설정해보세요.</h4>
        <textarea name="page15_1" rows="8" placeholder="여기에 입력하시오"></textarea>
        <h4 class="mt-5">Step2. final 을 구하는 식을 활용하여 final의 값을 구해보세요.</h4>
        <textarea name="page15_2" rows="1" placeholder="여기에 입력하시오"></textarea>
        <h4 class="mt-5">Step3. learner, major, attendence, lateness, absence, exam, discussion, day, final이 포함된 데이터 프레임을 만들어 data3으로 명명하여 저장하세요.</h4>
        <textarea name="page15_3" rows="1" placeholder="여기에 입력하시오"></textarea>
    </div>
  </div>
  <div class="text-right mb-3 mt-3">
    <input type="submit" class="btn btn-primary" id="input_btn" value="다음 문제 풀기">
  </div>
  </form>

</div>


  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
  error_reporting(E_ERROR|E_PARSE);
  $step1_1 = "1번 답 : ".$_POST["manager1"].PHP_EOL;
  $step1_2 = "2번 답 : ".$_POST["date1"].PHP_EOL;
  $step1_3 = "3번 답 : ".$_POST["country1"].PHP_EOL;
  $step1_4 = "4번 답 : ".$_POST["gender1"].PHP_EOL;
  $step1_5 = "5번 답 : ".$_POST["age1"].PHP_EOL;
  $step1_6 = "6번 답 : ".$_POST["q11"].PHP_EOL;
  $step1_7 = "7번 답 : ".$_POST["q21"].PHP_EOL;
  $step2_1 = "8번 답 : ".$_POST["total1"].PHP_EOL;
  $step3_1 = "9번 답 : ".$_POST["data21"].PHP_EOL;

  if(isset($_POST["manager1"])||isset($_POST["date1"])||isset($_POST["country1"])||isset($_POST["gender1"])||isset($_POST["age1"])||
  isset($_POST["q11"])||isset($_POST["q21"])||isset($_POST["total1"])||isset($_POST["data21"])){
    echo "<script type='text/javascript'>alert(\"등록되었습니다.\");</script>";
    $file = fopen("학습하기1_2.txt","a");
    fwrite($file, $step1_1);
    fwrite($file, $step1_2);
    fwrite($file, $step1_3);
    fwrite($file, $step1_4);
    fwrite($file, $step1_5);
    fwrite($file, $step1_6);
    fwrite($file, $step1_7);
    fwrite($file, $step2_1);
    fwrite($file, $step3_1);
    fwrite($file,"종료시간 : ".date("h:i:s").PHP_EOL);
    fclose($file);

    $file2 = fopen("학습하기1_3.txt","w");
    fwrite($file2,"시작시간 : ".date("h:i:s").PHP_EOL);
    fclose($file2);
  }
 ?>
