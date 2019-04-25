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
  .target {
    margin-top: 20%;
  }
  .question {
    color: #2E64FE;
  }
  .area {
    width: 100%;
  }
  </style>
</head>
<body>


<div class="container-fluid">
<form method="post" action="page21.php">
  <div class="row">
    <div class="col-md-12 text-center">
      <div class="box mt-3"><h4 class="mt-3">문제3. 아래의 표는 차종 별로 연비, 실린더, 자동/수동 여부를 나타낸 것입니다. 다음의 물음에 답하세요.</h4></div>
    </div>
  </div>

  <div class="row mt-5">

    <div class="col-md-6 target">
      <p>※final: 안타 수(hits)= 1루타(single)+2루타(double)+3루타(triple)+홈런(home)</p>
      <p>※타율= 안타 수(hits)/타석 수(bat)</p>
      <table border="1">
        <tr>
          <td>name</td>
          <td>average</td>
          <td>single</td>
          <td>double</td>
          <td>triple</td>
          <td>home</td>
          <td>hits</td>
          <td>bat</td>
        </tr>
        <tr>
          <td>진갑용</td>
          <td></td>
          <td>12</td>
          <td>5</td>
          <td>2</td>
          <td>1</td>
          <td></td>
          <td>62</td>
        </tr>
        <tr>
          <td>박진만</td>
          <td></td>
          <td>11</td>
          <td>-</td>
          <td>6</td>
          <td>-</td>
          <td></td>
          <td>61</td>
        </tr>
        <tr>
          <td>추신수</td>
          <td></td>
          <td>25</td>
          <td>6</td>
          <td>4</td>
          <td>12</td>
          <td></td>
          <td>65</td>
        </tr>
        <tr>
          <td>이대호</td>
          <td></td>
          <td>30</td>
          <td>2</td>
          <td>2</td>
          <td>13</td>
          <td></td>
          <td>69</td>
        </tr>
        <tr>
          <td>김태균</td>
          <td></td>
          <td>34</td>
          <td>1</td>
          <td>5</td>
          <td>10</td>
          <td></td>
          <td>74</td>
        </tr>
        <tr>
          <td>최희섭</td>
          <td></td>
          <td>21</td>
          <td>4</td>
          <td>5</td>
          <td>9</td>
          <td></td>
          <td>61</td>
        </tr>
        <tr>
          <td>이종범</td>
          <td></td>
          <td>16</td>
          <td>6</td>
          <td>1</td>
          <td>0</td>
          <td></td>
          <td>60</td>
        </tr>
      </table>
    </div>

    <div class="col-md-6">
      <h5 class="question">Step1. name, single, double, triple, bat의 변수를 설정하세요.</h5>
      <textarea name="step1" id="step1" rows="5" class="area" placeholder="여기에 코드를 입력하세요."></textarea>
      <hr/>
      <h5 class="question">Step2. 안타 수를 구하는 식을 통해 선수 별로 안타의 수를 구해보세요.</h5>
      <input name="step2" id="step2" type="text" class="form-control login-input mb-2" placeholder="여기에 코드를 입력하세요.">
      <hr/>
      <h5 class="question">Step3. 타율을 구하는 식을 통해 선수 별로 타율을 구해보세요.</h5>
      <input name="step3" id="step3" type="text" class="form-control login-input mb-2" placeholder="여기에 코드를 입력하세요.">
      <hr/>
      <h5 class="question">Step4. name, average, single, double, triple, home, hit, bat 변수를 포함한 데이터프레임을 baseball1 로 저장하세요.</h5>
      <input name="step4" id="step4" type="text" class="form-control login-input mb-2" placeholder="여기에 코드를 입력하세요.">
      <hr/>
      <h5 class="question">Step5. baseball1의 데이터프레임에서 결측값이 포함된 행을 제외하여 baseball2로 저장하세요.</h5>
      <input name="step5" id="step5" type="text" class="form-control login-input mb-2" placeholder="여기에 코드를 입력하세요.">
      <hr/>
      <h5 class="question">Step6. baseball2의 데이터 프레임에서 이름을 순서대로 배열하여 baseball3로 저장하세요.</h5>
      <input name="step6" id="step6" type="text" class="form-control login-input mb-2" placeholder="여기에 코드를 입력하세요.">
      <hr/>
      <h5 class="question">Step7. baseball2의 데이터에서 single과 double의 데이터를 출력하여 baseball4로 저장하세요.</h5>
      <input name="step7" id="step7" type="text" class="form-control login-input mb-2" placeholder="여기에 코드를 입력하세요.">
      <hr/>
      <h5 class="question">Step8. baseball2의 데이터에서 안타(single) 수가 20이상인 선수의 성적을 출력하여 baseball5로 저장하세요</h5>
      <input name="step8" id="step8" type="text" class="form-control login-input mb-2" placeholder="여기에 코드를 입력하세요.">
      <hr/>
    </div>

  </div>
  <div class="text-right mb-3">
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
  $step1_1 = "1번 답 : ".$_POST["math"].PHP_EOL;
  $step1_2 = "2번 답 : ".$_POST["science"].PHP_EOL;
  $step1_3 = "3번 답 : ".$_POST["average"].PHP_EOL;
  $step1_4 = "4번 답 : ".$_POST["data6"].PHP_EOL;
  $step1_5 = "5번 답 : ".$_POST["data7"].PHP_EOL;
  $step1_6 = "6번 답 : ".$_POST["data8"].PHP_EOL;
  $step1_7 = "7번 답 : ".$_POST["data9"].PHP_EOL;
  $step2_1 = "8번 답 : ".$_POST["data10"].PHP_EOL;

  if(isset($_POST["math"])||isset($_POST["science"])||isset($_POST["average"])||isset($_POST["data6"])||isset($_POST["data7"])||
  isset($_POST["data8"])||isset($_POST["data9"])||isset($_POST["data10"])){
    echo "<script type='text/javascript'>alert(\"등록되었습니다.\");</script>";
    $file = fopen("학습하기2_2.txt","a");
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
    $file2 = fopen("학습하기2_3.txt","w");
    fwrite($file2,"시작시간 : ".date("h:i:s").PHP_EOL);
    fclose($file2);
  }
 ?>
