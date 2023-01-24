const openPopUp = document.getElementById('open-pop-up');
const closePopUp = document.getElementById('pop-up-close');
const popUp = document.getElementById('pop-up');

openPopUp.addEventListener('click', (e) => {
	e.preventDefault();
	popUp.classList.add('active');
})

closePopUp.addEventListener('click', () => {
	popUp.classList.remove('active');
})

const openPopUp1 = document.getElementById('open-pop-up1');
const closePopUp1 = document.getElementById('pop-up-close1');
const popUp1 = document.getElementById('pop-up1');

openPopUp1.addEventListener('click', (e) => {
	e.preventDefault();
	popUp1.classList.add('active');
	popUp.classList.remove('active');
})

closePopUp1.addEventListener('click', () => {
	popUp1.classList.remove('active');
})
//Password	
let btnPass = document.querySelector('.js-btn-password');
inputPass = document.querySelector('.js-password-input');

// console.log(inputPass.getAttribute('type'));

btnPass.onclick = function () {
	if (inputPass.getAttribute('type') === 'password') {
		inputPass.setAttribute('type', 'text');
		btnPass.classList.add('activ')
	} else {
		inputPass.setAttribute('type', 'password')
		btnPass.classList.remove('activ')
	}
}