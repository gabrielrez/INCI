const expandBtn = document.querySelector('.expand-btn');
const expandBtnIcon = document.querySelector('.expand-btn img');
const sidebar = document.querySelector('.sidebar');

expandBtn.addEventListener('click', function() {
  sidebar.classList.toggle('expanded');
  if (sidebar.classList.contains('expanded')){
    expandBtnIcon.src = '../public/img/btn_lateral_close.png';
  }else{
    expandBtnIcon.src = '../public/img/btn_lateral_open.png';
  }
});