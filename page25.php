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
    .table3 {
      font-size: 0.9em;
    }
    .step1a {
      width: 100%;
    }
    .step1 {
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
      <div class="box mt-3"><h5 class="mt-3">문제3. 아래의 [표1]은 타이어회사의 이름, 수입, 생산단가, 판매량, 순수익을 나타낸 것이고,
        [표2]는 타이어 회사의 이름, 성능, 국가를 나타낸 것이다. [표3]은 그리고 [표 3]은  [표1]과 [표2]의 결측값을 포함한 행을 제외하고 병합한 표이다.
        아래의 물음에 답하세요. </h5></div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-md-4 text-center">
      <table border="1">
        <div class="text-left">
          <span>[표1]</span>
        </div>
        <tr>
          <td>tirename1</td>
          <td>income</td>
          <td>productioncost</td>
          <td>number</td>
          <td>netincome</td>
        </tr>
        <tr>
          <td>bridgestone</td>
          <td>210,000</td>
          <td>77</td>
          <td>200</td>
          <td></td>
        </tr>
        <tr>
          <td>michelin</td>
          <td>189,000</td>
          <td>80</td>
          <td>160</td>
          <td></td>
        </tr>
        <tr>
          <td>goodyear</td>
          <td>192,000</td>
          <td>64</td>
          <td>124</td>
          <td></td>
        </tr>
        <tr>
          <td>continental</td>
          <td>152,000</td>
          <td>76</td>
          <td>216</td>
          <td></td>
        </tr>
        <tr>
          <td>sumitomo</td>
          <td>123,000</td>
          <td>87</td>
          <td>463</td>
          <td></td>
        </tr>
        <tr>
          <td>yokohama</td>
          <td>890,000</td>
          <td>56</td>
          <td>156</td>
          <td></td>
        </tr>
        <tr>
          <td>hangook</td>
          <td>870,000</td>
          <td>51</td>
          <td>423</td>
          <td></td>
        </tr>
        <tr>
          <td>cooper</td>
          <td>710,000</td>
          <td>46</td>
          <td>132</td>
          <td></td>
        </tr>
        <tr>
          <td>kumho</td>
          <td>690,000</td>
          <td>74</td>
          <td>124</td>
          <td></td>
        </tr>
        <tr>
          <td>tokyo</td>
          <td>520,000</td>
          <td>49</td>
          <td>124</td>
          <td></td>
        </tr>
        <tr>
          <td>nexen</td>
          <td>430,000</td>
          <td>59</td>
          <td>126</td>
          <td></td>
        </tr>
      </table>
    </div>
    <div class="col-md-3 text-center">
      <table border="1">
        <div class="text-left">
          <span>[표2]</span>
        </div>
        <tr>
          <td>tirename2</td>
          <td>performance</td>
          <td>country</td>
        </tr>
        <tr>
          <td>bridgestone</td>
          <td>98</td>
          <td>USA</td>
        </tr>
        <tr>
          <td>michelin</td>
          <td>95</td>
          <td>USA</td>
        </tr>
        <tr>
          <td>goodyear</td>
          <td>76</td>
          <td>USA</td>
        </tr>
        <tr>
          <td>continental</td>
          <td>80</td>
          <td>USA</td>
        </tr>
        <tr>
          <td>sumitomo</td>
          <td>85</td>
          <td>JPN</td>
        </tr>
        <tr>
          <td>yokohama</td>
          <td>83</td>
          <td>JPN</td>
        </tr>
        <tr>
          <td>hangook</td>
          <td>93</td>
          <td>KOR</td>
        </tr>
        <tr>
          <td>cooper</td>
          <td>89</td>
          <td>USA</td>
        </tr>
        <tr>
          <td>kumho</td>
          <td>89</td>
          <td>KOR</td>
        </tr>
        <tr>
          <td>tokyo</td>
          <td>84</td>
          <td>JPN</td>
        </tr>
        <tr>
          <td>nexen</td>
          <td>79</td>
          <td>-</td>
        </tr>
      </table>
    </div>
    <div class="col-md-5 text-center">
      <table border="1" class="table3">
        <div class="text-left">
          <span>[표3]</span>
        </div>
        <tr>
          <td>tirename1</td>
          <td>income</td>
          <td>productioncost</td>
          <td>number</td>
          <td>netincome</td>
          <td>performance</td>
          <td>country</td>
        </tr>
        <tr>
          <td>bridgestone</td>
          <td>210,000</td>
          <td>77</td>
          <td>200</td>
          <td>194600</td>
          <td>98</td>
          <td>USA</td>
        </tr>
        <tr>
          <td>michelin</td>
          <td>189,000</td>
          <td>80</td>
          <td>160</td>
          <td>176200</td>
          <td>95</td>
          <td>USA</td>
        </tr>
        <tr>
          <td>goodyear</td>
          <td>192,000</td>
          <td>64</td>
          <td>124</td>
          <td>184064</td>
          <td>76</td>
          <td>USA</td>
        </tr>
        <tr>
          <td>continental</td>
          <td>152,000</td>
          <td>76</td>
          <td>216</td>
          <td>135584</td>
          <td>80</td>
          <td>USA</td>
        </tr>
        <tr>
          <td>sumitomo</td>
          <td>123,000</td>
          <td>87</td>
          <td>463</td>
          <td>82719</td>
          <td>85</td>
          <td>JPN</td>
        </tr>
        <tr>
          <td>yokohama</td>
          <td>890,000</td>
          <td>56</td>
          <td>156</td>
          <td>881264</td>
          <td>83</td>
          <td>JPN</td>
        </tr>
        <tr>
          <td>hangook</td>
          <td>870,000</td>
          <td>51</td>
          <td>423</td>
          <td>848427</td>
          <td>93</td>
          <td>KOR</td>
        </tr>
        <tr>
          <td>cooper</td>
          <td>710,000</td>
          <td>46</td>
          <td>132</td>
          <td>703928</td>
          <td>89</td>
          <td>USA</td>
        </tr>
        <tr>
          <td>kumho</td>
          <td>690,000</td>
          <td>74</td>
          <td>124</td>
          <td>680824</td>
          <td>89</td>
          <td>KOR</td>
        </tr>
        <tr>
          <td>tokyo</td>
          <td>520,000</td>
          <td>49</td>
          <td>124</td>
          <td>513924</td>
          <td>84</td>
          <td>JPN</td>
        </tr>
        <div class="text-left">
          <span class="table3">※ 순이익(net income)= 수입(income)-생산단가(production cost)X제품의 수(number)</span>
        </div>
      </table>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-md-12">
      <form method="post" action="page26.php">
        <h4 class="question">Step1. tirename1, income, productioncost, number, netincome, tirename2, performance, country의 변수를 설정하세요.</h4>
        <div class="step1 pl-3">
          <p>tirename1<-c(“bridgestone”,”michelin”,”goodyear”,”continential”,”sumitomo”,”yokohama”,”hangook”,”cooper”,”kumho”,”tokyo”,”nexen”)</p>
          <p>income<-c(210000,189000,192000,152000,123000,890000,870000,710000,690000,520000,430000)</p>
          <p>productioncost<-c(77,80,64,76,87,56,51,46,74,49,59)</p>
          <p>number(200,160,124,216,463,156,423,132,124,124,126)</p>
          <p>tirename2<-c (“bridgestone”,”michelin”,”goodyear”,”continential”,”sumitomo”,”yokohama”,”hangook”,”cooper”,”kumho”,”tokyo”,”nexen”)</p>
          <p>performance<-c(98,95,76,80,85,83,93,89,89,84,79)</p>
          <p>country<-c(“USA”, “USA”, “USA”, “USA”,”JPN”, ”JPN”,”KOR”,”USA”,”KOR”,”JPN”,NA)</p>
        </div>
        <hr/>
        <h4 class="question">Step2. 순이익(net income)식을 활용하여 순이익을 산출하여 netincome으로 저장하세요.</h4>
        <input name="step2" id="step2" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
        <hr/>
        <h4 class="question">Step3. [표1]은 데이터 프레임 이름을 tire1으로 저장하여 만들고, [표2]는 데이터 프레임을 tire2로 저장하여 만드세요.</h4>
        <textarea name="step3" rows="2" class="step1" placeholder="여기에 입력하세요."></textarea>
        <hr/>
        <h4 class="question">Step4. tire2데이터의 결측값이 포함된 행을 제거하여 tire2로 재명명하세요.</h4>
        <input name="step4" id="step4" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
        <hr/>
        <h4 class="question">Step5. tire1과 tire2를 알파벳 순서로 배열하여 각각 tire3과 tire4로 저장하세요.</h4>
        <textarea name="step5" id="step5" rows="2" class="step1" placeholder="여기에 입력하시오"></textarea>
        <hr/>
        <h4 class="question">Step6. tire3 데이터프레임과 tire4데이터프레임을 tirename1, tirename2 기준으로 병합하여 tire5로 저장하세요.</h4>
        <input name="step6" id="step6" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
        <hr/>
        <h4 class="question">Step7. tire5에서 나라가 미국(USA)이고, 판매량(number)이 100개 이상인 행을 추출하세요.</h4>
        <input name="step7" id="step7" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
        <hr/>
        <h4 class="question">Step8. tire5에서 나라가 일본(JPN) 또는 성능점수(perforamnce)가 85점 이상인 행을 추출하세요.</h4>
        <input name="step8" id="step8" type="text" class="form-control mb-2" placeholder="여기에 코드를 입력하세요.">
        <hr/>
        <div class="text-right mb-3">
          <input type="submit" class="btn btn-primary" id="input_btn" value="다음 문제 풀기">
        </div>
      </form>
    </div>
  </div>

</div>


  <script src="../bootstrapl/js/jquery-3.3.1.min.js"></script>
  <script src="../bootstrapl/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
  error_reporting(E_ERROR|E_PARSE);
  $step1_1 = "1번 답 : ".$_POST["satisfaction"].PHP_EOL;
  $step1_2 = "2번 답 : ".$_POST["price"].PHP_EOL;
  $step1_3 = "3번 답 : ".$_POST["costeffectiveness"].PHP_EOL;
  $step1_4 = "4번 답 : ".$_POST["phone1"].PHP_EOL;
  $step1_5 = "5번 답 : ".$_POST["phone2"].PHP_EOL;
  $step1_6 = "6번 답 : ".$_POST["phone12"].PHP_EOL;
  $step1_7 = "7번 답 : ".$_POST["phone3"].PHP_EOL;
  $step2_1 = "8번 답 : ".$_POST["phone4"].PHP_EOL;
  $step2_2 = "9번 답 : ".$_POST["phone5"].PHP_EOL;
  $step2_3 = "10번 답 : ".$_POST["phone10"].PHP_EOL;
  $step2_4 = "11번 답 : ".$_POST["phone11"].PHP_EOL;

  if(isset($_POST["satisfaction"])||isset($_POST["price"])||isset($_POST["costeffectiveness"])||isset($_POST["phone1"])||isset($_POST["phone2"])||
  isset($_POST["phone12"])||isset($_POST["phone3"])||isset($_POST["phone4"])||isset($_POST["phone5"])||isset($_POST["phone10"])||isset($_POST["phone11"])){
    echo "<script type='text/javascript'>alert(\"등록되었습니다.\");</script>";
    $file = fopen("학습하기3_2.txt","a");
    fwrite($file, $step1_1);
    fwrite($file, $step1_2);
    fwrite($file, $step1_3);
    fwrite($file, $step1_4);
    fwrite($file, $step1_5);
    fwrite($file, $step1_6);
    fwrite($file, $step1_7);
    fwrite($file, $step2_1);
    fwrite($file, $step2_2);
    fwrite($file, $step2_3);
    fwrite($file, $step2_4);
    fwrite($file,"종료시간 : ".date("h:i:s").PHP_EOL);
    fclose($file);
    $file2 = fopen("학습하기3_3.txt","w");
    fwrite($file2,"시작시간 : ".date("h:i:s").PHP_EOL);
    fclose($file2);
  }
 ?>
