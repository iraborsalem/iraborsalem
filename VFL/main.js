
//Get the modal element and out it inside a variable
var modal = document.getElementById('simpleModal');
//Open Modal button
var modalBtn = document.getElementById('modalBtn');
//Get the close button
var closeBtn = document.getElementsByClassName('closeBtn')[0];
//Add event listener
modalBtn.addEventListener('click', openModal);
//Add event listener for close modal
closeBtn.addEventListener('click', closeModal);
// open modal function
function openModal(){
	modal.style.display = 'block';
}
//close modal function
function closeModal(){
	modal.style.display = 'none';
}
//listen for outside click
 window.addEventListener('click', outsideClick);
// to close modal when outside is clicked
function outsideClick(e){
	if (e.target == modal){
	modal.style.display = 'none'}

}

