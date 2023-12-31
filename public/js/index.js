'use strict';
//slideshow images


function changeImage(){
    const images = [
        'url("picture/a.jpg")',
        'url("picture/b.jpg")',
    ];

    const section = document.querySelector(".section1");
    const bg = images[Math.floor(Math.random()*images.length)];
    section.style.backgroundImage = bg;
    // section.style.transform = 'translate:(-50%,-50%)';
}

setInterval(changeImage, 4000);

// background zoom in and out when scroll

const background = document.getElementById('section1');
window.addEventListener('scroll',function(){
    background.style.backgroundSize = 160 - +window.pageYOffset/12+"%";
    background.style.opacity = 1 - +window.pageYOffset/700+"";
})


// navigation bar
var menulist = document.getElementById('menulist');

menulist.style.maxHeight = '0px';

function menutoggle(){
    if(menulist.style.maxHeight == '0px'){
        menulist.style.maxHeight = '100vh';
    }else{
        menulist.style.maxHeight = '0px';
    }

}



// login modal
const modal_login = document.querySelector(".form-box");
const openLogin = document.querySelectorAll(".login_modal");
const overlay = document.querySelector(".overlay");
const forget =  document.querySelector(".forget_pass");
const selectWindow = document.querySelector('.loginSelect');
const emailSel = document.querySelector('.email-sel');
const select = document.querySelector('.select');
const code = document.querySelector('.code');
const subCode = document.querySelector('.sub_code');
const submitCode = document.querySelector('.s_code');


// open modal
const open_login = function(){
    modal_login.classList.remove("hidden");
    overlay.classList.remove("hidden");
};

const close_login = function(){
  modal_login.classList.add('hidden');
  overlay.classList.add('hidden');
  selectWindow.classList.add('hidden');
  emailSel.classList.add('hidden');
  subCode.classList.add('hidden');
};




for (let i = 0; i < openLogin.length; i++) {
    openLogin[i].addEventListener("click", open_login);

forget.addEventListener('click',function(){
    event.preventDefault();
selectWindow.classList.remove('hidden');
modal_login.classList.add('hidden');

  select.addEventListener('click', function(){
event.preventDefault();
    emailSel.classList.remove('hidden');
    selectWindow.classList.add('hidden');

code.addEventListener('click',function(){
    event.preventDefault();
    subCode.classList.remove('hidden');
    emailSel.classList.add('hidden');
})

  })

})

  }

overlay.addEventListener("click",close_login);

document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      if (!modal_login.classList.contains("hidden")) {
        close_login();
      }
    }
 });

//  open new window

  //  for a single button
// document.getElementById('login_modal').addEventListener('click',function(){

//   window.location.href = 'workplace.html';
// });

// for two or more buttons

// var enter_login = document.querySelectorAll('.btn_login');

// enter_login.forEach(function(button){
//   button.addEventListener('click',function(){
//     window.location.href = '{{ route('/dashboard')}}';
//   });
// });

