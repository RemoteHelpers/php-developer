let btn = document.querySelector(
  '.btn-burger__menu--span',
);
let menu = document.querySelector(
  '.header__menu',
);
btn.addEventListener('click', function () {
  menu.classList.toggle('burger-menu_active');
  btn.classList.toggle('active-burger');
});

const anchors = document.querySelectorAll(
  'a[href*="#"]',
);

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();

    const blockID = anchor
      .getAttribute('href')
      .substr(1);

    document
      .getElementById(blockID)
      .scrollIntoView({
        behavior: 'smooth',
        block: 'start',
      });
  });
}
let formBtn = document.querySelector(
  '.php__form--btn',
);


let form1 = document.getElementById('form1');
let phpForm = document.querySelector(
  '.php__form--btn',
);
let formResult = document.getElementById(
  'form-res',
);
let submitted = false;

const formSubmit = () => {
  let myPhone = document.querySelector(
    '.php__form--input',
  ).value;
  let check = /^((8|\+380)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/.test(
    myPhone,
  );
  if (check) {
    submitted = true;
  } else {
    formResult.innerText =
      'Введите правильный номер!';
  }
};
phpForm.addEventListener('click', formSubmit);

