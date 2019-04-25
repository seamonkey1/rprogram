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
  </style>
</head>
<body>

<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <div class="box mt-3">
        <h4 class="mt-3">
          <ul>
            <li>여러분이 학습한 내용을 바탕으로 아래의 10개의 설문을 작성해주시기 바랍니다.</li>
            <li>0점: 매우 그렇지 않다. / 5점: 보통이다. / 10점: 매우 그렇다.</li>
          </ul>
        </h4>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <form method="post">
        <label for="q1">1.	본 학습 프로그램의 활동은 명확하지 않다.</label>
        <input type="radio" name="q1" value="1" />1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q1" value="2" />2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q1" value="3" />3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q1" value="4" />4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q1" value="5" />5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q1" value="6" />6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q1" value="7" />7 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q1" value="8" />8 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q1" value="9" />9 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q1" value="10" />10

        <label for="q2">2. 본 학습 프로그램의 활동은 학습하는데 별로 효과적이지 않다.</label>
        <input type="radio" name="q2" value="1" />1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q2" value="2" />2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q2" value="3" />3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q2" value="4" />4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q2" value="5" />5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q2" value="6" />6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q2" value="7" />7 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q2" value="8" />8 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q2" value="9" />9 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q2" value="10" />10

        <label for="q3">3. 본 학습 프로그램에서 제시한 어휘, 용어들이 명확하지 않으며, 복잡하다.</label>
        <input type="radio" name="q3" value="1" />1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q3" value="2" />2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q3" value="3" />3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q3" value="4" />4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q3" value="5" />5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q3" value="6" />6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q3" value="7" />7 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q3" value="8" />8 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q3" value="9" />9 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q3" value="10" />10

        <label for="q4">4. 본 학습 프로그램의 학습 내용은 지나치게 어렵고 복잡하다.</label>
        <input type="radio" name="q4" value="1" />1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q4" value="2" />2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q4" value="3" />3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q4" value="4" />4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q4" value="5" />5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q4" value="6" />6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q4" value="7" />7 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q4" value="8" />8 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q4" value="9" />9 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q4" value="10" />10

        <label for="q5">5. 본 학습 프로그램에서 사용되는 코드, 함수 등은 지나치게 어렵고 복잡하다.</label>
        <input type="radio" name="q5" value="1" />1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q5" value="2" />2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q5" value="3" />3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q5" value="4" />4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q5" value="5" />5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q5" value="6" />6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q5" value="7" />7 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q5" value="8" />8 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q5" value="9" />9 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q5" value="10" />10

        <label for="q6">6. 본 학습 프로그램에서 제시한 개념들이 명확하지 않으며, 복잡하다.</label>
        <input type="radio" name="q6" value="1" />1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q6" value="2" />2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q6" value="3" />3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q6" value="4" />4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q6" value="5" />5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q6" value="6" />6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q6" value="7" />7 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q6" value="8" />8 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q6" value="9" />9 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q6" value="10" />10

        <label for="q7">7. 본 학습 프로그램에서 제시한 활동이 데이터 프레임, 추출, 병합의 전반적인 이해를 강화시켰다.</label>
        <input type="radio" name="q7" value="1" />1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q7" value="2" />2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q7" value="3" />3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q7" value="4" />4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q7" value="5" />5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q7" value="6" />6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q7" value="7" />7 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q7" value="8" />8 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q7" value="9" />9 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q7" value="10" />10

        <label for="q8">8. 본 학습 프로그램에서 제시한 활동이 코딩과 함수에 대한 이해를 강화시켰다.</label>
        <input type="radio" name="q8" value="1" />1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q8" value="2" />2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q8" value="3" />3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q8" value="4" />4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q8" value="5" />5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q8" value="6" />6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q8" value="7" />7 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q8" value="8" />8 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q8" value="9" />9 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q8" value="10" />10

        <label for="q9">9. 본 학습 프로그램에서 제시한 활동이 사용되는 개념과 정의에 대한 이해를 강화시켰다.</label>
        <input type="radio" name="q9" value="1" />1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q9" value="2" />2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q9" value="3" />3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q9" value="4" />4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q9" value="5" />5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q9" value="6" />6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q9" value="7" />7 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q9" value="8" />8 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q9" value="9" />9 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q9" value="10" />10

        <label for="q10">10. 본 학습 프로그램에서 제시한 활동이 R프로그래밍에 대한 전반적인 이해를 강화시켰다.</label>
        <input type="radio" name="q10" value="1" />1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q10" value="2" />2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q10" value="3" />3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q10" value="4" />4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q10" value="5" />5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q10" value="6" />6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q10" value="7" />7 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q10" value="8" />8 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q10" value="9" />9 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="q10" value="10" />10
        <br>
        <br>
        <br>
        <label for=freetalk>기타로 수업에 관련해서 하시고 싶으신 말씀을 자유롭게 적어주세요.</label>
        <input name="freetalk" id="freetalk" type="text" class="form-control login-input mb-2" placeholder="">
        <div class="text-right mb-3 mt-3">
          <input type="submit" class="btn btn-primary" id="input_btn" value="등록">
        </div>
      </form>
    </div>
  </div>

</div>

  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
  error_reporting(E_ERROR|E_PARSE);
  $q1 = "1번 : ".$_POST["q1"].PHP_EOL;
  $q2 = "2번 : ".$_POST["q2"].PHP_EOL;
  $q3 = "3번 : ".$_POST["q3"].PHP_EOL;
  $q4 = "4번 : ".$_POST["q4"].PHP_EOL;
  $q5 = "5번 : ".$_POST["q5"].PHP_EOL;
  $q6 = "6번 : ".$_POST["q6"].PHP_EOL;
  $q7 = "7번 : ".$_POST["q7"].PHP_EOL;
  $q8 = "8번 : ".$_POST["q8"].PHP_EOL;
  $q9 = "9번 : ".$_POST["q9"].PHP_EOL;
  $q10 = "10번 : ".$_POST["q10"].PHP_EOL;
  $q11 = "11번 : ".$_POST["freetalk"].PHP_EOL;
  if(isset($_POST["q1"])||isset($_POST["q2"])||isset($_POST["q3"])||isset($_POST["q4"])||isset($_POST["q5"])||isset($_POST["q6"])||isset($_POST["q7"])
||isset($_POST["q8"])||isset($_POST["q9"])||isset($_POST["q10"])||isset($_POST["freetalk"])){
    echo "<script type='text/javascript'>alert(\"고생하셨습니다.\");</script>";
    $file = fopen("설문조사.txt","w");
    fwrite($file,$q1);
    fwrite($file,$q2);
    fwrite($file,$q3);
    fwrite($file,$q4);
    fwrite($file,$q5);
    fwrite($file,$q6);
    fwrite($file,$q7);
    fwrite($file,$q8);
    fwrite($file,$q9);
    fwrite($file,$q10);
    fwrite($file,$q11);
    fclose($file);
  }
 ?>
