
function formatarCampo(campo) {
  var valor = campo.value;
  var nomeCampo = campo.getAttribute('name');

  if (nomeCampo === 'cpf') {
    if (valor.length === 3 || valor.length === 7) {
      valor += '.';
    } else if (valor.length === 11) {
      valor += '-';
    }
  } else if (nomeCampo === 'cep') {
    if (valor.length === 5) {
      valor += '-';
    }
  }

  campo.value = valor;
}
