<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking & Billing - AzureStay</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        /* --- CSS Variables (Matches Dashboard) --- */
        :root {
            --primary-color: #2563EB;
            --sidebar-bg: #0F172A;
            --sidebar-text: #94A3B8;
            --sidebar-active: #1E293B;
            --bg-light: #F1F5F9;
            --white: #FFFFFF;
            --text-dark: #1E293B;
            --danger: #EF4444;
            --border: #E2E8F0;
            --transition: all 0.3s ease;
        }

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

        /* --- Sidebar --- */
        .sidebar {
            width: 260px;
            background-color: var(--sidebar-bg);
            color: var(--white);
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
        }

        .brand {
            padding: 30px 20px;
            font-size: 1.5rem;
            font-weight: 700;
            color: #60A5FA;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .nav-links {
            list-style: none;
            padding: 20px 0;
            flex: 1;
        }

        .nav-links li { margin-bottom: 5px; }

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

        .nav-links a span { margin-right: 12px; font-size: 1.1rem; }

        .nav-links a:hover, .nav-links a.active {
            background-color: var(--sidebar-active);
            color: var(--white);
            border-left-color: var(--primary-color);
        }

        /* --- Main Content --- */
        .main-content {
            flex: 1;
            padding: 40px;
            overflow-y: auto;
        }

        h2 {
            margin-bottom: 25px;
            color: var(--text-dark);
            font-weight: 600;
        }

        /* --- Form Styling --- */
        .card {
            background: var(--white);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.02);
            margin-bottom: 30px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-size: 0.9rem;
            margin-bottom: 8px;
            color: var(--sidebar-text);
            font-weight: 500;
        }

        .form-group input, .form-group select {
            padding: 12px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
            transition: var(--transition);
            font-family: 'Poppins', sans-serif;
        }

        .form-group input:focus, .form-group select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .submit-btn {
            grid-column: span 2;
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
            padding: 14px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 10px;
        }

        .submit-btn:hover {
            background-color: #1D4ED8;
        }

        /* --- Table Styling --- */
        .table-container {
            background: var(--white);
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.02);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background-color: #F8FAFC;
            border-bottom: 2px solid var(--border);
        }

        th {
            text-align: left;
            padding: 15px 20px;
            color: var(--sidebar-text);
            font-size: 0.85rem;
            text-transform: uppercase;
            font-weight: 600;
        }

        td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--border);
            font-size: 0.95rem;
            color: var(--text-dark);
        }

        tr:last-child td { border-bottom: none; }
        
        tr:hover { background-color: #F8FAFC; }

        .total-cell {
            font-weight: 700;
            color: var(--primary-color);
        }

        .delete-btn {
            background-color: #FEF2F2;
            color: var(--danger);
            border: 1px solid #FECACA;
            padding: 6px 12px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.8rem;
            transition: var(--transition);
        }

        .delete-btn:hover {
            background-color: var(--danger);
            color: var(--white);
        }

        /* --- Responsive --- */
        @media (max-width: 768px) {
            body { flex-direction: column; }
            .sidebar { width: 100%; height: auto; }
            .nav-links { display: flex; overflow-x: auto; padding: 10px; }
            .nav-links li { margin: 0 10px 0 0; white-space: nowrap; }
            .form-grid { grid-template-columns: 1fr; }
            .submit-btn { grid-column: span 1; }
            .main-content { padding: 20px; }
            .table-container { overflow-x: auto; }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="brand">AzureStay</div>
        <ul class="nav-links">
            <li><a href="dashboard.html"><span>&#8962;</span> Home / Dashboard</a></li>
            <li><a href="rooms.html"><span>&#128694;</span> Rooms</a></li>
            <li><a href="housekeeping.html"><span>&#128265;</span> Housekeeping</a></li>
            <li><a href="customers.html"><span>&#128100;</span> Customers Profiles</a></li>
            <li><a href="booking.html" class="active"><span>&#128178;</span> Booking & Billing</a></li>
            <li><a href="promotions.html"><span>#</span> Promotions/Discounts</a></li>
            <li><a href="changePassword.html"><span>&#128274;</span> Change Password</a></li>
            <li><a href="login.html" class="logout-btn"><span>&#128682;</span> Logout</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <h2>Booking & Billing</h2>

        <!-- Booking Form -->
        <div class="card">
            <form id="bookingForm">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="customerNumber">Customer Phone Number</label>
                        <input type="tel" id="customerNumber" placeholder="e.g. +1 555-0123" required>
                    </div>

                    <div class="form-group">
                        <label for="roomType">Room Type</label>
                        <select id="roomType" required>
                            <option value="" disabled selected>-- Select Room --</option>
                            <option value="Single">Single ($100)</option>
                            <option value="Double">Double ($180)</option>
                            <option value="Deluxe">Deluxe ($250)</option>
                            <option value="Suite">Suite ($500)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="bdate">Booking Date</label>
                        <input type="date" id="bdate" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Price Per Night ($)</label>
                        <input type="number" id="price" placeholder="0" min="0" required>
                    </div>

                    <div class="form-group">
                        <label for="nights">Number of Nights</label>
                        <input type="number" id="nights" placeholder="0" min="1" required>
                    </div>

                    <button type="submit" class="submit-btn">Add Booking</button>
                </div>
            </form>
        </div>

        <!-- Booking Table -->
        <div class="table-container">
            <table id="bookTable">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Customer Phone</th>
                        <th>Room Type</th>
                        <th>Date</th>
                        <th>Price/Night</th>
                        <th>Nights</th>
                        <th>Total Bill</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Javascript will populate rows here -->
                </tbody>
            </table>
        </div>

    </main>

    <script>
        // Set default date to today
        document.getElementById('bdate').valueAsDate = new Date();

        let bookingCount = 0;

        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Stop page reload

            // Get input values
            const phone = document.getElementById('customerNumber').value;
            const type = document.getElementById('roomType').value;
            const date = document.getElementById('bdate').value;
            const price = parseFloat(document.getElementById('price').value);
            const nights = parseFloat(document.getElementById('nights').value);

            // Calculate Total
            const totalBill = price * nights;

            // Get Table Body
            const tableBody = document.querySelector('#bookTable tbody');

            // Create Row
            const newRow = document.createElement('tr');

            // Populate Cells
            newRow.innerHTML = `
                <td>${++bookingCount}</td>
                <td>${phone}</td>
                <td>${type}</td>
                <td>${date}</td>
                <td>$${price.toFixed(2)}</td>
                <td>${nights}</td>
                <td class="total-cell">$${totalBill.toFixed(2)}</td>
                <td><button class="delete-btn" onclick="deleteRow(this)">Delete</button></td>
            `;

            // Add to table
            tableBody.appendChild(newRow);

            // Reset form (keeping date)
            document.getElementById('bookingForm').reset();
            document.getElementById('bdate').valueAsDate = new Date();
        });

        function deleteRow(btn) {
            const row = btn.parentNode.parentNode;
            row.remove();
        }
    </script>

</body>
</html>