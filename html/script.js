const catalogo = document.querySelectorAll('.catalog');
const carrello = document.querySelectorAll('.cart');
const container2 = document.querySelector('.container2');
const button = document.querySelector('.button');
const table = document.querySelector('#table');
const listCart = document.querySelector('#cart-items');
const listItems = document.querySelectorAll('li');
const listTd = document.querySelectorAll('td');
const search = document.querySelector('#search');
const cartTotal = document.querySelector('#total');
const loginBtn = document.querySelector('.login');
let buttonCart = 0;
let selectedTd = null;
let selectedText = null;
let itemPrice = null;
let totalPrice = 0;

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

search.addEventListener('focus', () => {
  search.placeholder = '';
})
search.addEventListener('blur', () => {
  search.placeholder = 'Search';
})

listTd.forEach(td => {
  td.addEventListener('click', () => {
    selectedTd = td;
    selectedText = td.textContent;
    const aElement = td.querySelector('a');
    itemPrice = parseFloat(aElement.textContent);
  });
});

document.addEventListener('click', (event) => {
  if (event.target === selectedTd) {
    const li = document.createElement('li')
    li.textContent = selectedText;
    listCart.appendChild(li);
    totalPrice += itemPrice
    console.log(totalPrice);
    let prezzo = "".concat(totalPrice, "€");
    total.textContent = prezzo;
  }
});
function Login() {
  const widht = screen.width / 4;
  const heihgt = screen.height / 2;
  const left = (screen.width - widht) / 2;
  const top = (screen.height - heihgt) / 2;
  let finestra = window.open("", "", `width=${widht},height=${heihgt},left=${left},top=${top}`);
  let formCss = finestra.document.createElement("link");
  formCss.rel = "stylesheet";
  formCss.href = "styleForm.css";
  finestra.document.head.appendChild(formCss);
  let form = finestra.document.createElement("form");
  form.classList = "container";
  let userName = finestra.document.createElement("input");
  userName.type = "text";
  userName.placeholder = "NAME";
  userName.required = true;
  let pass = finestra.document.createElement("input");
  pass.type = "password";
  pass.placeholder = "PASSWORD";
  pass.required = true;
  let submit = finestra.document.createElement("input");
  submit.type = "submit";
  submit.value = "JOIN";
  submit.classList = "login";
  finestra.document.body.appendChild(form);
  form.appendChild(userName);
  form.appendChild(pass);
  form.appendChild(finestra.document.createElement("br"));
  form.appendChild(submit);
  let script2 = finestra.document.createElement("script");
  script2.src = "script2.js";
  finestra.document.body.appendChild(script2);
}
loginBtn.addEventListener('click', Login);