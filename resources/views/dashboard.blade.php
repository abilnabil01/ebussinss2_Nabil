<x-app-layout>
    <div class="py-8 px-4 sm:px-6 lg:px-8">

        <!-- Cards Section dengan Efek -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
            
            <!-- Card 1 - dengan efek hover dan gradien -->
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-6 rounded-2xl shadow-lg 
                        transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:from-blue-600 hover:to-blue-700 
                        animate-fadeInUp" style="animation-delay: 100ms">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-semibold mb-1">Total Income</h3>
                        <p class="text-3xl font-bold mt-2">$579,000</p>
                        <div class="flex items-center mt-3">
                            <span class="text-sm bg-blue-700 bg-opacity-40 px-3 py-1 rounded-full">Saved 25%</span>
                            <svg class="w-5 h-5 ml-2 text-blue-300 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="bg-blue-700 bg-opacity-30 p-3 rounded-xl">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-blue-400 border-opacity-30">
                    <p class="text-xs text-blue-200">↑ 12% from last month</p>
                </div>
            </div>

            <!-- Card 2 - dengan efek hover dan gradien -->
            <div class="bg-gradient-to-r from-sky-400 to-sky-500 text-white p-6 rounded-2xl shadow-lg 
                        transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:from-sky-500 hover:to-sky-600 
                        animate-fadeInUp" style="animation-delay: 200ms">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-semibold mb-1">Total Expenses</h3>
                        <p class="text-3xl font-bold mt-2">$79,000</p>
                        <div class="flex items-center mt-3">
                            <span class="text-sm bg-sky-600 bg-opacity-40 px-3 py-1 rounded-full">Saved 25%</span>
                            <svg class="w-5 h-5 ml-2 text-sky-300 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="bg-sky-600 bg-opacity-30 p-3 rounded-xl">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-sky-300 border-opacity-30">
                    <p class="text-xs text-sky-200">↓ 8% from last month</p>
                </div>
            </div>

            <!-- Card 3 - dengan efek hover dan gradien -->
            <div class="bg-gradient-to-r from-purple-500 to-purple-600 text-white p-6 rounded-2xl shadow-lg 
                        transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:from-purple-600 hover:to-purple-700 
                        animate-fadeInUp" style="animation-delay: 300ms">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-semibold mb-1">Cash on Hand</h3>
                        <p class="text-3xl font-bold mt-2">$92,000</p>
                        <div class="flex items-center mt-3">
                            <span class="text-sm bg-purple-700 bg-opacity-40 px-3 py-1 rounded-full">Saved 18%</span>
                            <svg class="w-5 h-5 ml-2 text-purple-300 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="bg-purple-700 bg-opacity-30 p-3 rounded-xl">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-purple-400 border-opacity-30">
                    <p class="text-xs text-purple-200">↑ 5% from last month</p>
                </div>
            </div>

            <!-- Card 4 - dengan efek hover dan gradien -->
            <div class="bg-gradient-to-r from-green-500 to-green-600 text-white p-6 rounded-2xl shadow-lg 
                        transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:from-green-600 hover:to-green-700 
                        animate-fadeInUp" style="animation-delay: 400ms">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-semibold mb-1">Net Profit Margin</h3>
                        <p class="text-3xl font-bold mt-2">$179,000</p>
                        <div class="flex items-center mt-3">
                            <span class="text-sm bg-green-700 bg-opacity-40 px-3 py-1 rounded-full">Saved 65%</span>
                            <svg class="w-5 h-5 ml-2 text-green-300 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="bg-green-700 bg-opacity-30 p-3 rounded-xl">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-green-400 border-opacity-30">
                    <p class="text-xs text-green-200">↑ 22% from last month</p>
                </div>
            </div>

        </div>

        <!-- Charts Section dengan efek -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">

            <!-- Bar Chart -->
            <div class="bg-gradient-to-br from-white to-gray-50 p-6 rounded-2xl shadow-md col-span-2
                        transform transition-all duration-300 hover:shadow-xl hover:-translate-y-1
                        animate-fadeInUp" style="animation-delay: 500ms">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-bold text-xl text-gray-800">AP and AR Balance</h3>
                    <div class="flex space-x-2">
                        <span class="flex items-center text-sm">
                            <span class="w-3 h-3 bg-blue-500 rounded-full mr-2"></span>
                            Accounts Payable
                        </span>
                        <span class="flex items-center text-sm">
                            <span class="w-3 h-3 bg-green-500 rounded-full mr-2"></span>
                            Accounts Receivable
                        </span>
                    </div>
                </div>
                <div class="relative h-80">
                    <canvas id="barChart"></canvas>
                </div>
            </div>

            <!-- Doughnut Chart -->
            <div class="bg-gradient-to-br from-white to-gray-50 p-6 rounded-2xl shadow-md
                        transform transition-all duration-300 hover:shadow-xl hover:-translate-y-1
                        animate-fadeInUp" style="animation-delay: 600ms">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-bold text-xl text-gray-800">% of Income Budget</h3>
                    <div class="text-right">
                        <p class="text-2xl font-bold text-green-600">67%</p>
                        <p class="text-sm text-gray-500">Budget Used</p>
                    </div>
                </div>
                <div class="relative h-80">
                    <canvas id="donutChart"></canvas>
                </div>
                <div class="mt-6 grid grid-cols-2 gap-4">
                    <div class="text-center p-3 bg-green-50 rounded-lg">
                        <p class="text-2xl font-bold text-green-700">$385K</p>
                        <p class="text-sm text-gray-600">Used</p>
                    </div>
                    <div class="text-center p-3 bg-blue-50 rounded-lg">
                        <p class="text-2xl font-bold text-blue-700">$194K</p>
                        <p class="text-sm text-gray-600">Remaining</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Quick Stats Section -->
        <div class="bg-gradient-to-r from-indigo-50 to-purple-50 p-6 rounded-2xl shadow-md mb-8
                    animate-fadeInUp" style="animation-delay: 700ms">
            <h3 class="font-bold text-xl text-gray-800 mb-6">Hospital Financial Overview</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                    <p class="text-sm text-gray-500">Today's Income</p>
                    <p class="text-2xl font-bold text-gray-800">$305</p>
                    <div class="h-2 bg-gray-200 rounded-full mt-2 overflow-hidden">
                        <div class="h-full bg-green-500 rounded-full w-3/4"></div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                    <p class="text-sm text-gray-500">This Week's Income</p>
                    <p class="text-2xl font-bold text-gray-800">$1,005</p>
                    <div class="h-2 bg-gray-200 rounded-full mt-2 overflow-hidden">
                        <div class="h-full bg-blue-500 rounded-full w-2/3"></div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                    <p class="text-sm text-gray-500">This Month's Income</p>
                    <p class="text-2xl font-bold text-gray-800">$5,505</p>
                    <div class="h-2 bg-gray-200 rounded-full mt-2 overflow-hidden">
                        <div class="h-full bg-purple-500 rounded-full w-1/2"></div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                    <p class="text-sm text-gray-500">This Year's Income</p>
                    <p class="text-2xl font-bold text-gray-800">$155,615</p>
                    <div class="h-2 bg-gray-200 rounded-full mt-2 overflow-hidden">
                        <div class="h-full bg-red-500 rounded-full w-9/10"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @push('styles')
    <style>
        /* Animasi kustom */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease-out forwards;
            opacity: 0;
        }

        /* Efek gradien pada chart container */
        .chart-container {
            position: relative;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 1rem;
            overflow: hidden;
        }

        /* Efek glow pada hover card */
        .hover-glow:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1), 0 0 0 1px rgba(59, 130, 246, 0.1);
        }

        /* Progress bar animation */
        .progress-bar {
            transition: width 1.5s ease-in-out;
        }

        /* Pulse animation untuk indikator */
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.5;
            }
        }

        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
    </style>
    @endpush

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

    <script>
        // Wait for DOM to load
        document.addEventListener('DOMContentLoaded', function() {
            
            // Bar Chart dengan efek lebih menarik
            const barCtx = document.getElementById('barChart').getContext('2d');
            
            // Gradient untuk bar chart
            const barGradient = barCtx.createLinearGradient(0, 0, 0, 400);
            barGradient.addColorStop(0, 'rgba(59, 130, 246, 0.8)');
            barGradient.addColorStop(1, 'rgba(59, 130, 246, 0.1)');
            
            const barGradient2 = barCtx.createLinearGradient(0, 0, 0, 400);
            barGradient2.addColorStop(0, 'rgba(16, 185, 129, 0.8)');
            barGradient2.addColorStop(1, 'rgba(16, 185, 129, 0.1)');
            
            const barChart = new Chart(barCtx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [
                        {
                            label: 'Accounts Payable',
                            data: [200, 450, 300, 500, 700, 400, 650, 800, 550, 750, 900, 600],
                            backgroundColor: barGradient,
                            borderColor: '#3b82f6',
                            borderWidth: 2,
                            borderRadius: 8,
                            hoverBackgroundColor: '#2563eb',
                            hoverBorderWidth: 3
                        },
                        {
                            label: 'Accounts Receivable',
                            data: [300, 550, 400, 600, 800, 500, 750, 900, 650, 850, 950, 700],
                            backgroundColor: barGradient2,
                            borderColor: '#10b981',
                            borderWidth: 2,
                            borderRadius: 8,
                            hoverBackgroundColor: '#059669',
                            hoverBorderWidth: 3
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    animation: {
                        duration: 2000,
                        easing: 'easeOutQuart'
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                            labels: {
                                font: {
                                    size: 12
                                },
                                padding: 20,
                                usePointStyle: true
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.7)',
                            titleFont: {
                                size: 14
                            },
                            bodyFont: {
                                size: 13
                            },
                            padding: 12,
                            cornerRadius: 6,
                            displayColors: true
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false,
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                callback: function(value) {
                                    return '$' + value;
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });

            // Doughnut Chart dengan efek lebih menarik
            const donutCtx = document.getElementById('donutChart').getContext('2d');
            
            const donutChart = new Chart(donutCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Budget Used', 'Remaining Budget'],
                    datasets: [{
                        data: [67, 33],
                        backgroundColor: [
                            'rgba(16, 185, 129, 0.8)',
                            'rgba(59, 130, 246, 0.8)'
                        ],
                        borderColor: [
                            'rgba(16, 185, 129, 1)',
                            'rgba(59, 130, 246, 1)'
                        ],
                        borderWidth: 2,
                        hoverOffset: 15,
                        hoverBackgroundColor: [
                            'rgba(16, 185, 129, 1)',
                            'rgba(59, 130, 246, 1)'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '70%',
                    animation: {
                        animateScale: true,
                        animateRotate: true,
                        duration: 2000,
                        easing: 'easeOutQuart'
                    },
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                font: {
                                    size: 12
                                },
                                padding: 20,
                                usePointStyle: true
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    let label = context.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    label += context.parsed + '%';
                                    return label;
                                }
                            }
                        }
                    }
                }
            });

            // Tambahkan efek hover pada semua kartu
            const cards = document.querySelectorAll('.bg-gradient-to-r');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transition = 'all 0.3s ease';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transition = 'all 0.3s ease';
                });
            });

            // Animasi progress bars pada quick stats
            const progressBars = document.querySelectorAll('.h-2.bg-gray-200 > div');
            progressBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0%';
                
                setTimeout(() => {
                    bar.style.width = width;
                }, 100);
            });

            // Update data charts dengan animasi (contoh setelah 5 detik)
            setTimeout(() => {
                // Update bar chart dengan data baru
                barChart.data.datasets[0].data = [220, 480, 320, 520, 720, 420, 680, 820, 580, 780, 920, 620];
                barChart.data.datasets[1].data = [320, 580, 420, 620, 820, 520, 780, 920, 680, 880, 980, 720];
                barChart.update();
                
                // Update donut chart dengan data baru
                donutChart.data.datasets[0].data = [72, 28];
                donutChart.update();
                
                // Tampilkan notifikasi visual
                const event = new CustomEvent('chartUpdated', { detail: { time: new Date() } });
                document.dispatchEvent(event);
            }, 5000);
        });
    </script>
    @endpush
</x-app-layout>