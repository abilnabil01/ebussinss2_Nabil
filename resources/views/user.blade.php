<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - {{ config('app.name','Laravel') }}</title>

    <!-- Bootstrap + FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            --sidebar-width: 250px;
            --primary: #6777ef;
            --muted: #6c757d;
            --bg: #f4f6f9;
        }
        *{box-sizing:border-box}
        body{font-family: Inter, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; background:var(--bg); margin:0;}
        /* Sidebar */
        .sidebar {
            position: fixed; left:0; top:0; bottom:0;
            width:var(--sidebar-width);
            background:#fff; box-shadow:0 6px 24px rgba(15,23,42,0.04);
            z-index:1000; overflow:auto;
        }
        .sidebar .brand{padding:22px;border-bottom:1px solid #f1f3f6}
        .sidebar .menu li a:hover, .sidebar .menu li a.active{background:var(--primary);color:#fff}

        .main-content{margin-left:var(--sidebar-width); transition:margin .25s; min-height:100vh}
        .navbar-custom{background:white; padding:14px 22px; box-shadow:0 6px 24px rgba(15,23,42,0.04);}
        .dashboard-content{padding:28px;}
        .stats-card, .activity-card, .table-card{background:white;padding:18px;border-radius:10px;box-shadow:0 10px 30px rgba(15,23,42,0.04)}
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="brand">
            <h4><i class="fa-solid fa-cube"></i> {{ config('app.name','MyApp') }}</h4>
        </div>

        <ul class="menu">
            <li><a href="{{ route('dashboard') }}" class="active"><i class="fa-solid fa-house"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa-solid fa-user"></i> My Profile</a></li>
            <li><a href="#"><i class="fa-solid fa-gear"></i> Settings</a></li>
        </ul>
    </aside>

    <!-- Main -->
    <div class="main-content" id="mainContent">

        <!-- Topbar -->
        <div class="navbar-custom d-flex justify-content-between align-items-center">
            <button class="btn btn-light" id="sidebarToggle"><i class="fa-solid fa-bars"></i></button>

            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none" data-bs-toggle="dropdown">
                    <div class="user-avatar bg-primary text-white rounded-circle px-3 py-2">{{ strtoupper(substr(Auth::user()->name,0,2)) }}</div>
                    <div class="ms-2">{{ Auth::user()->name }}</div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div class="dashboard-content">
            <h2 class="page-title">Dashboard</h2>

            <div class="row g-4">
                <!-- Monthly Chart -->
                <div class="col-lg-6">
                    <div class="activity-card">
                        <h5>Monthly Activity</h5>
                        <canvas id="monthlyChart" height="150"></canvas>
                    </div>
                </div>

                <!-- Sales Performance -->
                <div class="col-lg-6">
                    <div class="activity-card">
                        <h5>Sales Performance</h5>
                        <canvas id="salesChart" height="150"></canvas>
                    </div>
                </div>

                <!-- Orders Distribution -->
                <div class="col-lg-6 mt-4">
                    <div class="activity-card">
                        <h5>Orders Distribution</h5>
                        <canvas id="ordersChart" height="170"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Monthly Chart
        new Chart(document.getElementById('monthlyChart'), {
            type: 'bar',
            data: {
                labels: ['Jan','Feb','Mar','Apr','May','Jun'],
                datasets: [{
                    label: 'Revenue',
                    data: [120,200,150,220,300,260],
                    backgroundColor: 'rgba(103,119,239,0.85)'
                }]
            }
        });

        // Sales Performance
        new Chart(document.getElementById('salesChart'), {
            type: 'line',
            data: {
                labels: ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'],
                datasets: [{
                    label: 'Sales',
                    data: [10,20,15,30,25,35,40],
                    borderWidth:2,
                    tension:0.4,
                    borderColor:'#ff6384',
                    backgroundColor:'transparent'
                }]
            }
        });

        // Orders Distribution
        new Chart(document.getElementById('ordersChart'), {
            type: 'doughnut',
            data: {
                labels: ['Completed','Pending','Canceled'],
                datasets: [{
                    data: [60,25,15],
                    backgroundColor:['#47c363','#ffa426','#fc544b']
                }]
            }
        });

        // Sidebar Toggle
        document.getElementById('sidebarToggle').addEventListener('click', () => {
            document.getElementById('sidebar').classList.toggle('show');
        });
    </script>

</body>
</html>
