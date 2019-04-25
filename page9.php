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
  table {
    width: 100%;
  }
  .delete {
    border: 3px solid red;
  }
  .do {
    border: 1px solid #333333;
    background-color: #2E64FE;
  }
  .deleteText {
    position: relative;
    top:-30px;
    background-color: red;
    color: white;
  }
  .arrow {
    font-size: 3rem;
  }
  </style>
</head>
<body>


<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-md-12">
      <h1 class="title">결측값 및 결측값 제외</h1>
      <ul>
        <li>결측값이라는 것은 존재하지 않는(null) 값의 일종으로, 변수(variable) 등이며 값은 존재하는 것이지만, 그 시점에서 아직 정해져 있지 않은 값을 표시한다.</li>
        <li>아래의 예제는 ages 열에 결측값이 있는 데이터프레임을 na.omit 함수로 결측값을 포함한 행을 제거하는 코드이다.</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 text-center">
      <div class="row">
        <div class="col-md-5">
          <table border="1">
            <tr>
              <td>kids</td>
              <td>ages</td>
            </tr>
            <tr class="delete">
              <td>Jack</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Jill</td>
              <td>10</td>
            </tr>
          </table>
          <span class="deleteText">제거</span>
        </div>
        <span class="arrow"><i class="fas fa-long-arrow-alt-right"></i></span>
        <div class="col-md-5">
          <table border="1">
            <tr>
              <td>kids</td>
              <td>ages</td>
            </tr>
            <tr>
              <td>Jill</td>
              <td>10</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="box text-left">
        <h3>answer)</h3>
        <h5>>kids<-c("Jack","Jill") ---- 1 첫 번째 열의 데이터 입력</h5>
        <h5>>ages<-c(NA,10) ---- 2 두 번째 열의 데이터 입력</h5>
        <h5>>data1<-data.frame(kids,ages) ---- 3 data.frame 함수로 데이터 프레임을 만들어 data1에 저장</h5>
        <h5>>data2<-na.omit(data1)</h5>
        <h5>>data2</h5>
      </div>
    </div>

    <div class="col-md-6 text-center">
      <h3><span class="do"><i class="far fa-smile"></i>직접 해보기<span></h3>
      <h4>아래처럼 결측값이 있는 행을 제거하는 코드를 작성하세요.</h4>
      <table border="1">
        <tr>
          <td>fruits</td>
          <td>weight</td>
          <td>price</td>
        </tr>
        <tr>
          <td>apple</td>
          <td>5</td>
          <td>1000</td>
        </tr>
        <tr>
          <td>pear</td>
          <td>NA</td>
          <td>2000</td>
        </tr>
      </table>
      <textarea class="mt-3" name="name" rows="8" cols="90" placeholder="입력하시오"></textarea>
    </div>
  </div>
  <div class="text-right">
    <a href="page10.php" class="btn btn-primary mb-3">다음 문제 풀기</a>
  </div>
</div>


  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>
