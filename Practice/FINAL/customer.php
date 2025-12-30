<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profiles - AzureStay</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        /* --- CSS Variables (Matches Previous Pages) --- */
        :root {
            --primary-color: #2563EB;
            --primary-hover: #1D4ED8;
            --sidebar-bg: #0F172A;
            --sidebar-text: #94A3B8;
            --sidebar-active: #1E293B;
            --bg-light: #F1F5F9;
            --white: #FFFFFF;
            --text-dark: #1E293B;
            --danger: #EF4444;
            --warning: #F59E0B; /* Orange for Edit */
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
            grid-template-columns: repeat(3, 1fr); /* 3 columns for Name, Email, Phone */
            gap: 20px;
            align-items: end;
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

        .form-group input {
            padding: 12px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
            transition: var(--transition);
            font-family: 'Poppins', sans-serif;
        }

        .form-group input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .submit-btn {
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
            padding: 12px 24px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition);
            height: 46px; /* Match input height */
        }

        .submit-btn:hover { background-color: var(--primary-hover); }
        
        .submit-btn.editing {
            background-color: var(--warning);
        }

        /* --- Table Styling --- */
        .table-container {
            background: var(--white);
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.02);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
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

        /* Action Buttons */
        .action-btn {
            padding: 6px 12px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.8rem;
            margin-right: 5px;
            border: none;
            transition: var(--transition);
            font-weight: 500;
        }

        .edit-btn {
            background-color: #FEF3C7;
            color: #D97706;
        }
        .edit-btn:hover {
            background-color: var(--warning);
            color: var(--white);
        }

        .delete-btn {
            background-color: #FEF2F2;
            color: var(--danger);
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
            .submit-btn { width: 100%; }
            .main-content { padding: 20px; }
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
            <li><a href="customers.html" class="active"><span>&#128100;</span> Customers Profiles</a></li>
            <li><a href="booking.html"><span>&#128178;</span> Booking & Billing</a></li>
            <li><a href="promotions.html"><span>#</span> Promotions/Discounts</a></li>
            <li><a href="changePassword.html"><span>&#128274;</span> Change Password</a></li>
            <li><a href="login.html" class="logout-btn"><span>&#128682;</span> Logout</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <h2>Manage Customer Profiles</h2>

        <!-- Customer Form -->
        <div class="card">
            <form id="customerForm">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" placeholder="e.g. John Doe" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" placeholder="e.g. john@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" placeholder="e.g. +1 555-0123" required>
                    </div>
                    
                    <!-- Submit Button -->
                    <button type="submit" id="submitBtn" class="submit-btn">Add Customer</button>
                </div>
            </form>
        </div>

        <!-- Customer Table -->
        <div class="table-container">
            <table id="custTable">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th style="width: 150px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Rows will be added here via JS -->
                </tbody>
            </table>
        </div>

    </main>

    <script>
        let customerCount = 0;
        let editingRow = null; // Variable to store the row currently being edited

        const form = document.getElementById('customerForm');
        const submitBtn = document.getElementById('submitBtn');
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const phoneInput = document.getElementById('phone');

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            if (editingRow) {
                // --- UPDATE MODE ---
                updateCustomer();
            } else {
                // --- ADD MODE ---
                addCustomer();
            }
        });

        function addCustomer() {
            const name = nameInput.value;
            const email = emailInput.value;
            const phone = phoneInput.value;

            const tableBody = document.querySelector('#custTable tbody');
            const newRow = document.createElement('tr');

            customerCount++;

            newRow.innerHTML = `
                <td>${customerCount}</td>
                <td class="data-name">${name}</td>
                <td class="data-email">${email}</td>
                <td class="data-phone">${phone}</td>
                <td>
                    <button class="action-btn edit-btn" onclick="editCustomer(this)">Edit</button>
                    <button class="action-btn delete-btn" onclick="deleteCustomer(this)">Delete</button>
                </td>
            `;

            tableBody.appendChild(newRow);
            form.reset();
        }

        function deleteCustomer(btn) {
            if(confirm('Are you sure you want to delete this customer?')) {
                const row = btn.parentNode.parentNode;
                row.remove();
                // Optional: Reset form if deleting the row being edited
                if (editingRow === row) {
                    resetForm();
                }
            }
        }

        function editCustomer(btn) {
            // Find the row containing the button
            const row = btn.parentNode.parentNode;

            // Get values from the row cells
            const name = row.querySelector('.data-name').innerText;
            const email = row.querySelector('.data-email').innerText;
            const phone = row.querySelector('.data-phone').innerText;

            // Populate form
            nameInput.value = name;
            emailInput.value = email;
            phoneInput.value = phone;

            // Change state to Edit Mode
            editingRow = row;
            submitBtn.innerText = "Update Customer";
            submitBtn.classList.add('editing');
            
            // Scroll to form
            document.querySelector('.card').scrollIntoView({ behavior: 'smooth' });
        }

        function updateCustomer() {
            if (!editingRow) return;

            // Update the row cells with new form values
            editingRow.querySelector('.data-name').innerText = nameInput.value;
            editingRow.querySelector('.data-email').innerText = emailInput.value;
            editingRow.querySelector('.data-phone').innerText = phoneInput.value;

            // Reset to Add Mode
            resetForm();
        }

        function resetForm() {
            form.reset();
            editingRow = null;
            submitBtn.innerText = "Add Customer";
            submitBtn.classList.remove('editing');
        }
    </script>

</body>
</html>