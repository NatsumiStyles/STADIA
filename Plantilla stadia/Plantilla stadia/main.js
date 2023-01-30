let hideText_btn = document.getElementById('hideText_btn');
let hideText = document.getElementById('hideText');

hideText_btn.addEventListener('click', toggleText);

function toggleText() {
  hideText.classList.toggle('showText');

  if(hideText.classList.contains('showText')) {
    hideText_btn.innerHTML = 'Mostrar menos'
  }
  else {
    hideText_btn.innerHTML = 'Mostrar más'
  }
}