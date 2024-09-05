let count = 0;

function updateDisplay() {
    document.getElementById('counterDisplay').textContent = count;
}

function changeCounter(amount) {
    count += amount;
    updateDisplay();
}

// Inicializa a exibição
updateDisplay();