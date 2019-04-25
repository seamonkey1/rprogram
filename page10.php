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
  .rule {
    border: 1px solid #333333;
    width: 370px;
    text-align: center;
  }
  .colo {
    color: orange;
  }
  table {
    width: 100%;
  }
  .do {
    border: 1px solid #333333;
    background-color: #2E64FE;
  }
  </style>
</head>
<body>


<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-md-12">
      <h1 class="title">데이터 프레임 내에서 데이터 추출하기(subset 함수)</h1>
      <ul>
        <li>데이터 프레임 내에서 subset 함수를 사용하여 조건을 입력하면 조건에 해당하는 열을 추출할 수 있다.</li>
        <li>subset함수의 규칙은 아래와 같다.</li>
        <div class="rule mt-3"><h3>규칙: subset(<span class="colo">데이터명, 조건</span>)</h3></div>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 text-center">
      <h5>아래의 데이터 프레임에서 나이(ages)가 20이상인 행을 추출하세요.</h5>
      <table border="1">
        <tr>
          <td>kids</td>
          <td>ages</td>
          <td>weight</td>
        </tr>
        <tr>
          <td>Jack</td>
          <td>25</td>
          <td>60</td>
        </tr>
        <tr>
          <td>Jill</td>
          <td>10</td>
          <td>72</td>
        </tr>
        <tr>
          <td>Tom</td>
          <td>31</td>
          <td>66</td>
        </tr>
      </table>
      <div class="box text-left">
        <h3>answer)</h3>
        <h5>>kids<-c("Jack","Jill“, “Tom")</h5>
        <h5>>ages<-c(25,10,31)</h5>
        <h5>>weight<-c(60,72,66)</h5>
        <h5>>data1<-data.frame(kids,ages,weight)</h5>
        <h5>>subset(data1,ages>=20) --- ages가 20이상인 데이터 행 추출</h5>
        <h5>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jack&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;25&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;60</h5>
        <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;31&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;66</h5>
      </div>
    </div>

    <div class="col-md-6 text-center">
      <h3><span class="do"><i class="far fa-smile"></i>직접 해보기<span></h3>
      <h4>아래의 표에서 몸무게(weight)가 65이하인 행을 추출하세요.</h4>
      <table border="1">
        <tr>
          <td>kids</td>
          <td>ages</td>
          <td>weight</td>
        </tr>
        <tr>
          <td>Jack</td>
          <td>25</td>
          <td>60</td>
        </tr>
        <tr>
          <td>Jill</td>
          <td>10</td>
          <td>72</td>
        </tr>
        <tr>
          <td>Tom</td>
          <td>31</td>
          <td>66</td>
        </tr>
      </table>
      <div class="box text-left">
        <h3>answer)</h3>
        <h5>>kids<-c("Jack","Jill“, “Tom")</h5>
        <h5>>ages<-c(25,10,31)</h5>
        <h5>>weight<-c(60,72,66)</h5>
        <h5>>data1<-data.frame(kids,ages,weight)</h5>
        <h5>> <input type="text" class="form-control login-input mb-2" placeholder="여기에 입력하시오."></h5>
        <h5>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jack&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;25&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;60</h5>
      </div>
    </div>
  </div>
  <div class="text-right">
    <a href="page11.php" class="btn btn-primary mb-3">다음 문제 풀기</a>
  </div>
</div>


  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>
