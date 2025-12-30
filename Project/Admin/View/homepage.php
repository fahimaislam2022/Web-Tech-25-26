<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AzureStay - Hotel Management</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/homepagecss.css">
</head>
<body>

    <!-- Hero Section -->
    <header class="hero">
        <div class="hero-content">
            <h1>Experience Blue.</h1>
            <p>Modern hotel management designed for clarity, comfort, and efficiency.</p>
            
            <div class="button-group">
                <button class="btn btn-primary" onclick="handleAction('Sign In')">Sign In</button>
                <button class="btn btn-secondary" onclick="handleAction('Register')">Register</button>
                <a href="login.php" class="btn btn-admin">Login as Admin</a>
            </div>
        </div>
    </header>

    <!-- Minimal Features -->
    <section class="features">
        <div class="feature-grid">
            <div class="feature-item">
                <span class="feature-icon">&#128269;</span> <!-- Hotel Icon -->
                <h3>Premium Rooms</h3>
                <p>Explore our ocean-view suites and cozy standard rooms.</p>
            </div>
            <div class="feature-item">
                <span class="feature-icon">&#9881;</span> <!-- Management Icon -->
                <h3>Seamless Control</h3>
                <p>Manage bookings, housekeeping, and guest data effortlessly.</p>
            </div>
            <div class="feature-item">
                <span class="feature-icon">&#10003;</span> <!-- Security Icon -->
                <h3>Secure Booking</h3>
                <p>Top-tier security ensuring your reservations are always safe.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 AzureStay Management System. All rights reserved.</p>
    </footer>

  

</body>
</html>