'use strict';

const add_form = document.querySelector('.add_details');
const form = document.querySelector('.customers-form');
const close_form = document.querySelector('.close_customer');
const addCustomer = document.querySelector('.add_customer');
const customerContainer = document.querySelector('.customer_container');

add_form.addEventListener('click', function(){

    form.classList.remove('hidden');
    
});

close_form.addEventListener('click',function(){
    form.classList.add('hidden');
});

//random number

const usedNumbers = new Set();

        function generateRandomNumber() {
            let randomNumber;
            do {
                // Generate a random four-digit number
                randomNumber = Math.floor(Math.random() * 90000) + 10000;
            } while (usedNumbers.has(randomNumber)); // Check if it has been used before

            // Add the number to the set of used numbers
            usedNumbers.add(randomNumber);

            // If there are more than 9000 unique numbers, clear the set to start over
            if (usedNumbers.size >= 90000) {
                usedNumbers.clear();
            }

            return randomNumber;
        }
       
       

//add details
addCustomer.addEventListener('click',function(){
event.preventDefault();

const randomNo = generateRandomNumber();

let fname=document.getElementById("firstname").value;  //getting the value of input field by id
let sname = document.getElementById('secondname').value;
let contact = document.getElementById('contacts').value;

const customer_html = `

<tr class="customer_container">
                        <td>CUS-${randomNo}</td>
                        <td>${fname} ${sname}</td>
                        <td>${contact}</td>
                        <td class="actions"><div class="act">
                          <div class="acti edit">edit</div>
                           <div class="acti delete">delete</div>
                          </div> </td>
</tr>

`
customerContainer.insertAdjacentHTML('afterend', customer_html);
form.classList.add('hidden');

})
