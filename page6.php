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
    width: 45px;
  
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
      <h1 class="title">R프로그래밍 언어란?</h1>
      <ul>
        <li>R 프로그래밍 언어는 통계 데이터 수정과 분석에 사용되는 스크립트 언어입니다. R은 무료이면서 많은 사람들이 사용하고 있습니다.</li>
        <li>오픈 소스 프로젝트로 진행되고 있는 R은 통계 프로그래밍 언어인 S 언어 기반으로 만들어졌으며 통계 계산과 결과 생성 그래픽을 위한 프로그래밍 언어이다.</li>
      </ul>
      <h1 class="title">데이터 지정하기</h1>
      <ul>
        <li>숫자 1,2,4로 이루어진 ‘벡터’라는 간단한 데이터 세트를 만들고, x라는 이름을 붙여보자.</li>
        <h3 class="mt-3"><span class="box">x<-c(1,2,4)</span></h3>
        <i class="fas fa-long-arrow-alt-right"></i>R에서 값 할당을 위해 표준으로 사용하는 기호는 <- 이다.여기서 c는 연결(concatenate)를 의미한다. 여기서는 숫자 1,2,4를 연결하였다.
        <li class="mt-3">변수가 숫자가 아닌 문자열일 때는 변수 사이에 따옴표(“ “)를 사용한다. 다음은 시영, 신우, 종찬, 주현으로 이루어진 벡터 y를 만드는 코드이다.</li>
        <h3 class="mt-3"><span class="box">x<-c(“시영”,“신우”,“종찬”,“주현”)</span></h3>
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
      <h4 class="text-center">숫자 2,3,5,4,1로 이루어진 ‘벡터’라는 간단한 데이터 세트를 만들고 z라고 이름을 부여해보세요.</h4>
      <form method="post">
          <input name="name" type="text" class="form-control login-input mb-2" placeholder="입력하시오">
      </form>
    </div>
  </div>
  <div class="text-right">
    <a href="page7.php" class="btn btn-primary mb-3">다음 문제 풀기</a>
  </div>
</div>


  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>
