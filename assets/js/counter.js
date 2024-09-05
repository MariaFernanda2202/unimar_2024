// script.js
document.addEventListener('DOMContentLoaded', () => {
    // Selecione todos os contêineres com a classe "counter"
    const counters = document.querySelectorAll('.counter');

    counters.forEach(counter => {
        // Extraia os atributos personalizados
        const start = parseInt(counter.getAttribute('data-start'), 10);
        const end = parseInt(counter.getAttribute('data-end'), 10);
        const duration = parseInt(counter.getAttribute('data-duration'), 10);

        // Crie uma nova instância de CountUp para cada contêiner
        new CountUp(counter, start, end, 0, duration / 1000).start();
    });
});
