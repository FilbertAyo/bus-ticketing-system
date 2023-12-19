'use strict';

const open_form = document.querySelector('.add_details');
const close_form = document.querySelector('.close_route');
const add_booking = document.querySelector('.add_route');
const overlay = document.querySelector('.overlay');
const form_container = document.querySelector('.form_container');
const seat = document.querySelectorAll('.seat');
const seatNo = document.querySelector('seatNumber');
const booking_details= document.querySelector('.book_container');
const view_seats = document.querySelector('.view_seats');
const bus_seats = document.querySelector('.bus');

function view(){
    view_seats.addEventListener('click',()=>{
        bus_seats.classList.remove('hidden');
    });
};


open_form.addEventListener('click',function(){
   form_container.classList.remove('hidden');
   overlay.classList.remove('hidden');
   view();
});

close_form.addEventListener('click',function(){
    form_container.classList.add('hidden');
    overlay.classList.add('hidden');
});
overlay.addEventListener('click',function(){
    form_container.classList.add('hidden');
    overlay.classList.add('hidden');
});

//change box color when div is clicked


   seat.forEach(box => {
    box.addEventListener('click',function(){
        this.style.backgroundColor = '#808080';
        this.style.color = '#FFFFFF';
    });
   });
//time


   //adding bookings
   add_booking.addEventListener('click',function(){
    event.preventDefault();

    let name = document.getElementById('name').value.toUpperCase();
    let contact = document.getElementById('contact').value;
    let busNumber = document.getElementById('busNumber').value.toUpperCase();
    let source = document.getElementById('source').value.toUpperCase();
    let destination = document.getElementById('destination').value.toUpperCase();
    let setNumber = document.getElementById('seatNumber').value.toUpperCase();
    let amount = document.getElementById('amount').value;
    // let depDate = document.getElementById('departureDate').value;
    // let depTime = document.getElementById('departureTime').value;

    function displayDateTime(){
        const now = new Date();
        const bookTime = document.getElementById('bookTime');
        bookTime.innerHTML = now.toLocaleString();
       }
    
       const a = displayDateTime();
    
    

    const html = `
    <tr>
    <td></td>
    <td>${name}</td>
    <td>${contact}</td>
    <td>${busNumber}</td>
    <td>${source}-${destination}</td>
    <td>${setNumber}</td>
    <td>${amount}</td>
    <td></td>
    <td id= "bookTime"></td>
    <td class="actions"><div class="act">
      <div class="acti edit">edit</div>
       <div class="acti delete">delete</div>
      </div></td>
    </tr>
    `;
  booking_details.insertAdjacentHTML('afterend',html);
  form_container.classList.add('hidden');
  overlay.classList.add('hidden');
  bus_seats.classList.add('hidden');
  
   });


 
