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
      <div class="col-md-12">
        <div class="box mt-3"><h5 class="mt-3">문제1. average 점수에는 mid와 final을 합한 점수를 넣어 데이터프레임을 만드는 코드를 작성해라.
          (단, 데이터프레임명은 data로 설정하고, “-”라고 표기된 부분은 결측값을 의미한다.)</h5></div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-6 text-center">
        <table border="1">
          <tr>
            <td>name</td>
            <td>age</td>
            <td>gender</td>
            <td>mid</td>
            <td>final</td>
            <td>average</td>
            <td>school</td>
          </tr>
          <tr>
            <td>철수</td>
            <td>17</td>
            <td>M</td>
            <td>95</td>
            <td>97</td>
            <td></td>
            <td>PH</td>
          </tr>
          <tr>
            <td>영희</td>
            <td>18</td>
            <td>F</td>
            <td>84</td>
            <td>87</td>
            <td></td>
            <td>DH</td>
          </tr>
          <tr>
            <td>길동</td>
            <td>19</td>
            <td>M</td>
            <td>81</td>
            <td>76</td>
            <td></td>
            <td>GH</td>
          </tr>
          <tr>
            <td>민수</td>
            <td>17</td>
            <td>M</td>
            <td>72</td>
            <td>85</td>
            <td></td>
            <td>SH</td>
          </tr>
          <tr>
            <td>수영</td>
            <td>18</td>
            <td>F</td>
            <td>91</td>
            <td>100</td>
            <td></td>
            <td>PH</td>
          </tr>
          <tr>
            <td>동수</td>
            <td>19</td>
            <td>-</td>
            <td>79</td>
            <td>60</td>
            <td></td>
            <td>SH</td>
          </tr>
        </table>
        <div class="text-right">
          <h5>* average 점수 = mid+final / 2</h5>
        </div>
      </div>
      <div class="col-md-6">
        <h5 class="question">Step1. name, age, gender, mid, final, school의 변수를 설정하세요.</h5>
        <ul>
          <p>name<-c("철수","영희","길동","민수","수영","동수")</p>
          <p>age<-c(17,18,19,17,18,19)</p>
          <p>gender<-c("M","F","M","M","F",NA)</p>
          <p>mid<-c(95,84,81,72,91,79)</p>
          <p>final<-c(97,87,76,85,100,60)</p>
          <p>school<-c("PH","DH","GH","SH","PH","SH")</p>
        </ul>
        <h5 class="question">Step2. mid와 final 점수의 평균 구해보세요. (average 점수 공식 참고)</h5>
        <ul>
          <p>average<-(mid+final)/2</p>
        </ul>
        <h5 class="question">Step3. name, age, gender, mid, final, average, school 변수가 포함된 데이터 프레임을 구하세요. </h5>
        <ul>
          <p>data<-data.frame(name,age,gender,mid,final,average,school)</p>
        </ul>
      </div>
    </div>

    <form action="page14.php" method="post">
      <div class="text-right">
        <input type="submit" class="btn btn-primary" id="input_btn" value="다음 문제 풀기">
      </div>
    </form>

  </div>


  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>
