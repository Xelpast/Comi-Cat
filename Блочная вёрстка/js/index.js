const openPopUp = document.getElementById('open_pop_up');
const closePopUp = document.getElementById('pop_up_close');
const popUp = document.getElementById('pop_up');

openPopUp.addEventListener('click', (e) => {
	e.preventDefault();
	popUp.classList.add('active');
})

closePopUp.addEventListener('click', () => {
	popUp.classList.remove('active');
})

const openPopUp1 = document.getElementById('open_pop_up1');
const closePopUp1 = document.getElementById('pop_up_close1');
const popUp1 = document.getElementById('pop_up1');

openPopUp1.addEventListener('click', (e) => {
	e.preventDefault();
	popUp1.classList.add('active');
	popUp.classList.remove('active');
})

closePopUp1.addEventListener('click', () => {
	popUp1.classList.remove('active');
})