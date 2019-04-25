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
      margin-top: 10%;
    }
    .question {
      color: #2E64FE;
    }
    .hint_box {
      background-color: #2E64FE;
      color: white;
    }
    .hint_text {
      border: 3px solid #2E64FE;
    }
    .tablebox {
      border: 3px solid #2E64FE;
    }
    label {
      font-size: 1.2em;
    }
  </style>
</head>
<body>


  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12">
        <div class="box mt-3"><h5 class="mt-3">문제2. total 점수에는 q1~q2를 합한 값을 넣어 데이터 프레임을 만드는 코드를 작성해라
          (단, 데이터 프레임 명은 data2로 설정하고, “-”라고 표기된 부분을 결측값을 의미한다)</h5></div>
      </div>
    </div>

    <form method="post" action="page15.php" id="page14_form">

      <div class="row">
        <div class="col-md-6 text-center target" id="target">
          <table border="1">
            <tr class="data2">
              <td class="column1">manager</td>
              <td class="column2">date</td>
              <td class="column3">country</td>
              <td class="column4">gender</td>
              <td class="column5">age</td>
              <td class="column6 total">q1</td>
              <td class="column7 total">q2</td>
              <td>total</td>
            </tr>
            <tr>
              <td class="column1">1</td>
              <td class="column2">10/24/08</td>
              <td class="column3">SWE</td>
              <td class="column4">M</td>
              <td class="column5">32</td>
              <td class="column6">5</td>
              <td class="column7">4</td>
              <td></td>
            </tr>
            <tr>
              <td class="column1">3</td>
              <td class="column2">04/01/08</td>
              <td class="column3">UK</td>
              <td class="column4">F</td>
              <td class="column5">25</td>
              <td class="column6">3</td>
              <td class="column7">5</td>
              <td></td>
            </tr>
            <tr>
              <td class="column1">4</td>
              <td class="column2">10/12/08</td>
              <td class="column3">RUS</td>
              <td class="column4">M</td>
              <td class="column5">39</td>
              <td class="column6">3</td>
              <td class="column7">3</td>
              <td></td>
            </tr>
            <tr>
              <td class="column1">5</td>
              <td class="column2">05/01/09</td>
              <td class="column3">JPN</td>
              <td class="column4">F</td>
              <td class="column5">-</td>
              <td class="column6">2</td>
              <td class="column7">2</td>
              <td></td>
            </tr>
            <tr>
              <td class="column1">6</td>
              <td class="column2">06/05/30</td>
              <td class="column3">KOR</td>
              <td class="column4">M</td>
              <td class="column5">26</td>
              <td class="column6">4</td>
              <td class="column7">2</td>
              <td></td>
            </tr>
            <tr>
              <td class="column1">7</td>
              <td class="column2">11/10/01</td>
              <td class="column3">CHN</td>
              <td class="column4">-</td>
              <td class="column5">-</td>
              <td class="column6">5</td>
              <td class="column7">3</td>
              <td></td>
            </tr>
            <tr>
              <td class="column1">8</td>
              <td class="column2">12/01/22</td>
              <td class="column3">-</td>
              <td class="column4">M</td>
              <td class="column5">35</td>
              <td class="column6">4</td>
              <td class="column7">1</td>
              <td></td>
            </tr>
          </table>
          <div class="text-right">
            total = q1+q2
          </div>
          <!-- <div class="hint text-left mt-5">
            <h4><span class="hint_box">도움말</span></h4>
            <div class="hint_text text-center">

            </div>
          </div> -->
        </div>
        <div class="col-md-6">
          <h5 class="question">Step1. manager, date, country, gender, age, q1, q2을 변수를 설정해보세요.</h5>
          <div class="input-group">
            <label for="manager1">manager <- </label>
            <input name="manager1" id="manager1" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <div class="input-group">
            <label for="date1">date <-</label>
            <input name="date1" id="date1" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <div class="input-group">
            <label for="country1">country <-</label>
            <input name="country1" id="country1" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <div class="input-group">
            <label for="gende1r">gender <-</label>
            <input name="gender1" id="gender1" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <div class="input-group">
            <label for="age1">age <-</label>
            <input name="age1" id="age1" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <div class="input-group">
            <label for="q11">q1 <-</label>
            <input name="q11" id="q11" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <div class="input-group">
            <label for="q21">q2 <-</label>
            <input name="q21" id="q21" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <hr/>
          <h5 class="question">Step2. 덧셈 식을 이용하여 q1과 q2의 합을 구해보세요.</h5>
          <div class="input-group">
            <label for="total1">total <-</label>
            <input name="total1" id="total1" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <hr/>
          <h5 class="question">Step3. manager, date, country, gender, age, q1, q2, total이 포함된 데이터프레임을 만들어 data2로 명명하여 저장하세요.</h5>
          <div class="input-group">
            <label for="data21">data2 <-</label>
            <input name="data21" id="data21" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>

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
<script src="page14.js"></script>
</html>
<?php
  error_reporting(E_ERROR|E_PARSE);

    $file = fopen("학습하기1_2.txt","w");
    fwrite($file,"시작시간 : ".date("h:i:s").PHP_EOL);
    fclose($file);
 ?>
