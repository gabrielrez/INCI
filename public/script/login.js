const btn = document.querySelector('.submit-hub-btn');

btn.addEventListener('click', function(event){
  event.preventDefault();
  window.location.href = '../../view/hub.php';
});