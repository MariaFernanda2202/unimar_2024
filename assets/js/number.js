document.getElementById('number').addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
    value = value.replace(/^(\d{2})(\d)/g, '($1) $2'); // Adiciona parênteses ao DDD
    value = value.replace(/(\d)(\d{4})$/, '$1-$2'); // Adiciona o traço antes dos últimos 4 dígitos
    e.target.value = value;
});
