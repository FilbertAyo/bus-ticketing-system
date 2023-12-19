'use strict';

const add = document.querySelector('.add_details');
const admin_form = document.querySelector(".admin_form");
const add_admin = document.querySelector('.add');
const overlay = document.querySelector('.overlay');
const admin_dashboard = document.querySelector('.dash_contents');


add.addEventListener('click',()=>{
    admin_form.classList.remove('hidden');
    overlay.classList.remove('hidden');
});

overlay.addEventListener('click',()=>{
    admin_form.classList.add('hidden');
    overlay.classList.add('hidden');
});


// add_admin.addEventListener('click',()=>{

//     event.preventDefault();

//     let first_name = document.getElementById('firstName').value;
//     let last_name = document.getElementById('lastName').value;
//     let admin_contact = document.getElementById('phoneNumber').value;

//     const html =   `
//     <div class="admin_card other_adm">
//             <div class="adm_img">
//              <img src="/picture/admin.png" alt="">
//             </div>
//             <div class="other_name">
//               <h3 id="admin_name">${first_name} ${last_name}</h3>
//             </div>
//             <div class="other">
//               <p id="admin_contact">${admin_contact}</p>
//             </div>
//           </div>
//     `;
// admin_dashboard.insertAdjacentHTML('beforeend',html);

// admin_form.classList.add('hidden');
// overlay.classList.add('hidden');


// });
