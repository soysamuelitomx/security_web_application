<div class="container">
    <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            <!-- Gráfico 1 -->
            <div class="flex items-center justify-center bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                <canvas id="chart1"></canvas>
            </div>
            <!-- Gráfico 2 -->
            <div class="flex items-center justify-center bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                <canvas id="chart2"></canvas>
            </div>
            <!-- Número destacado -->
            <div class="flex items-center justify-center bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5 text-center">
                <h2 class="text-4xl font-bold m-r-3 text-blue-600">9</h2>
                <p class="text-gray-600">Usuarios registrados</p>
            </div>
            <!-- Gráfico 3 -->
            <div class="flex items-center justify-center bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                <canvas id="chart3"></canvas>
            </div>
            
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Gráfico 1: Barras
    const ctx1 = document.getElementById('chart1').getContext('2d');
    new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril'],
            datasets: [{
                label: 'Ventas',
                data: [10, 20, 30, 40],
                backgroundColor: ['#4A90E2', '#50E3C2', '#F5A623', '#D0021B']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            }
        }
    });

    // Gráfico 2: Pie
    const ctx2 = document.getElementById('chart2').getContext('2d');
    new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: ['Politicas de seguridad', 'Seguridad de red', 'Dispositivos personales', 'infraestructura', 'Claves','Aplicaciones web', 'Vulnerabilidades'],
            datasets: [{
                data: [300, 50, 100, 120, 170, 90],
                backgroundColor: ['#4A90E2', '#50E3C2', '#F5A623']
            }]
        },
        options: { responsive: true }
    });

    // Gráfico 3: Línea
    const ctx3 = document.getElementById('chart3').getContext('2d');
    new Chart(ctx3, {
        type: 'line',
        data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril'],
            datasets: [{
                label: 'Problemas solucionados',
                data: [5, 15, 25, 35],
                borderColor: 'green',
                borderWidth: 2,
                fill: false
            }]
        },
        options: { responsive: true }
    });


    // Gráfico 5: Burbuja
    const ctx5 = document.getElementById('chart5').getContext('2d');
    new Chart(ctx5, {
        type: 'bubble',
        data: {
            datasets: [{
                label: 'Datos de Burbuja',
                data: [
                    { x: 10, y: 20, r: 15 },
                    { x: 15, y: 10, r: 10 },
                    { x: 20, y: 30, r: 20 }
                ],
                backgroundColor: '#E74C3C'
            }]
        },
        options: { responsive: true }
    });
</script>
