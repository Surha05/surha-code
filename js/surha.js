(function(){
  let log = console.log
  let openPopupBtns = document.querySelectorAll('.open-popup')
  let popup = document.querySelector('#callback-popup')
  for(let el of openPopupBtns) {
    el.addEventListener('click', openPopup)
  }
  document.addEventListener('click', closePopup)

  function openPopup(e) {
    e.preventDefault()
    popup.classList.add('active')
  }
  function closePopup(e) {
    if(e.target.closest('.popup-container')) return;
    if(!e.target.closest('#callback-popup')) return;
    popup.classList.remove('active')
  }

})()
