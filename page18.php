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
    .question {
      color: #2E64FE;
    }
  </style>
</head>
<body>


  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12 text-center">
        <div class="box mt-3"><h5 class="mt-3">문제1. 아래의 표는 차종 별로 연비, 실린더, 자동/수동 여부를 나타낸 것입니다. 다음의 물음에 답하세요.</h5></div>
      </div>
    </div>

    <div class="row mt-5">

      <div class="col-md-6 text-center">
        <table border="1">
          <tr>
            <td>car</td>
            <td>mpg</td>
            <td>cyl</td>
            <td>am</td>
            <td>price</td>
          </tr>
          <tr>
            <td>mazda</td>
            <td>21.4</td>
            <td>6</td>
            <td>0</td>
            <td>2340</td>
          </tr>
          <tr>
            <td>bmw320d</td>
            <td>23.4</td>
            <td>5</td>
            <td>1</td>
            <td>-</td>
          </tr>
          <tr>
            <td>avante</td>
            <td>18.1</td>
            <td>5</td>
            <td>0</td>
            <td>4000</td>
          </tr>
          <tr>
            <td>corona</td>
            <td>22.8</td>
            <td>4</td>
            <td>0</td>
            <td>-</td>
          </tr>
          <tr>
            <td>civic</td>
            <td>21.5</td>
            <td>4</td>
            <td>0</td>
            <td>3100</td>
          </tr>
          <tr>
            <td>k5</td>
            <td>18.9</td>
            <td>6</td>
            <td>1</td>
            <td>3900</td>
          </tr>
        </table>
      </div>

      <div class="col-md-6">
        <h5 class="question">Step 1. car, mpg, cyl, am, price의 변수를 설정하세요.</h5>
        <ul>
          <p>car<-c("mazda","bmw320d","avante","corona","civic",“k5”)</p>
          <p>mpg<-c(21.4,23.4,18.1,22.8,21.5,18.9)</p>
          <p>cyl<-c(6,5,5,4,4,6)</p>
          <p>am<-c(0,1,0,0,0,1)</p>
          <p>price<-c(2340,NA,4000,NA,3100,3900)</p>
        </ul>
        <h5 class="question">Step2. 데이터 프레임을 만들어 car1으로 저장하세요.</h5>
        <ul>
          <p>car1<-data.frame(car,mpg,cyl,am,price)</p>
        </ul>
        <h5 class="question">Step3. 결측값이 포함된 행을 제거한 데이터 프레임을 car2로 저장하세요.</h5>
        <ul>
          <p>car2<-na.omit(car1)</p>
        </ul>
        <h5 class="question">Step4. car2 데이터프레임을 알파벳 순서로 맞추어 행을 재배치한 데이터 프레임을 car3로 저장하세요.</h5>
        <ul>
          <p>car3<-car2[order(car),]</p>
        </ul>
        <h5>Step5. car3의 데이터에서 car, mpg, am을 추출하여 car4로 저장하세요.</h5>
        <ul>
          <p>car4<-car3[,c(1,2,4)]</p>
        </ul>
        <h5 class="question">Step6. subset함수를 사용하여 car3의 데이터에서 연비가 20이상인 행을 추출하여 car5데이터로 저장하세요.</h5>
        <ul>
          <p>car5<-subset(car3,mpg>20)</p>
        </ul>
      </div>

    </div>

    <form action="page19.php" method="post">
      <div class="text-right mb-3">
        <input type="submit" class="btn btn-primary" id="input_btn" value="다음 문제 풀기">
      </div>
    </form>

  </div>


  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>
