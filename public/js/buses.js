"use strict";




const containerbus = document.querySelector('.bus_container');
const add_gui = document.querySelector(".add_bus");
const edit_gui = document.querySelector('.ok');
const overlay = document.querySelector('.overlay');



document.querySelector(".add_details").addEventListener("click",function(){

  add_gui.classList.remove('hidden');
  overlay.classList.remove('hidden');
});

overlay.addEventListener('click',function(){
    add_gui.classList.add('hidden');
    overlay.classList.add('hidden');
})


// function saveInput(){
//   const busNumber = document.getElementById('bus_input_btn').value;
//   localStorage.setItem('bus_number',busNumber);
// }

// let number = 0;

// function displayData(){

//  const storedBus = localStorage.getItem('bus_number');
//   const input_value = storedBus.toUpperCase();

//   if(input_value.length === 6){
//     number++;
//     const html = `
//     <tr class = "bus_container">
//             <td>${number}</td>
//              <td>TZ-${input_value}</td>
//            <td class="actions"><div class="act">
//             <button class="acti edit">edit</button>
//               <button class="acti delete">delete</button>
//             </div> </td>

//  </tr>
//     `;

//     containerbus.insertAdjacentHTML('afterend',html);

//   }

// }

document.querySelector(".add").addEventListener("click", function(){
// saveInput();
// displayData();
add_gui.classList.add('hidden');

});


// window.addEventListener('load',displayData);
// // // open edit gui

// document.querySelector('.edit').addEventListener("click",function(){
//   const html2 = `
//   <tr class="bus_container ok" >
//                       <td>1</td>
//                           <td><input type="text" placeholder="edit bus number"></td>
//                           <td class="actions"><div class="act">
//                             <button class="acti edit edit_ok">OK</>
//                            </td>
//                         </tr>
//   `;

//   containerbus.insertAdjacentHTML('afterend',html2);
// });


// delete button



