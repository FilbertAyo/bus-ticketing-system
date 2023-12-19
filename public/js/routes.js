'use strict';


const add_gui = document.querySelector('.route-bus');
const add = document.querySelector('.add_route');
const routeContainer = document.querySelector('.route_container');


document.querySelector(".add_details").addEventListener("click",function(){
  
    add_gui.classList.remove('hidden');
  });


  document.querySelector('.close_route').addEventListener("click",function(){
    add_gui.classList.add('hidden');
  });
//random number

const usedNumbers = new Set();

        function generateRandomNumber() {
            let randomNumber;
            do {
                // Generate a random four-digit number
                randomNumber = Math.floor(Math.random() * 9000) + 1000;
            } while (usedNumbers.has(randomNumber)); // Check if it has been used before

            // Add the number to the set of used numbers
            usedNumbers.add(randomNumber);

            // If there are more than 9000 unique numbers, clear the set to start over
            if (usedNumbers.size >= 9000) {
                usedNumbers.clear();
            }

            return randomNumber;
        }
       
       

//add the entered details

add.addEventListener('click',function(){
    event.preventDefault();

    const randomNo = generateRandomNumber();
    
const city_name=document.getElementById('city').value;  //get value from input field
const bus_number = document.getElementById('busNumber').value.toUpperCase();
const departure_date = document.getElementById('departureDate').value;
const departure_time = document.getElementById('departureTime').value;



const html = `
<tr>
                  <td>RT-${randomNo}</td>
                  <td>${city_name}</td>
                  <td>TZ-${bus_number}</td>
                  <td>${departure_date}</td>
                  <td>${departure_time}</td>
                  <td class="actions"><div class="act">
                    <div class="acti edit">edit</div>
                     <div class="acti delete">delete</div>
                    </div> </td>
</tr>
`  
routeContainer.insertAdjacentHTML("afterend",html);
add_gui.classList.add('hidden');

});
