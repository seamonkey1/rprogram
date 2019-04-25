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
  .arrow {
    font-size: 3rem;
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
      <h1 class="title">데이터 프레임 만들기</h1>
      <ul>
        <li>데이터 프레임은 여러 종류의 형식의 데이터를 포함할 수 있다.</li>
        <li>여기서 여러 형식이라는 것 데이터의 종류가 문자열(예: Jack, 시영...)이나 숫자열(예:1,2,3,4...), 행렬 등을 의미한다.</li>
        <li>아래의 예제는 행X열(3X2)의 데이터 프레임을 만들 때의 코드는 다음과 같다.</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 text-center">
      <span class="arrow"><i class="fas fa-long-arrow-alt-right"></i></span>
      <table border="1">
        <tr>
          <td>kids</td>
          <td>ages</td>
          <td>gender</td>
        </tr>
        <tr>
          <td>Jack</td>
          <td>12</td>
          <td>M</td>
        </tr>
        <tr>
          <td>Jill</td>
          <td>10</td>
          <td>F</td>
        </tr>
      </table>
      <div class="box text-left">
        <h3>answer)</h3>
        <h5>>kids<-c("Jack","Jill")---- 1 첫 번째 열의 데이터 입력</h5>
        <h5>>ages<-c(12,10)---- 2 두 번째 열의 데이터 입력</h5>
        <h5>>gender<-c("M","F")---- 3 세 번째 열의 데이터 입력</h5>
        <h5>>data.frame(kids,ages,gender)--4 data.frame함수로 데이터프레임 생성</h5>
      </div>
    </div>
    <div class="col-md-6 text-center">
      <h3><span class="do"><i class="far fa-smile"></i>직접 해보기<span></h3>
      <h4>아래의 데이터프레임을 작성하는 코드를 입력해보세요.</h4>
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
          <td>2</td>
          <td>2000</td>
        </tr>
      </table>
      <textarea class="mt-3" name="name" rows="8" cols="90" placeholder="입력하시오"></textarea>
    </div>
  </div>
  <div class="text-right">
    <a href="page9.php" class="btn btn-primary mb-3">다음 문제 풀기</a>
  </div>
</div>


  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>
