<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - AzureStay</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        /* --- CSS Variables --- */
        :root {
            --primary-color: #2563EB; /* Royal Blue */
            --primary-light: #60A5FA;
            --sidebar-bg: #0F172A;    /* Dark Navy Blue */
            --sidebar-text: #94A3B8;
            --sidebar-active: #1E293B;
            --bg-light: #F1F5F9;
            --white: #FFFFFF;
            --text-dark: #1E293B;
            --danger: #EF4444;
            --transition: all 0.3s ease;
        }

        /* --- Reset & Base --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-dark);
            display: flex;
            min-height: 100vh;
        }

        /* --- Sidebar Navigation --- */
        .sidebar {
            width: 260px;
            background-color: var(--sidebar-bg);
            color: var(--white);
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            box-shadow: 4px 0 15px rgba(0,0,0,0.1);
        }

        .brand {
            padding: 30px 20px;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-light);
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            letter-spacing: 1px;
        }

        .nav-links {
            list-style: none;
            padding: 20px 0;
            flex: 1;
        }

        .nav-links li {
            margin-bottom: 5px;
        }

        .nav-links a {
            display: flex;
            align-items: center;
            padding: 15px 25px;
            color: var(--sidebar-text);
            text-decoration: none;
            transition: var(--transition);
            border-left: 4px solid transparent;
            font-size: 0.95rem;
        }

        /* Icons (using text for simplicity) */
        .nav-links a span {
            margin-right: 12px;
            font-size: 1.1rem;
        }

        .nav-links a:hover, .nav-links a.active {
            background-color: var(--sidebar-active);
            color: var(--white);
            border-left-color: var(--primary-color);
        }

        .logout-btn {
            border-left-color: var(--danger) !important;
            margin-top: 20px;
        }

        .logout-btn:hover {
            background-color: rgba(239, 68, 68, 0.1);
            color: var(--danger) !important;
        }

        /* --- Main Content Area --- */
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow-y: auto;
        }

        /* Header */
        header {
            background-color: var(--white);
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .welcome-text h2 {
            font-size: 1.5rem;
            color: var(--text-dark);
        }
        
        .welcome-text p {
            color: var(--sidebar-text);
            font-size: 0.9rem;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .avatar {
            width: 40px;
            height: 40px;
            background-color: var(--primary-color);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        /* Dashboard Stats Grid */
        .dashboard-container {
            padding: 40px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .card {
            background: var(--white);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.02);
            transition: var(--transition);
            border-bottom: 4px solid transparent;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0,0,0,0.05);
        }

        .card.blue { border-bottom-color: var(--primary-color); }
        .card.teal { border-bottom-color: #14B8A6; }
        .card.purple { border-bottom-color: #8B5CF6; }
        .card.orange { border-bottom-color: #F97316; }

        .card h3 {
            font-size: 0.9rem;
            color: var(--sidebar-text);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 10px;
        }

        .card .number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        /* --- Responsive --- */
        @media (max-width: 768px) {
            body { flex-direction: column; }
            .sidebar { width: 100%; height: auto; }
            .nav-links { display: flex; overflow-x: auto; padding: 10px; }
            .nav-links li { margin: 0 10px 0 0; white-space: nowrap; }
            .nav-links a { padding: 10px; font-size: 0.85rem; }
            .brand { padding: 15px; font-size: 1.2rem; text-align: left; }
            .dashboard-container { padding: 20px; }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="brand">AzureStay</div>
        <ul class="nav-links">
            <li><a href="dashboard.html" class="active"><span>&#8962;</span> Home / Dashboard</a></li>
            <li><a href="rooms.html"><span>&#128694;</span> Rooms</a></li>
            <li><a href="housekeeping.html"><span>&#128265;</span> Housekeeping</a></li>
            <li><a href="customers.html"><span>&#128100;</span> Customers Profiles</a></li>
            <li><a href="booking.html"><span>&#128178;</span> Booking & Billing</a></li>
            <li><a href="promotions.html"><span>#</span> Promotions/Discounts</a></li>
            <li><a href="changePassword.html"><span>&#128274;</span> Change Password</a></li>
            <li><a href="login.html" class="logout-btn"><span>&#128682;</span> Logout</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Top Header -->
        <header>
            <div class="welcome-text">
                <h2>Welcome, Admin</h2>
                <p>Hotel Management System Overview</p>
            </div>
            <div class="admin-profile">
                <span>Admin User</span>
                <div class="avatar">A</div>
            </div>
        </header>

        <!-- Dashboard Content -->
        <div class="dashboard-container">
            
            <!-- Explanation of Section -->
            <p style="margin-bottom: 20px; color: #64748B;">Select a section from the sidebar to manage specific hotel operations.</p>

            <!-- Dummy Stats Cards (Visual Filler) -->
            <div class="stats-grid">
                <div class="card blue">
                    <h3>Total Rooms</h3>
                    <div class="number">124</div>
                </div>
                <div class="card teal">
                    <h3>Available</h3>
                    <div class="number">42</div>
                </div>
                <div class="card purple">
                    <h3>Bookings Today</h3>
                    <div class="number">18</div>
                </div>
                <div class="card orange">
                    <h3>Pending Tasks</h3>
                    <div class="number">5</div>
                </div>
            </div>

            <!-- Optional Placeholder for content area -->
            <div style="background: white; padding: 40px; border-radius: 12px; text-align: center; color: #94A3B8; border: 2px dashed #E2E8F0;">
                <h3>Dashboard View</h3>
                <p>Recent activity and notifications would appear here.</p>
            </div>

        </div>
    </main>

</body>
</html>