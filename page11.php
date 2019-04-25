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
    width: 1100px;
    text-align: center;
  }
  .colo {
    color: orange;
  }
  .coloo {
    color: red;
  }
  table {
    width: 100%;
  }
  .do {
    border: 1px solid #333333;
    background-color: #2E64FE;
  }
  .bor {
    border: 3px solid orange;
  }
  .arrow {
    font-size: 3rem;
  }
  .box {
    border:1px solid orange;
    background-color: orange;
    width: 200px;
    position: relative;
    top: -250px;
    left: 300px;
  }
  </style>
</head>
<body>


<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-md-12">
      <h1 class="title">두 데이터 프레임 병합하기(merge 함수)</h1>
      <ul>
        <li>merge 함수는 두 데이터프레임을 병합할 때 사용한다. 함수의 규칙은 다음과 같다.</li>
        <div class="rule mt-3"><h5>merge(<span class="colo">병합할 데이터명1</span>, <span class="coloo">병합할 데이터명2</span>, by.x=“<span class="colo">데이터명1의 병합합 열 이름</span>”,by.y=“<span class="coloo">데이터2의 병합할 열 이름</span>”)</h5></div>
        <li class="mt-3">두 데이터 프레임을 병합할 때 기준이 되는 열은 데이터명1이다. </li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 text-center">
      <h4 class="text-left">data1의 kids1열을 기준으로 data1과 data2를 병합하여 data3을 완성하는 코드를 작성해보세요.</h4>
      <div class="row">
        <div class="col-md-3">
          <table border="1">
            <tr>
              <td class="bor">kids1</td>
              <td>ages</td>
            </tr>
            <tr>
              <td class="bor">Jack</td>
              <td>25</td>
            </tr>
            <tr>
              <td class="bor">Jill</td>
              <td>10</td>
            </tr>
            <tr>
              <td class="bor">Tom</td>
              <td>31</td>
            </tr>
          </table>
          data1
        </div>
        <div class="col-md-3">
          <table border="1">
            <tr>
              <td>kids2</td>
              <td>height</td>
            </tr>
            <tr>
              <td>Jack</td>
              <td>173</td>
            </tr>
            <tr>
              <td>Tom</td>
              <td>185</td>
            </tr>
            <tr>
              <td>Sam</td>
              <td>192</td>
            </tr>
          </table>
          data2
        </div>
        <span class="arrow"><i class="fas fa-long-arrow-alt-right"></i></span>
        <div class="col-md-3">
          <table border="1">
            <tr>
              <td class="bor">kids1</td>
              <td>ages</td>
              <td>height</td>
            </tr>
            <tr>
              <td class="bor">Jack</td>
              <td>25</td>
              <td>173</td>
            </tr>
            <tr>
              <td class="bor">Tom</td>
              <td>31</td>
              <td>185</td>
            </tr>
          </table>
          data3
        </div>
      </div>
      <div class="text-left">
        <h3>answer)</h3>
        <h5>>kids1<-c("Jack","Jill“, “Tom")</h5>
        <h5>>ages<-c(25,10,31)</h5>
        <h5>>kids2<-c(“Jack”,”Tom”,”Sam”)</h5>
        <h5>>height<-c(173,185,192)</h5>
        <h5>>data1<-data.frame(kids1,ages)</h5>
        <h5>>data2<-data.frame(kids2,height)</h5>
        <h5>>data3<-merge(data1,data2,by.x=“kids1”,by.y=“kids2”)</h5>
      </div>
      <div class="box">
        병합된 데이터 프레임의 열은 kids1로 나오고, data1과 data2에 겹치는 항목만 병합되고 나머지 항목은 없어짐
      </div>
    </div>
    <div class="col-md-6 text-center">
      <h3><span class="do"><i class="far fa-smile"></i>직접 해보기<span></h3>
      <h4>data1의 kids2열을 기준으로 data1과 data2를 병합하여 data3을 완성하는 코드를 작성해보세요. </h4>
      <div class="row">
        <div class="col-md-3">
          <table border="1">
            <tr>
              <td>kids1</td>
              <td>ages</td>
            </tr>
            <tr>
              <td>Jack</td>
              <td>25</td>
            </tr>
            <tr>
              <td>Jill</td>
              <td>10</td>
            </tr>
            <tr>
              <td>Tom</td>
              <td>31</td>
            </tr>
          </table>
          data1
        </div>
        <div class="col-md-3">
          <table border="1">
            <tr>
              <td>kids2</td>
              <td>height</td>
            </tr>
            <tr>
              <td>Jack</td>
              <td>173</td>
            </tr>
            <tr>
              <td>Tom</td>
              <td>185</td>
            </tr>
            <tr>
              <td>Sam</td>
              <td>192</td>
            </tr>
          </table>
          data2
        </div>
        <span class="arrow"><i class="fas fa-long-arrow-alt-right"></i></span>
        <div class="col-md-3">
          <table border="1">
            <tr>
              <td>kids2</td>
              <td>height</td>
              <td>ages</td>
            </tr>
            <tr>
              <td>Jack</td>
              <td>173</td>
              <td>25</td>
            </tr>
            <tr>
              <td>Tom</td>
              <td>185</td>
              <td>31</td>
            </tr>
          </table>
          data3
        </div>
      </div>
      <div class="text-left">
        <h3>answer)</h3>
        <h5>>kids1<-c("Jack","Jill“, “Tom")</h5>
        <h5>>ages<-c(25,10,31)</h5>
        <h5>>kids2<-c(“Jack”,”Tom”,”Sam”)</h5>
        <h5>>height<-c(173,185,192)</h5>
        <h5>>data1<-data.frame(kids1,ages)</h5>
        <h5>>data2<-data.frame(kids2,height)</h5>
        <h5>><input type="text" class="form-control login-input mb-2" placeholder="여기에 입력하시오."></h5>
      </div>
    </div>
  </div>
  <div class="text-right">
    <a href="page12.php" class="btn btn-primary mb-3">다음 문제 풀기</a>
  </div>
</div>


  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>
