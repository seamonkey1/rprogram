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
  .box {
    border: 1px solid #333333;
    width: 360px;
  }
  .do {
    border: 1px solid #333333;
    background-color: #2E64FE;
  }
  .input {
    border: 0.05rem solid #333333 !important;
    padding: 3px;
  }
  </style>
</head>
<body>


<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-md-12">
      <h1 class="title">데이터 추출</h1>
      <ul>
        <li>백터 내의 개별 값들은 []을 통해 추출할 수 있다. x의 세 번째 값을 출력하는 방식은 다음과 같다.</li>
        <div class="box">
          <h3 class="pl-3">x<-c(1,2,4,5)</h3>
          <h3 class="pl-3">x[3]</h3>
          <h3 class="pl-3">4</h3>
        </div>
      </ul>
      <h1 class="title">데이터 연산</h1>
      <ul>
        <li>아래는 1,2,3,4를 포함하는 vector1과 5,6,7,8을 포함하는 vector2를 합하여 만들어지는 vector3를 생성하는 코드이다.</li>
        <div class="box">
          <h3 class="pl-3">vector1<-c(1,2,3,4)</h3>
          <h3 class="pl-3">vector2<-c(5,6,7,8)</h3>
          <h3 class="pl-3">vector3<-vector1+vector2</h3>
        </div>
      </ul>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-md-4 text-center">
      <h2><span class="do"><i class="far fa-smile"></i>직접 해보기<span></h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 input ml-5">
      <h4 class="text-center">숫자 2,3,5,4,1로 이루어진 ‘벡터’라는 간단한 데이터 세트를 만들고 z라는 이름을 명명해 보세요.</h4>
      <form method="post">
          <input name="name" type="text" class="form-control login-input mb-2" placeholder="입력하시오">
      </form>
      <h4 class="text-center">z라고 명명한 데이터 프레임에서 2번째 수를 추출하는 코드를 작성해보세요.</h4>
      <form method="post">
          <input name="name" type="text" class="form-control login-input mb-2" placeholder="입력하시오">
      </form>
    </div>
  </div>
  <div class="text-right">
    <a href="page8.php" class="btn btn-primary mb-3">다음 문제 풀기</a>
  </div>
</div>


  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>
