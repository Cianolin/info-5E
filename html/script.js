const catalogo = document.querySelectorAll('.catalog');
const carrello = document.querySelectorAll('.cart');
const container2= document.querySelector('.container2');
const button= document.querySelector('button');
const table= document.querySelector('#table');
const listCart= document.querySelector('#listCart');
const cell= document.querySelectorAll('td');
let buttonCart=0;
button.addEventListener('click', function(){
    buttonCart++;
    buttonCart=buttonCart%2;
    console.log(buttonCart);
    if(buttonCart==1){
        container2.style.gridTemplateColumns='100% 0%';
    } else {
        container2.style.gridTemplateColumns='70% 30%';
    }
})
cells.forEach(cell => {
    const button = document.createElement('button');
    button.textContent = 'Add to Cart';
    cell.appendChild(button);
  });

