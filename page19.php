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
    .target {
      margin-top: 25%;
    }
    table {
      width: 100%;
    }
    .tear {
      background-color: black;
    }
    .teartext {
      background-color: black;
      color: white;
      position: relative;
      top: -25px;
      left: 80px;
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
        <div class="box mt-3"><h5 class="mt-3">문제2. 아래의 표는 교공초등학교 1학년 1반 학생들의 국어, 영어, 수학,
          과학 점수 성적표이다. 종찬이는 친구들과 장난을 치다가 성적표 아래를 찢어버렸다. </h5></div>
      </div>
    </div>

    <form method="post" action="page20.php" id="page19_form">

      <div class="row">
        <div class="col-md-6 text-center target" id="target">
          <table border="1" class="tablePosition">
            <tr class="data2">
              <td class="data6Value">number</td>
              <td class="data6Value data9Value">name</td>
              <td class="averageValue data6Value data9Value">korean</td>
              <td class="averageValue data6Value data9Value">english</td>
              <td class="averageValue mathValue data6Value data9Value">math</td>
              <td class="averageValue scienceValue data6Value">science</td>
              <td class="data6Value">average</td>
              <td>grade</td>
            </tr>
            <tr>
              <td>4</td>
              <td>박종찬</td>
              <td>84</td>
              <td>91</td>
              <td class="mathValue">88</td>
              <td class="scienceValue">62</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>1</td>
              <td>박채연</td>
              <td>68</td>
              <td>75</td>
              <td class="mathValue">86</td>
              <td class="scienceValue">90</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>6</td>
              <td>이경민</td>
              <td>86</td>
              <td>72</td>
              <td class="mathValue">86</td>
              <td class="scienceValue">76</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>3</td>
              <td>김신우</td>
              <td>59</td>
              <td>54</td>
              <td class="mathValue">66</td>
              <td class="scienceValue">74</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>2</td>
              <td>김선영</td>
              <td>71</td>
              <td>64</td>
              <td class="mathValue">64</td>
              <td class="scienceValue">88</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>7</td>
              <td>주현</td>
              <td>79</td>
              <td>98</td>
              <td class="mathValue">65</td>
              <td class="scienceValue">76</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>5</td>
              <td>윤시영</td>
              <td>89</td>
              <td>59</td>
              <td class="mathValue tear"></td>
              <td class="scienceValue">66</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>8</td>
              <td>최서현</td>
              <td>86</td>
              <td>100</td>
              <td class="mathValue tear"></td>
              <td class="scienceValue tear"></td>
              <td></td>
              <td></td>
            </tr>
          </table>
          <div class="text-right">
            total = q1+q2
          </div>
          <span class="teartext"><i class="fas fa-exclamation"></i>찢어진 부위<span>
        </div>
        <div class="col-md-6">
          <h5 class="question">Step1. number, name, korean, english, math, science의 변수를 설정하세요.</h5>
          <p>number<-c(4,1,6,3,2,7,5,8)</p>
          <p>name<-c(“박종찬”,”박채연”,”이경민”,”김신우”,”김선영”,”주현”,”윤시영”,”최서현”)</p>
          <p>Korean<-c(84,68,86,59,71,79,89,86)</p>
          <p>english<-c(91,75,72,54,64,98,59,100)</p>
          <div class="input-group">
            <label for="math">math <-</label>
            <input name="math" id="math" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <div class="input-group">
            <label for="science">science <-</label>
            <input name="science" id="science" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <hr/>
          <h5 class="question">Step2. 평균을 평균식을 통해 구해보세요.</h5>
          <div class="input-group">
            <label for="average">average <-</label>
            <input name="average" id="average" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <hr/>
          <h5 class="question">Step3. 출석번호, 이름, 국어성적, 영어성적, 수학성적, 과학성적이 포함된 데이터 프레임을 만들어 data6으로 저장하세요.</h5>
          <div class="input-group">
            <label for="data6">data6 <-</label>
            <input name="data6" id="data6" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <hr/>
          <h5 class="question">Step4. data6에서 사라진 점수가 포함된 열을 제거한  데이터 프레임을 data7로 저장하세요.</h5>
          <div class="input-group">
            <label for="data7">data7 <-</label>
            <input name="data7" id="data7" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <hr/>
          <h5 class="question">Step5. 출석 순서에 맞추어 열을 재배치한 데이터프레임을 data8로 저장하세요.</h5>
          <div class="input-group">
            <label for="data8">data8 <-</label>
            <input name="data8" id="data8" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <hr/>
          <h5 class="question">Step6. 이름, 국어, 영어, 수학만을 저장한 데이터를 추출하여 data9로 저장하세요.</h5>
          <div class="input-group">
            <label for="data9">data9 <-</label>
            <input name="data9" id="data9" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <hr/>
          <h5 class="question">Step7. data8에서 영어 점수 60점 이상인 사람을 추출하여 data10으로 저장하세요.</h5>
          <div class="input-group">
            <label for="data10">data10 <-</label>
            <input name="data10" id="data10" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
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
<script src="page19.js"></script>
</html>
<?php
error_reporting(E_ERROR|E_PARSE);
$file = fopen("학습하기2_2.txt","w");
fwrite($file,"시작시간 : ".date("h:i:s").PHP_EOL);
fclose($file);
 ?>
