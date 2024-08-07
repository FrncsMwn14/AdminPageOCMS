<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banjo West Appointments</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #28205a;
            color: white;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header img {
            height: 40px;
            vertical-align: middle;
        }
        .header h1 {
            margin: 0;
            font-size: 18px;
            vertical-align: middle;
        }
        .container-fluid {
            display: flex;
            flex-wrap: wrap;
            padding: 0;
        }
        .sidebar {
            background-color: #3f3b82;
            padding: 20px;
            color: white;
            height: 125vh;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 0;
            margin: 10px 0;
        }
        .sidebar a:hover {
            background-color: #28205a;
            border-radius: 5px;
        }
        .main-content {
            flex: 1;
            padding: 20px;
        }
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header-content h1 {
            margin: 0;
            font-size: 1.5em;
        }
        .search-add {
            display: flex;
            align-items: center;
        }
        .search-add input {
            padding: 10px;
            margin-right: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 200px;
        }
        .search-add button {
            padding: 10px 20px;
            background-color: #5a2d82;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .search-add button:hover {
            background-color: #7a4e9d;
        }
        .appointments {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .appointments table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .appointments th, .appointments td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .appointments th {
            background-color: #28205a;
            color: white;
        }
        .appointments tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .appointments tr:hover {
            background-color: #f1f1f1;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .pagination button {
            padding: 10px;
            border: 1px solid #ccc;
            background-color: white;
            cursor: pointer;
            margin-left: 5px;
        }
        .pagination button.active {
            background-color: #5a2d82;
            color: white;
        }
        .pagination button:hover {
            opacity: 0.9;
        }
        .dropdown {
            position: relative;
            display: flex;
            align-items: center;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            right: -10px;
            top: 40px;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .dropbtn {
            background-color: #3f3b82;
            color: white;
            padding: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        .dropbtn:hover {
            background-color: #28205a;
        }
        .icon-btn {
            background-color: transparent;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 18px;
            padding: 0;
            margin-left: 5px;
        }
        .icon-btn:focus + .dropdown-content,
        .dropdown-content:hover {
            display: block;
        }
        .logout {
            text-align: center;
            margin-top: 20px;
        }
        .logout a {
            color: white;
            background-color: #3f3b82;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }
        .logout a:hover {
            background-color: #28205a;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .container-fluid {
                flex-direction: column;
            }
            .main-content {
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div>
            <img src="logo.png" alt="Logo">
            <h1>Banjo West Appointments</h1>
        </div>
        <div>
            <span>Master Admin</span>
        </div>
    </div>
    <div class="container-fluid">
        <div class="sidebar">
            <a href="dashboard.php">Dashboard</a>
            <div class="dropdown">
                <a href="appointment.php" class="dropbtn">Appointments</a>
                <button class="icon-btn">&#9660;</button>
                <div class="dropdown-content">
                    <a href="baptism.php">Baptism</a>
                    <a href="wedding.php">Wedding</a>
                    <a href="mass.php">Mass</a>
                    <a href="requiem.php">Requiem</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="activities.php" class="dropbtn">Activities</a>
                <button class="icon-btn">&#9660;</button>
                <div class="dropdown-content">
                    <a href="scheduled.php">Schedule</a>
                    <a href="archive.php">Archive</a>
                </div>
            </div>
            <a href="chat.php">Chats</a>
            <a href="livemass.php">Live Mass</a>
            <a href="comment.php">Comments</a>
            <a href="donation.php">Donations</a>
            <a href="content.php">Web Contents</a>
            <div class="dropdown">
                <a href="youth.php" class="dropbtn">Manage Youth Activities</a>
                <button class="icon-btn">&#9660;</button>
                <div class="dropdown-content">
                    <a href="organization.php">Youth Organization</a>
                    <a href="youthactivities.php">Youth Activities</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="managechurch.php" class="dropbtn">Manage Church Chapels</a>
                <button class="icon-btn">&#9660;</button>
                <div class="dropdown-content">
                    <a href="banjoeast.php">Banjo East</a>
                    <a href="banjowest.php">Banjo West</a>
                </div>
            </div>
            <div class="logout">
                <a href="admin.php">Log out</a>
            </div>
        </div>
        <div class="main-content">
            <div class="header-content">
                <h1>Banjo West</h1>
                <div class="search-add">
                    <input type="text" placeholder="Search">
                    <button>Add Appointment</button>
                </div>
            </div>
            <div class="appointments">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>First Name</th>
                            <th>Phone Number</th>
                            <th>Appointment Date & Time</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Additional rows here -->
                    </tbody>
                </table>
                <div class="pagination">
                    <button class="page-link">Previous</button>
                    <button class="page-link active">1</button>
                    <button class="page-link">2</button>
                    <button class="page-link">Next</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
