const managerInput = document.getElementById('manager1');
const dateInput = document.getElementById('date1');
const countryInput = document.getElementById('country1');
const genderInput = document.getElementById('gender1');
const ageInput = document.getElementById('age1');
const q1Input = document.getElementById('q11');
const q2Input = document.getElementById('q21');
const totalInput = document.getElementById('total1');
const data2Input = document.getElementById('data21');
const input_btn = document.getElementById('input_btn');
var excute = true;

managerInput.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h4>색깔로 표시된 변수 입력</h4>
        <h3>예) x<-c(1,2,3)</h3>
      </div>
      `;
    target.appendChild(div);

    const table = document.querySelectorAll('.column1');
    for(let i = 0; i < table.length; i++){
        table[i].classList.add("tablebox");
      }
    }

  excute = false;
});

managerInput.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);
  const table = document.querySelectorAll('.column1');
  for(let i = 0; i < table.length; i++){
      table[i].classList.remove("tablebox");
  }
  excute = true;
});

dateInput.addEventListener('click',function(){
  if(excute){
      const target = document.querySelector('.target');
      const div = document.createElement('div');
      div.classList.add("hint", "text-left", "mt-5");
      div.innerHTML = `
        <h4><span class="hint_box">도움말</span></h4>
        <div class="hint_text text-center">
          <h4>색깔로 표시된 변수 입력(문자열데이터:따옴표)</h4>
          <h3>예) x<-c(“06/01/08”,”06/05/01”)</h3>
        </div>
        `;
      target.appendChild(div);

      const table = document.querySelectorAll('.column2');
      for(let i = 0; i < table.length; i++){
          table[i].classList.add("tablebox");
      }
  }
  excute = false;
});

dateInput.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);

  const table = document.querySelectorAll('.column2');
  for(let i = 0; i < table.length; i++){
      table[i].classList.remove("tablebox");
  }
  excute = true;
});

countryInput.addEventListener('click',function(){
  if(excute){
  const target = document.querySelector('.target');
  const div = document.createElement('div');
  div.classList.add("hint", "text-left", "mt-5");
  div.innerHTML = `
    <h4><span class="hint_box">도움말</span></h4>
    <div class="hint_text text-center">
      <h4>색깔로 표시된 변수 입력(문자열데이터:따옴표)</h4>
      <h3>예) x<-c(“SWE”,”US”)</h3>
    </div>
    `;
  target.appendChild(div);

  const table = document.querySelectorAll('.column3');
  for(let i = 0; i < table.length; i++){
      table[i].classList.add("tablebox");
  }
}
excute = false;
});

countryInput.addEventListener('keydown',function(event){
  if(event.keyCode == 72){
    alert("결측값: NA");
  }
});

countryInput.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);

  const table = document.querySelectorAll('.column3');
  for(let i = 0; i < table.length; i++){
      table[i].classList.remove("tablebox");
  }
  excute = true;
});

genderInput.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h4>색깔로 표시된 변수 입력(문자열 데이터: 따옴표)</h4>
        <h3>예) x<-c(“M”,”F”)</h3>
      </div>
      `;
    target.appendChild(div);

    const table = document.querySelectorAll('.column4');
    for(let i = 0; i < table.length; i++){
        table[i].classList.add("tablebox");
    }
  }
  excute = false;
});

genderInput.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);

  const table = document.querySelectorAll('.column4');
  for(let i = 0; i < table.length; i++){
      table[i].classList.remove("tablebox");
  }
  excute = true;
});

ageInput.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h4>색깔로 표시된 변수 입력</h4>
        <h3>예) x<-c(32,45)</h3>
      </div>
      `;
    target.appendChild(div);

    const table = document.querySelectorAll('.column5');
    for(let i = 0; i < table.length; i++){
        table[i].classList.add("tablebox");
    }
  }
  excute = false;
});

ageInput.addEventListener('keydown',function(event){
  if(event.keyCode == 57 || event.keyCode == 105){
    alert("결측값: NA");
  }
});

ageInput.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);

  const table = document.querySelectorAll('.column5');
  for(let i = 0; i < table.length; i++){
      table[i].classList.remove("tablebox");
  }
  excute = true;
});

q1Input.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h4>색깔로 표시된 변수 입력</h4>
        <h3>예) x<-c(5,3)</h3>
      </div>
      `;
    target.appendChild(div);

    const table = document.querySelectorAll('.column6');
    for(let i = 0; i < table.length; i++){
        table[i].classList.add("tablebox");
    }
  }
  excute = false;
});

q1Input.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);

  const table = document.querySelectorAll('.column6');
  for(let i = 0; i < table.length; i++){
      table[i].classList.remove("tablebox");
  }
  excute = true;
});

q2Input.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h4>색깔로 표시된 변수 입력</h4>
        <h3>예) x<-c(4,5)</h3>
      </div>
      `;
    target.appendChild(div);

    const table = document.querySelectorAll('.column7');
    for(let i = 0; i < table.length; i++){
        table[i].classList.add("tablebox");
    }
  }
  excute = false;
});

q2Input.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);

  const table = document.querySelectorAll('.column7');
  for(let i = 0; i < table.length; i++){
      table[i].classList.remove("tablebox");
  }
  excute = true;
});

totalInput.addEventListener('click',function(event){
  if(excute){
    const target = document.querySelector('.target');
    const div = document.createElement('div');
    div.classList.add("hint", "text-left", "mt-5");
    div.innerHTML = `
      <h4><span class="hint_box">도움말</span></h4>
      <div class="hint_text text-center">
        <h4>색깔로 표시된 변수 더하기</h4>
        <h3>예) z는 x+y의 합<br/>
            z<-x+y</h3>
      </div>
      `;
    target.appendChild(div);

    const table = document.querySelectorAll('.total');
    for(let i = 0; i < table.length; i++){
        table[i].classList.add("tablebox");
    }
  }
  excute = false;
});

totalInput.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);

  const table = document.querySelectorAll('.total');
  for(let i = 0; i < table.length; i++){
      table[i].classList.remove("tablebox");
  }
  excute = true;
});

data2Input.addEventListener('click',function(event){
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

    const table = document.querySelector('.data2');
    table.classList.add("tablebox");
  }
  excute = false;
});

data2Input.addEventListener('blur',function(){
  const target = document.querySelector('.target');
  const div = document.querySelector('.hint');
  target.removeChild(div);

  const table = document.querySelector('.data2');
  table.classList.remove("tablebox");
  excute = true;
});
