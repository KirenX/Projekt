const modalBtn = document.querySelector('.btn-top');
const modal = document.querySelector('.modal');
const modalWrapper = document.querySelector('.modal-wrapper');
const modalRegister = document.querySelector('.modal-register');
const modalRegisterBtn = document.querySelector('.btn-signup');
const modalRegisterWrapper = document.querySelector('.modal-register-wrapper');
const modalRegisterFooterBtn = document.querySelector('.footer-register-text');
const h2Wrapper = document.querySelector('.h2-wrapper');
const input = document.querySelector('.input');
const mainPage = document.querySelector('.main-page');
const loginBtn = document.querySelector('.btn-login');
const feedsPage = document.querySelector('.feeds-page');
// ****************************************************************************
// modal
modalBtn.addEventListener('click', () => 
{
    modalWrapper.classList.add('modal-wrapper-display');
});

modalRegisterBtn.addEventListener('click', () => 
{
    modalWrapper.classList.remove('modal-wrapper-display');
    modalRegisterWrapper.classList.add('modal-register-wrapper-display');
    modalRegister.classList.add('modal-register-display');
});

modalRegisterFooterBtn.addEventListener('click', () => 
{
    modalWrapper.classList.add('modal-wrapper-display');
    modalRegisterWrapper.classList.remove('modal-register-wrapper-display');
    modalRegister.classList.remove('modal-register-display');
});

// inputs
const changeBorderColor = x => {
    input.style.border = x;
};

input.addEventListener('blur', (e) => {
    if(e.target.value !== "") {
        changeBorderColor(".3rem solid rgb(64, 163, 96)");
    }

    else {
        changeBorderColor(".2rem solid rgb(23, 82, 172)");
    }
;})

// feeds page display from main page

loginBtn.addEventListener('click', () => 
{
    feedsPage.classList.add('feeds-page-display');
    mainPage.classList.add('main-page-hide');
});

