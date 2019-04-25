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
      <div class="col-md-12 text-left">
        <div class="box mt-3"><h5 class="mt-3">문제1. 아래의 [표1]은 축구선수들의 이름, 국적, 현 맨유소속여부를 나타내고, [표2]는  축구선수들의 이름, 전 소속팀, 상반기 골의 수, 하반기 골의 수가 기록된 데이터이다. [표3]은 [표1]과 [표2]를 결측값을 포함한 행을 제외하고 병합한 표이다. 아래의 물음에 답하세요. </h5></div>
      </div>
    </div>

    <div class="row mt-5">

      <div class="col-md-6 text-center">
        <table border="1">
          <div class="text-left"><span>[표1]</span></div>
          <tr>
            <td>name1</td>
            <td>nationality</td>
            <td>manchester</td>
          </tr>
          <tr>
            <td>Zlatan</td>
            <td>SWD</td>
            <td>no</td>
          </tr>
          <tr>
            <td>Rooney</td>
            <td>ENG</td>
            <td>no</td>
          </tr>
          <tr>
            <td>Pogba</td>
            <td>FRA</td>
            <td>yes</td>
          </tr>
          <tr>
            <td>Rashford</td>
            <td>ENG</td>
            <td>yes</td>
          </tr>
          <tr>
            <td>Mata</td>
            <td>SPA</td>
            <td>no</td>
          </tr>
        </table>
        <table border="1">
          <div class="text-left mt-5"><span>[표2]</span></div>
          <div class="text-right"><span>※total=first+second</span></div>
          <tr>
            <td>name2</td>
            <td>join</td>
            <td>first</td>
            <td>second</td>
            <td>total</td>
          </tr>
          <tr>
            <td>Zlatan</td>
            <td>free</td>
            <td>2</td>
            <td>3</td>
            <td></td>
          </tr>
          <tr>
            <td>Rooney</td>
            <td>Everton</td>
            <td>12</td>
            <td>21</td>
            <td></td>
          </tr>
          <tr>
            <td>Pogba</td>
            <td>Juventus</td>
            <td>-</td>
            <td>8</td>
            <td></td>
          </tr>
          <tr>
            <td>Rashford</td>
            <td>AC</td>
            <td>9</td>
            <td>2</td>
            <td></td>
          </tr>
          <tr>
            <td>Mata</td>
            <td>Chelsea</td>
            <td>27</td>
            <td>11</td>
            <td></td>
          </tr>
          <tr>
            <td>Martial</td>
            <td>AS</td>
            <td>8</td>
            <td>9</td>
            <td></td>
          </tr>
          <tr>
            <td>Carrick</td>
            <td>Tot</td>
            <td>2</td>
            <td>3</td>
            <td></td>
          </tr>
          <tr>
            <td>Blind</td>
            <td>AJ</td>
            <td>-</td>
            <td>11</td>
            <td></td>
          </tr>
        </table>
        <table border="1">
          <div class="text-left mt-5"><span>[표3]</span></div>
          <tr>
            <td>name1</td>
            <td>nationality</td>
            <td>manchester</td>
            <td>join</td>
            <td>first</td>
            <td>second</td>
            <td>total</td>
            <td>class</td>
          </tr>
          <tr>
            <td>Mata</td>
            <td>SPA</td>
            <td>no</td>
            <td>Chelsea</td>
            <td>27</td>
            <td>11</td>
            <td>38</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Rashford </td>
            <td>ENG</td>
            <td>yes</td>
            <td>AC</td>
            <td>9</td>
            <td>2</td>
            <td>11</td>
            <td>D</td>
          </tr>
          <tr>
            <td>Rooney </td>
            <td>ENG</td>
            <td>no</td>
            <td>Everton</td>
            <td>12</td>
            <td>21</td>
            <td>33</td>
            <td>B</td>
          </tr>
          <tr>
            <td>Zlatan</td>
            <td>SWE</td>
            <td>no</td>
            <td>free</td>
            <td>2</td>
            <td>3</td>
            <td>5</td>
            <td>F</td>
          </tr>
        </table>
      </div>

      <div class="col-md-6">
        <h5 class="question">Step1. name1, nationality, manchester, name2, join, first, second 의 변수를 설정하세요.</h5>
        <ul>
          <p>name1<-c("Zlatan","Rooney","Pogba","Rashford","Mata")</p>
          <p>nationality<-c("SWD","ENG","FRA","ENG","SPA")</p>
          <p>manchester<-c("no","no","yes","yes","no")</p>
          <p>name2<-c("Zlatan","Rooney","Pogba","Rashford","Mata","Martial","Carrick","Blind")</p>
          <p>join<-c("free","Everton","Juventus","AC","Chelsea","AS","Tot","AJ")</p>
          <p>first<-c(2,12,NA,9,27,8,2,NA)</p>
          <p>second<-c(3,21,8,2,11,9,3,11)</p>
        </ul>
        <h5 class="question">Step2. total 계산식을 활용하여 total 값을 구하세요. </h5>
        <ul>
          <p>total<-first+second</p>
        </ul>
        <h5 class="question">Step3.  [표1]은 데이터 프레임명을 data9로 설정하고, [표2]는 데이터프레임명을 data10으로 설정하여 데이터프레임을 작성하세요.</h5>
        <ul>
          <p>data9<-data.frame(name1,nationality,manchester)</p>
          <p>data10<-data.frame(name2,join,first,second,total)</p>
        </ul>
        <h5 class="question">Step4. data9와 data10의 데이터프레임에서 선수이름을 알파벳 순서로 배열하여 각각 data9.1과 data10.1로 저장하세요.</h5>
        <ul>
          <p>data9.1<-data9[order(name),]</p>
          <p>data10.1<-data10[order(name),]</p>
        </ul>
        <h5 class="question">Step5. data9.1과 data10.1을 결측값이 포함된 행을 제거하여 각각 data9.2와 data10.2로 저장하세요.</h5>
        <ul>
          <p>data9.2<-na.omit(data9)</p>
          <p>data10.2<-na.omit(data10)</p>
        </ul>
        <h5 class="question">Step6. data9.2와 data10.2를 선수이름을 기준으로 병합하여 data11로 저장하세요.</h5>
        <ul>
          <p>data11<-merge(data9.2,data10.2,by.x="name1",by.y="name2")</p>
        </ul>
        <h5 class="question">Step7. data11에서 국적이 잉글랜드이고, 현재 맨체스터가 아닌(no) 선수의 행을 추출하세요.</h5>
        <ul>
          <p>subset(data11,nationality=="ENG"&manchester=="no")</p>
        </ul>
        <h5 class="question">Step8.  data11에서 소속팀(join)이 Chelsea 또는 총 골수(total)가 30골 이상인 선수의 행을 추출하세요. </h5>
        <ul>
          <p>subset(data11, join==“Chelsea“ | total>=30)</p>
        </ul>
      </div>

    </div>

    <form method="post" action="page24.php">
      <div class="text-right mb-3">
        <input type="submit" class="btn btn-primary" id="input_btn" value="다음 문제 풀기">
      </div>
    </form>

  </div>


  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>
