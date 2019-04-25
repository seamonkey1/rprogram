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
  .example {
    border: 1px solid #333333;
  }
  .box {
    border: 1px solid #333333;
    width: 500px;
  }
  table {
    width: 100%;
  }
  </style>
</head>
<body>


  <div class="container-fluid">
    <form method="post" action="page5.php">
    <div class="row">
      <div class="col-md-12 mt-3">

          <div class="form-group">
            <h4 class="text-capitalize">1. R이 지원하지 않는 자료구조는?</h4>
            <input type="radio" name="first" value="one" /> 행렬
            <br/>
            <input type="radio" name="first" value="two" /> 문자열
            <br/>
            <input type="radio" name="first" value="three" /> 리스트
            <br/>
            <input type="radio" name="first" value="four" /> 데이터 프레임
            <br/>
            <input type="radio" name="first" value="five" /> 답 없음
          </div>

      </div>
    </div>

    <hr/>

    <div class="row">
      <div class="col-md-12">
        <h4>2. 다음은 x에 나타난 백터값을 나타낸 것이다. 이를 나타내기 위한 올바른 코드는?</h4>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h4>"김" "미역" "조개"</h4>
        </div>
        <div class="col-md-6">

            <div class="form-group">
                <input type="radio" name="second" value="one" /> x <- "김","미역","조개"
                <br/>
                <input type="radio" name="second" value="two" /> x <- c("김","미역","조개")
                <br/>
                <input type="radio" name="second" value="three" /> x = ("김","미역","조개")
                <br/>
                <input type="radio" name="second" value="four" /> x <- ("김","미역","조개")
                <br/>
                <input type="radio" name="second" value="five" /> 답 없음
            </div>

        </div>
      </div>
    </div>

    <hr/>

    <div class="row">
      <div class="col-md-12">
        <span class="example"><보기1>는 [문제3~7]까지의 문제의 보기입니다.</span>
        <h4>3. 다음 <보기2>는 <보기1>의 데이터 프레임을 형성하는 함수를 나타내는 과정이다. 다음 중 과정이 틀린 부분은?</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <보기1>
        <table border="1">
          <tr>
            <td>name</td>
            <td>종찬</td>
            <td>진우</td>
            <td>현우</td>
          </tr>
          <tr>
            <td>age</td>
            <td>26</td>
            <td>27</td>
            <td>36</td>
          </tr>
          <tr>
            <td>gender</td>
            <td>M</td>
            <td>F</td>
            <td>M</td>
          </tr>
          <tr>
            <td>mid</td>
            <td>92</td>
            <td>91</td>
            <td>72</td>
          </tr>
          <tr>
            <td>final</td>
            <td>89</td>
            <td>92</td>
            <td>77</td>
          </tr>
          <tr>
            <td>total</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>school</td>
            <td>PH</td>
            <td>DH</td>
            <td>GH</td>
          </tr>
        </table>
      </div>
      <div class="col-md-8">
        <보기2>
        <div class="box">
          <p>name <- c("종찬","진주","현우") ------------------------------ 1</p>
          <p>age <- c(26,27,38) ------------------------------------------ 2</p>
          <p>gender <- c("M","F","M")</p>
          <p>mid <- c(92,91,72)</p>
          <p>final <- c(89,92,77)</p>
          <p>total <- mid + total ---------------------------------------- 3</p>
          <p>school <- c("PH","DH","GH")</p>
          <p> data <- data.frame(name.age,mid.gender,final.total,school)-- 4</p>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-5">

          <div class="form-group">
            <input type="radio" name="third" value="one" /> 1
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="third" value="two" /> 2
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="third" value="three" /> 3
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="third" value="four" /> 4
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="third" value="five" /> 답 없음
          </div>

      </div>
    </div>

    <hr/>

    <div class="row">
      <div class="col-md-12">
        <span class="example"><보기1>는 [문제3~7]까지의 문제의 보기입니다.</span>
        <h4>4. 다음 <보기1>의 data에서 성별이 F인 열을 추출하려 한다. 올바른 코드는 무엇인가?</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <보기1>
        <table border="1">
          <tr>
            <td>name</td>
            <td>종찬</td>
            <td>진우</td>
            <td>현우</td>
          </tr>
          <tr>
            <td>age</td>
            <td>26</td>
            <td>27</td>
            <td>36</td>
          </tr>
          <tr>
            <td>gender</td>
            <td>M</td>
            <td>F</td>
            <td>M</td>
          </tr>
          <tr>
            <td>mid</td>
            <td>92</td>
            <td>91</td>
            <td>72</td>
          </tr>
          <tr>
            <td>final</td>
            <td>89</td>
            <td>92</td>
            <td>77</td>
          </tr>
          <tr>
            <td>total</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>school</td>
            <td>PH</td>
            <td>DH</td>
            <td>GH</td>
          </tr>
        </table>
      </div>
      <div class="col-md-8">

          <div class="form-group">
            <input type="radio" name="fourth" value="one" /> subset(gender=F,select=c(name,age,mid,final))
            <br/>
            <br/>
            <input type="radio" name="fourth" value="two" /> subset(data,gender=="F")
            <br/>
            <br/>
            <input type="radio" name="fourth" value="three" /> subset(gender=="F",select=name:school)
            <br/>
            <br/>
            <input type="radio" name="fourth" value="four" /> subset(data,gender=="F",select=name:school)
            <br/>
            <br/>
            <input type="radio" name="fourth" value="five" /> subset("F",select=c(name,age,mid,final))
          </div>

      </div>
    </div>

    <hr/>

    <div class="row">
      <div class="col-md-12">
        <span class="example"><보기1>는 [문제3~7]까지의 문제의 보기입니다.</span>
        <h4>5. 다음 <보기1>의 data에서 중간 점수가 70~85점 사이의 남자를 추출하려고 한다. 올바른 코드는 무엇인가?</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <보기1>
        <table border="1">
          <tr>
            <td>name</td>
            <td>종찬</td>
            <td>진우</td>
            <td>현우</td>
          </tr>
          <tr>
            <td>age</td>
            <td>26</td>
            <td>27</td>
            <td>36</td>
          </tr>
          <tr>
            <td>gender</td>
            <td>M</td>
            <td>F</td>
            <td>M</td>
          </tr>
          <tr>
            <td>mid</td>
            <td>92</td>
            <td>91</td>
            <td>72</td>
          </tr>
          <tr>
            <td>final</td>
            <td>89</td>
            <td>92</td>
            <td>77</td>
          </tr>
          <tr>
            <td>total</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>school</td>
            <td>PH</td>
            <td>DH</td>
            <td>GH</td>
          </tr>
        </table>
      </div>
      <div class="col-md-8">

          <div class="form-group">
            <input type="radio" name="fifth" value="one" /> data[data$mid>=70&data$mid<=85&data$gender=="M"]
            <br/>
            <br/>
            <input type="radio" name="fifth" value="two" /> data[data$mid>=70&data$mid<=85&data$gender="M"]
            <br/>
            <br/>
            <input type="radio" name="fifth" value="three" /> data$mid>=70&data$mid<=85&data$gender=="M"
            <br/>
            <br/>
            <input type="radio" name="fifth" value="four" /> data[data$mid>=70,data$mid<=85&data$gender="M"]
            <br/>
            <br/>
            <input type="radio" name="fifth" value="five" /> data[data$mid>=70,data$mid<=85&data$gender=="M"]
          </div>

      </div>
    </div>

    <hr/>

    <div class="row">
      <div class="col-md-12">
        <span class="example"><보기1>는 [문제3~7]까지의 문제의 보기입니다.</span>
        <h4>6. 문제 4의 <보기1>의 data에서 성별과 나이 순 성적과 순위를 정렬하려 한다. 올바른 코드는 무엇인가?</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <보기1>
        <table border="1">
          <tr>
            <td>name</td>
            <td>종찬</td>
            <td>진우</td>
            <td>현우</td>
          </tr>
          <tr>
            <td>age</td>
            <td>26</td>
            <td>27</td>
            <td>36</td>
          </tr>
          <tr>
            <td>gender</td>
            <td>M</td>
            <td>F</td>
            <td>M</td>
          </tr>
          <tr>
            <td>mid</td>
            <td>92</td>
            <td>91</td>
            <td>72</td>
          </tr>
          <tr>
            <td>final</td>
            <td>89</td>
            <td>92</td>
            <td>77</td>
          </tr>
          <tr>
            <td>total</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>school</td>
            <td>PH</td>
            <td>DH</td>
            <td>GH</td>
          </tr>
        </table>
      </div>
      <div class="col-md-8">

          <div class="form-group">
            <input type="radio" name="sixth" value="one" /> data[order(data$gender,data$age),]
            <br/>
            <br/>
            <input type="radio" name="sixth" value="two" /> order(data$gender,data$age)
            <br/>
            <br/>
            <input type="radio" name="sixth" value="three" /> data[order(gender,age),]
            <br/>
            <br/>
            <input type="radio" name="sixth" value="four" /> data[order(data$age,data$gender),]
            <br/>
            <br/>
            <input type="radio" name="sixth" value="five" /> data[order(age,gender),]
          </div>

      </div>
    </div>

    <hr/>

    <div class="row">
      <div class="col-md-12">
        <span class="example"><보기1>는 [문제3~7]까지의 문제의 보기입니다.</span>
        <h4>7. <보기1>의 mid를 midterm으로 재명명하기 위한 코드는 무엇인가?</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <보기1>
        <table border="1">
          <tr>
            <td>name</td>
            <td>종찬</td>
            <td>진우</td>
            <td>현우</td>
          </tr>
          <tr>
            <td>age</td>
            <td>26</td>
            <td>27</td>
            <td>36</td>
          </tr>
          <tr>
            <td>gender</td>
            <td>M</td>
            <td>F</td>
            <td>M</td>
          </tr>
          <tr>
            <td>mid</td>
            <td>92</td>
            <td>91</td>
            <td>72</td>
          </tr>
          <tr>
            <td>final</td>
            <td>89</td>
            <td>92</td>
            <td>77</td>
          </tr>
          <tr>
            <td>total</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>school</td>
            <td>PH</td>
            <td>DH</td>
            <td>GH</td>
          </tr>
        </table>
      </div>
      <div class="col-md-8">

          <div class="form-group">
            <input type="radio" name="seventh" value="one" /> names(data)[3]<-"midterm"
            <br/>
            <br/>
            <input type="radio" name="seventh" value="two" /> names(data)[4]<-midterm
            <br/>
            <br/>
            <input type="radio" name="seventh" value="three" /> names(data)[4]<-"midterm"
            <br/>
            <br/>
            <input type="radio" name="seventh" value="four" /> names(data)[3]<-midterm
            <br/>
            <br/>
            <input type="radio" name="seventh" value="five" /> names(data)[5]<-midterm
          </div>

      </div>
    </div>

    <hr/>

    <div class="row">
      <div class="col-md-12 mt-3">

          <div class="form-group">
            <h4 class="text-capitalize">8. 다음 중 x벡터 내에서 3번 째 데이터를 추출하기 위한 코드는?</h4>
            <input type="radio" name="eighth" value="one" /> choice(x,3)
            <br/>
            <input type="radio" name="eighth" value="two" /> x[3]
            <br/>
            <input type="radio" name="eighth" value="three" /> x(3)
            <br/>
            <input type="radio" name="eighth" value="four" /> show(x,3)
            <br/>
            <input type="radio" name="eighth" value="five" /> extract(x,3)
          </div>

      </div>
    </div>

    <hr/>

    <div class="row">
      <div class="col-md-12 mt-3">

          <div class="form-group">
            <h4 class="text-capitalize">9. 다음 중 R에서의 결측값을 나타내는 기호는?</h4>
            <input type="radio" name="nineth" value="one" /> sum
            <br/>
            <input type="radio" name="nineth" value="two" /> rep
            <br/>
            <input type="radio" name="nineth" value="three" /> null
            <br/>
            <input type="radio" name="nineth" value="four" /> NA
            <br/>
            <input type="radio" name="nineth" value="five" /> value
          </div>

      </div>
    </div>

    <hr/>

    <div class="row">
      <div class="col-md-12 mt-3">

          <div class="form-group">
            <h4 class="text-capitalize">10. 다음 중 x라는 이름의 데이터 프레임에서 결측값을 제거하기 위한 입력코드는?</h4>
            <input type="radio" name="tenth" value="one" /> na.omit(x)
            <br/>
            <input type="radio" name="tenth" value="two" /> null(x)
            <br/>
            <input type="radio" name="tenth" value="three" /> na(x)
            <br/>
            <input type="radio" name="tenth" value="four" /> na.delete(x)
            <br/>
            <input type="radio" name="tenth" value="five" /> delete(x)
          </div>

      </div>
    </div>

    <hr/>



  <div class="text-center mb-3">
    <input type="submit" class="btn btn-primary" id="input_btn" value="다음 문제 풀기">
  </div>
  </form>
  </div>


  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>
