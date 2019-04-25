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
      font-size: 0.7em;
    }
    .target {

    }
    .question {
      color: #2E64FE;
    }
    .hint_box {
      background-color: #2E64FE;
      color: white;
    }
    .hint_text {
      border: 3px solid #2E64FE;
    }
    .tablebox {
      border: 3px solid #2E64FE;
    }
    .fontsize {
      font-size: 0.7em;
    }
  </style>
</head>
<body>


  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12">
        <div class="box mt-3"><h5 class="mt-3">문제2. 아래의 [표1]은 스마트 폰 회사별 고객만족도, 가격을 나타내고, [표2]는 회사별 국가,
          성능을 나타낸다. 그리고 [표 3]은  [표1]과 [표2]의 결측값을 포함한 행을 제외하고 병합한 표이다. 아래의 물음에 답하세요.</h5></div>
      </div>
    </div>

    <form method="post" action="page25.php" id="page25_form">

      <div class="row">
        <div class="col-md-6 text-center target" id="target">
          <table border="1">
            <div class="text-left">
              <span>[표1]</span>
            </div>
            <tr>
              <td class="phone1Value company1Value">company1</td>
              <td class="satisfactionValue phone1Value">satisfaction</td>
              <td class="priceValue phone1Value">price</td>
            </tr>
            <tr>
              <td>samsung</td>
              <td class="satisfactionValue">88</td>
              <td class="priceValue">780</td>
            </tr>
            <tr>
              <td>apple</td>
              <td class="satisfactionValue">89</td>
              <td class="priceValue">800</td>
            </tr>
            <tr>
              <td>lg</td>
              <td class="satisfactionValue">84</td>
              <td class="priceValue">720</td>
            </tr>
            <tr>
              <td>xiaomi</td>
              <td class="satisfactionValue">80</td>
              <td class="priceValue">590</td>
            </tr>
            <tr>
              <td>nokia</td>
              <td class="satisfactionValue">73</td>
              <td class="priceValue">750</td>
            </tr>
            <tr>
              <td>sony</td>
              <td class="satisfactionValue">77</td>
              <td class="priceValue">770</td>
            </tr>
            <tr>
              <td>motorola</td>
              <td class="satisfactionValue">64</td>
              <td class="priceValue">700</td>
            </tr>
            <tr>
              <td>htc</td>
              <td class="satisfactionValue">66</td>
              <td class="priceValue">620</td>
            </tr>
            <tr>
              <td>palm</td>
              <td class="satisfactionValue">70</td>
              <td class="priceValue">750</td>
            </tr>
            <tr>
              <td>pantech</td>
              <td class="satisfactionValue">-</td>
              <td class="priceValue">-</td>
            </tr>
            <tr>
              <td>boe</td>
              <td class="satisfactionValue">-</td>
              <td class="priceValue">560</td>
            </tr>
          </table>
          <table border="1">
            <div class="text-left">
              <span>[표2]</span>
            </div>
            <tr>
              <td class="phone2Value company2Value">company2</td>
              <td class="phone2Value">country</td>
              <td class="phone2Value">performance</td>
              <td class="phone2Value">costeffectiveness </td>
              <td class="phone2Value">rank</td>
            </tr>
            <tr>
              <td>samsung</td>
              <td>KOR</td>
              <td>95</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>apple</td>
              <td>USA</td>
              <td>95</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>lg</td>
              <td>KOR</td>
              <td>93</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>xiaomi</td>
              <td>CHN</td>
              <td>82</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>nokia</td>
              <td>NOR</td>
              <td>79</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>sony</td>
              <td>JPN</td>
              <td>85</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>motorola</td>
              <td>USA</td>
              <td>83</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>htc</td>
              <td>TAI</td>
              <td>77</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>palm</td>
              <td>IND</td>
              <td>60</td>
              <td></td>
              <td></td>
            </tr>
            <div class="text-right">
              <span>costeffectiveness(가성비) = satisfaction(만족도) * (performance(성능)/price(가격))</span>
            </div>
          </table>
          <table border="1">
            <div class="text-left">
              <span>[표3]</span>
            </div>
            <tr>
              <td>company1</td>
              <td>satisfaction</td>
              <td>price</td>
              <td>country</td>
              <td>performance</td>
              <td>costeffectiveness</td>
            </tr>
            <tr>
              <td>apple</td>
              <td>89</td>
              <td>800</td>
              <td>USA</td>
              <td>95</td>
              <td>10.568750</td>
            </tr>
            <tr>
              <td>htc</td>
              <td>66</td>
              <td>620</td>
              <td>USA</td>
              <td>77</td>
              <td>8.196774</td>
            </tr>
            <tr>
              <td>lg</td>
              <td>84</td>
              <td>720</td>
              <td>KOR</td>
              <td>93 </td>
              <td>10.850000</td>
            </tr>
            <tr>
              <td>motorola</td>
              <td>64</td>
              <td>700</td>
              <td>USA</td>
              <td>83</td>
              <td>7.588571</td>
            </tr>
            <tr>
              <td>nokia</td>
              <td>73</td>
              <td>750</td>
              <td>NOR</td>
              <td>79</td>
              <td>7.689333</td>
            </tr>
            <tr>
              <td>palm</td>
              <td>70</td>
              <td>750</td>
              <td>IND</td>
              <td>60</td>
              <td>5.600000</td>
            </tr>
            <tr>
              <td>samsung</td>
              <td>88</td>
              <td>780</td>
              <td>KOR</td>
              <td>95</td>
              <td>10.717949</td>
            </tr>
            <tr>
              <td>sony</td>
              <td>77</td>
              <td>770</td>
              <td>JPN</td>
              <td>85</td>
              <td>8.500000</td>
            </tr>
            <tr>
              <td>xiaomi</td>
              <td>80</td>
              <td>590</td>
              <td>CHN</td>
              <td>82</td>
              <td>11.118644</td>
            </tr>
          </table>
        </div>
        <div class="col-md-6 fontsize">
          <h6 class="question">Step1. company, satisfaction, price, company2, country, performance의 변수를 설정하세요.</h6>
          <p>company1 <-c (“samsung”,”apple”,”lg”,”xiaomi”,”nokia”,”sony”,”motorola”,”htc”,”palm”,”pantech”,”boe”)</p>
          <div class="input-group">
            <label for="satisfaction">satisfaction <-</label>
            <input name="satisfaction" id="satisfaction" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <div class="input-group">
            <label for="price">price <-</label>
            <input name="price" id="price" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <p>company2 <-c (“samsung”,”apple”,”lg”,”xiaomi”,”nokia”,”sony”,”motorola”,”htc”,”palm”)</p>
          <p>country <-c (“KOR”,”USA”,”KOR”,”CHN”,”NOR”,”JPN”,”USA”,”TAI”,”IND”)</p>
          <p>performance <-c (95,95,93,82,79,85,83,77,60)</p>
          <h6 class="question">Step2. 가성비를 계산식을 활용하여 구하세요.</h6>
          <div class="input-group">
            <label for="costeffectiveness">costeffectiveness <-</label>
            <input name="costeffectiveness" id="costeffectiveness" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <h6 class="question">Step3. [표1]은 데이터 프레임 이름을 phone1로 설정하고, [표2]는 데이터프레임 이름을 phone2로 설정하여 데이터프레임 작성하기</h6>
          <div class="input-group">
            <label for="phone1">phone1 <-</label>
            <input name="phone1" id="phone1" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <div class="input-group">
            <label for="phone2">phone2 <-</label>
            <input name="phone2" id="phone2" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <h6 class="question">Step4. 데이터 값이 없는 행을 제거하세요.</h6>
          <div class="input-group">
            <label for="phone12">phone1 <-</label>
            <input name="phone12" id="phone12" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <h6 class="question">Step5. phone1과 phone2의 데이터 프레임의 회사명을 알파벳 순서로 배열하여 각각 phone3과 phone4로 저장하기</h6>
          <div class="input-group">
            <label for="phone3">phone3 <-</label>
            <input name="phone3" id="phone3" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <div class="input-group">
            <label for="phone4">phone4 <-</label>
            <input name="phone4" id="phone4" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <h6 class="question">Step6. 표1(phone3)과 표2(phone4)를 표3(phone5)과 같이 병합하여 phone5로 저장하세요.</h6>
          <div class="input-group">
            <label for="phone5">phone5 <-</label>
            <input name="phone5" id="phone5" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <h6 class="question">Step7. 표3(phone5)에서 나라가 미국(USA)이고, 성능점수가 80 이상인 행을 추출하여 phone10에 저장하세요.(subset 함수 사용하기)</h6>
          <div class="input-group">
            <label for="phone10">Phone10 <-</label>
            <input name="phone10" id="phone10" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>
          <h6 class="question">Step8. 표3(Phone5)에서 나라가 한국(KOR)이거나 가격(price)이 700이상인 행을 추출하여 phone11에 저장하세요.(subset 함수 사용하기)</h6>
          <div class="input-group">
            <label for="phone11">Phone11 <-</label>
            <input name="phone11" id="phone11" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
          </div>

        </div>
      </div>



    <div class="text-right mb-3">
      <input type="submit" class="btn btn-primary" id="input_btn" value="다음 문제 풀기">
    </div>
    </form>
  </div>


  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
<script src="page24.js"></script>
</html>
<?php
error_reporting(E_ERROR|E_PARSE);
$file = fopen("학습하기3_2.txt","w");
fwrite($file,"시작시간 : ".date("h:i:s").PHP_EOL);
fclose($file);
 ?>
