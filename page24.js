const satisfactionInput = document.getElementById('satisfaction');
const priceInput = document.getElementById('price');
const costeffectivenessInput = document.getElementById('costeffectiveness');
const phone1Input = document.getElementById('phone1');
const phone2Input = document.getElementById('phone2');
const phone12Input = document.getElementById('phone12');
const phone3Input = document.getElementById('phone3');
const phone4Input = document.getElementById('phone4');
const phone5Input = document.getElementById('phone5');
const phone10Input = document.getElementById('phone10');
const phone11Input = document.getElementById('phone11');
var excute = true;

satisfactionInput.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h4>색깔로 표시된 변수 입력</h4>
        <h3>예) x<-c(88,89)</h3>
      </div>
      `;
    target.appendChild(div);

    const table = document.querySelectorAll('.satisfactionValue');
    for(let i = 0; i < table.length; i++){
        table[i].classList.add("tablebox");
      }
    }

  excute = false;
});

satisfactionInput.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  const table = document.querySelectorAll('.satisfactionValue');
  for(let i = 0; i < table.length; i++){
      table[i].classList.remove("tablebox");
  }
  excute = true;
});

priceInput.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h4>색깔로 표시된 변수 입력</h4>
        <h3>예) x<-c(780,800)</h3>
      </div>
      `;
    target.appendChild(div);

    const table = document.querySelectorAll('.priceValue');
    for(let i = 0; i < table.length; i++){
        table[i].classList.add("tablebox");
      }
    }

  excute = false;
});

priceInput.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  const table = document.querySelectorAll('.priceValue');
  for(let i = 0; i < table.length; i++){
      table[i].classList.remove("tablebox");
  }
  excute = true;
});

costeffectivenessInput.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h3>가성비<-만족도*(성능/가격)</h3>
      </div>
      `;
    target.appendChild(div);
    }

  excute = false;
});

costeffectivenessInput.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  excute = true;
});

phone1Input.addEventListener('click',function(event){
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

    const table = document.querySelectorAll('.phone1Value');
    for(let i = 0; i < table.length; i++){
        table[i].classList.add("tablebox");
      }
    }

  excute = false;
});

phone1Input.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  const table = document.querySelectorAll('.phone1Value');
  for(let i = 0; i < table.length; i++){
      table[i].classList.remove("tablebox");
  }
  excute = true;
});

phone2Input.addEventListener('click',function(event){
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

    const table = document.querySelectorAll('.phone2Value');
    for(let i = 0; i < table.length; i++){
        table[i].classList.add("tablebox");
      }
    }

  excute = false;
});

phone2Input.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  const table = document.querySelectorAll('.phone2Value');
  for(let i = 0; i < table.length; i++){
      table[i].classList.remove("tablebox");
  }
  excute = true;
});

phone12Input.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h3>예) na.omit(데이터명)</h3>
      </div>
      `;
    target.appendChild(div);
    }

  excute = false;
});

phone12Input.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  excute = true;
});

phone3Input.addEventListener('click',function(event){
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

phone3Input.addEventListener('keydown',function(event){
  if(event.keyCode == 89){
    const target = document.querySelector('.hint_text');
    const div = document.createElement('div');
    div.innerHTML = `<h3 style="color:red;">콤마(,) 빼먹지 않기</h3>`;
    target.appendChild(div);
  }
  if(event.keyCode == 67) {
    const table = document.querySelector('.company1Value');
    table.classList.add("tablebox");
  }
});

phone3Input.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  const table = document.querySelector('.company1Value');
  table.classList.remove("tablebox");
  excute = true;
});

phone4Input.addEventListener('click',function(event){
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

phone4Input.addEventListener('keydown',function(event){
  if(event.keyCode == 89){
    const target = document.querySelector('.hint_text');
    const div = document.createElement('div');
    div.innerHTML = `<h3 style="color:red;">콤마(,) 빼먹지 않기</h3>`;
    target.appendChild(div);
  }
  if(event.keyCode == 67) {
    const table = document.querySelector('.company2Value');
    table.classList.add("tablebox");
  }
});

phone4Input.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  const table = document.querySelector('.company2Value');
  table.classList.remove("tablebox");
  excute = true;
});

phone5Input.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h4>merge: 데이터 프레임 병합 함수</h4>
        <h3>merge(<span style="color:orange">병합할 데이터명1</span>, <span style="color:red">병합할 데이터명2</span>, by.x=“<span style="color:orange">데이터명1의 병합합 열 이름</span>”,by.y=“<span style="color:red">데이터2의 병합할 열 이름</span>”)</h3>
      </div>
      `;
    target.appendChild(div);
    }

  excute = false;
});

phone5Input.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  excute = true;
});

phone10Input.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h4>조건에 따른 열 추출 함수: subset</h4>
        <h3>예) x데이터 내에 y변수가 10이하인 데이터 추출 subset(x,y<=10)</h3>
      </div>
      `;
    target.appendChild(div);
    }

  excute = false;
});

phone10Input.addEventListener('keydown',function(event){
  if(event.keyCode == 65){
    const target = document.querySelector('.hint_text');
    const div = document.createElement('div');
    div.innerHTML = `<h3 style="color:red;">그리고, 이고: &</h3>`;
    target.appendChild(div);
  }
});

phone10Input.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  excute = true;
});

phone11Input.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h4>조건에 따른 열 추출 함수: subset</h4>
        <h3>예) x데이터 내에 y변수가 10이하인 데이터 추출 subset(x,y<=10)</h3>
      </div>
      `;
    target.appendChild(div);
    }

  excute = false;
});

phone11Input.addEventListener('keydown',function(event){
  if(event.keyCode == 75){
    const target = document.querySelector('.hint_text');
    const div = document.createElement('div');
    div.innerHTML = `<h3 style="color:red;">그리고, 이고: |</h3>`;
    target.appendChild(div);
  }
});

phone11Input.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  excute = true;
});
