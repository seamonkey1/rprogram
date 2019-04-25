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
    .login-input {
      border: 0.05rem solid #333333 !important;
      padding: 3px;
    }
    .start {
      text-align: right;
    }
  </style>
</head>
<body>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 text-center mt-4">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/R_logo.svg/310px-R_logo.svg.png" alt="">
      <h1 class="mt-4">R프로그래밍 언어 입문</h1>
      <p>*성실히 답변한 학생들을 대상으로 상품권을 증정합니다. 개인정보를 정확히 기입해주세요*</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="login-input">
        <form method="post" action="page2.php" id="information-form" class="information-form">
          <input name="name" id="name" type="text" class="form-control login-input mb-2" placeholder="성명">
          <input name="phone" id="phone" type="text" class="form-control login-input mb-2" placeholder="전화번호">
          <input name="major" id="major" type="text" class="form-control login-input mb-2" placeholder="전공">
          <input name="age" id="age" type="text" class="form-control login-input mb-2" placeholder="나이">
          <h5 class="text-capitalize">성별</h5>
          <input type="radio" name="sex" value="남자" /> 남자
          <input type="radio" name="sex" value="여자" /> 여자
          <hr/>
          <h5 class="text-capitalize">R프로그래밍 언어를 공부한적 있는가?</h5>
          <input type="radio" name="have" value="네" /> 네
          <input type="radio" name="have" value="아니오" /> 아니오
          <hr/>
          <h5 class="text-capitalize">네 라고 대답했다면,당신이 생각하는 당신의 R프로그래밍 언어 실력은?(택1)</h5>
          <input type="radio" name="level" value="상" /> 상
          <input type="radio" name="level" value="중" /> 중
          <input type="radio" name="level" value="하" /> 하
          <hr/>

      </div>
    </div>
  </div>
  <div class="text-right mb-3 mt-3">
    <input type="submit" class="btn btn-primary" id="input_btn" value="시작하기">
  </div>
  </form>
</div>

  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>
