var botao = document.querySelector('#btn');
var div = document.querySelector('#p_lanches');

botao.addEventListener('click', function () {
  
  if (div.style.display === 'block') {
    div.style.display = 'none'
  } else {
    div.style.display = 'block'
  }
  
})
