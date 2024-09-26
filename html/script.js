const catalogo = document.querySelectorAll('.catalog');
const carrello = document.querySelectorAll('.cart');
const container2 = document.querySelector('.container2');
const button = document.querySelector('button');
const table = document.querySelector('#table');
const listCart = document.querySelector('#cart-items');
const listItems = document.querySelectorAll('li');
const listTd = document.querySelectorAll('td');
const search = document.querySelector('#search');
let selectedTd = null;
let buttonCart = 0;
button.addEventListener('click', function () {
  buttonCart++;
  buttonCart = buttonCart % 2;
  console.log(buttonCart);
  if (buttonCart == 1) {
    container2.style.gridTemplateColumns = '100% 0%';
  } else {
    container2.style.gridTemplateColumns = '70% 30%';
  }
})
listItems.forEach(function (listItem) {
  listItem.onmouseover = function () {
    console.log('Ciao');
  };
});
listTd.forEach((td) => { td.setAttribute('draggable', 'true'); })
search.addEventListener('focus', () => {
  search.placeholder = '';
})
search.addEventListener('blur', () => {
  search.placeholder = 'Search';
})
listTd.forEach(td => {
  td.addEventListener('click', () => {
    selectedTd = td;
  });
});
document.addEventListener('click', (event) => {
  // Check if the clicked element is the currently selected td element
  if (event.target === selectedTd) {
    // Code to be executed when the selected td is clicked
    console.log('Selected TD clicked!');
    const li = document.createElement('li')
  listCart.appendChild(li);
  }
});
/*td => {td.addEventListener('click', liCart(td.textContent));}
function liCart(text) {
  
}*/