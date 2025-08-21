<?php
session_start();

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
include('../includes/dbconn.php');
include('../includes/check-login.php');
check_login();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Warden Dashboard | Willson College</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-cover bg-fixed bg-center text-black" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
            url('../assets/images/img3.jpg') no-repeat center center;
            background-size: cover;
            background-attachment: fixed;">

   
    <header class="bg-blue-900 bg-opacity-90 text-white px-6 py-4 flex justify-between items-center shadow-md">
        <h1 class="text-xl font-bold">Warden Dashboard - Willson College</h1>
        <div class="space-x-4">
            <a href="#" class="hover:underline">Profile</a>
            <a href="../includes/logout.php" class="hover:underline">Logout</a>
        </div>
    </header>

    
    <div class="flex flex-col lg:flex-row">
        
        <aside class="w-full lg:w-64 bg-blue-800 bg-opacity-90 text-white p-6 space-y-4 h-full">
            <nav class="space-y-2">
                <a href="#" class="block px-3 py-2 rounded hover:bg-blue-700">Dashboard Home</a>
                <a href="student-registration.php" class="block px-3 py-2 rounded bg-blue-600 hover:bg-blue-700 font-semibold">Student Registration</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-blue-700">Room Management</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-blue-700">Reports</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-blue-700">Settings</a>
            </nav>
        </aside>

        
        <main class="flex-1 p-6 bg-white bg-opacity-90">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">Welcome, Warden</h2>

            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <div class="bg-white p-4 rounded shadow-md border-l-4 border-blue-600">
                    <p class="text-sm text-gray-500">Total Students</p>
                    <h3 class="text-3xl font-bold text-black">120</h3>
                </div>
                <div class="bg-white p-4 rounded shadow-md border-l-4 border-blue-600">
                    <p class="text-sm text-gray-500">Available Rooms</p>
                    <h3 class="text-3xl font-bold text-black">15</h3>
                </div>
                <div class="bg-white p-4 rounded shadow-md border-l-4 border-blue-600">
                    <p class="text-sm text-gray-500">Pending Requests</p>
                    <h3 class="text-3xl font-bold text-black">8</h3>
                </div>
                <div class="bg-white p-4 rounded shadow-md border-l-4 border-blue-600">
                    <p class="text-sm text-gray-500">Staff Members</p>
                    <h3 class="text-3xl font-bold text-black">4</h3>
                </div>
            </div>

            
            <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                <h4 class="text-xl font-semibold text-blue-800 mb-3">Quick Actions</h4>
                <div class="flex flex-wrap gap-4">
                    <a href="student-registration.php" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Register New Student</a>
                    <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Assign Room</a>
                    <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Generate Report</a>
                </div>
            </div>
        </main>
    </div>

    
    <footer class="bg-black text-white text-center py-4 mt-8">
        All rights are reserved to Willson College and developed by Samrudha
    </footer>

</body>

</html>