const mathInput = document.getElementById('math');
const scienceInput = document.getElementById('science');
const averageInput = document.getElementById('average');
const data6Input = document.getElementById('data6');
const data7Input = document.getElementById('data7');
const data8Input = document.getElementById('data8');
const data9Input = document.getElementById('data9');
const data10Input = document.getElementById('data10');
var excute = true;

mathInput.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h4>색깔로 표시된 변수 입력</h4>
        <h3>예) x<-c(88,86)</h3>
      </div>
      `;
    target.appendChild(div);

    const table = document.querySelectorAll('.mathValue');
    for(let i = 0; i < table.length; i++){
        table[i].classList.add("tablebox");
      }
    }

  excute = false;
});

mathInput.addEventListener('keydown',function(event){
  if(event.keyCode == 53 || event.keyCode == 101){
    alert("결측값: NA");
  }
});

mathInput.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  const table = document.querySelectorAll('.mathValue');
  for(let i = 0; i < table.length; i++){
      table[i].classList.remove("tablebox");
  }
  excute = true;
});

scienceInput.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h4>색깔로 표시된 변수 입력</h4>
        <h3>예) x<-c(62,90)</h3>
      </div>
      `;
    target.appendChild(div);

    const table = document.querySelectorAll('.scienceValue');
    for(let i = 0; i < table.length; i++){
        table[i].classList.add("tablebox");
      }
    }

  excute = false;
});

scienceInput.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  const table = document.querySelectorAll('.scienceValue');
  for(let i = 0; i < table.length; i++){
      table[i].classList.remove("tablebox");
  }
  excute = true;
});

averageInput.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h3>평균=(변수1+변수2+변수3…+변수n)/n</h3>
      </div>
      `;
    target.appendChild(div);

    const table = document.querySelectorAll('.averageValue');
    for(let i = 0; i < table.length; i++){
        table[i].classList.add("tablebox");
      }
    }

  excute = false;
});

averageInput.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  const table = document.querySelectorAll('.averageValue');
  for(let i = 0; i < table.length; i++){
      table[i].classList.remove("tablebox");
  }
  excute = true;
});

data6Input.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h3>data.frame(변수1,변수2,변수3,….) 순으로 입력</h3>
      </div>
      `;
    target.appendChild(div);

    const table = document.querySelectorAll('.data6Value');
    for(let i = 0; i < table.length; i++){
        table[i].classList.add("tablebox");
      }
    }

  excute = false;
});

data6Input.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  const table = document.querySelectorAll('.data6Value');
  for(let i = 0; i < table.length; i++){
      table[i].classList.remove("tablebox");
  }
  excute = true;
});

data7Input.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h4>결측값 제거 함수: na.omit</h4>
        <h3>예) na.omit(데이터명)</h3>
      </div>
      `;
    target.appendChild(div);
    }

  excute = false;
});

data7Input.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  const table = document.querySelectorAll('.data6Value');
  excute = true;
});

data8Input.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h4>순서에 따라 열을 재배치하는 함수: order</h4>
        <h3>예) 데이터명[order(변수),]</h3>
      </div>
      `;
    target.appendChild(div);
    }

  excute = false;
});

data8Input.addEventListener('keydown',function(event){
  if(event.keyCode == 66){
    const target = document.querySelector('.hint_text');
    const div = document.createElement('div');
    div.innerHTML = `<h3 style="color:red;">콤마(,) 빼먹지 않기</h3>`;
    target.appendChild(div);
  }
});

data8Input.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  const table = document.querySelectorAll('.data6Value');
  excute = true;
});

data9Input.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h4>데이터 프레임에서 해당 데이터 추출</h4>
        <h3>예) 데이터명[,c(추출열번호,추출열번호…)]</h3>
      </div>
      `;
    target.appendChild(div);

    const table = document.querySelectorAll('.data9Value');
    for(let i = 0; i < table.length; i++){
        table[i].classList.add("tablebox");
      }
    }

  excute = false;
});

data9Input.addEventListener('keydown',function(event){
  if(event.keyCode == 56 || event.keyCode == 104){
    const target = document.querySelector('.hint_text');
    const div = document.createElement('div');
    div.innerHTML = `<h3 style="color:red;">콤마(,) 빼먹지 않기</h3>`;
    target.appendChild(div);
  }
});

data9Input.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  const table = document.querySelectorAll('.data9Value');
  for(let i = 0; i < table.length; i++){
      table[i].classList.remove("tablebox");
  }
  excute = true;
});

data10Input.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h4>조건에 맞는 데이터 추출 함수: subset</h4>
        <h3>예) x 데이터 내에 y변수가 10이하인 데이터 추출 subset(x,y<10)</h3>
      </div>
      `;
    target.appendChild(div);
    }

  excute = false;
});

data10Input.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  excute = true;
});
