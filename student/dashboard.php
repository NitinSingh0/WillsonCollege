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
    <title>Student Dashboard | Willson College</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-overlay {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
            url('../assets/images/img3.jpg') no-repeat center center;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>
<body class="bg-overlay text-white min-h-screen flex flex-col">

   
    <header class="bg-black bg-opacity-70 px-6 py-4 flex justify-between items-center shadow-md z-10">
        <h1 class="text-2xl font-bold text-white">Willson College</h1>
        <div class="space-x-4">
            <a href="#" class="hover:underline text-blue-300">Profile</a>
            <a href="../includes/logout.php" class="hover:underline text-red-400">Logout</a>
        </div>
    </header>

    
    <div class="flex-1 flex flex-col lg:flex-row p-6 backdrop-blur-sm bg-white/10 rounded-lg m-6 shadow-xl">

        
        <aside class="w-full lg:w-1/5 mb-6 lg:mb-0 lg:mr-6">
            <nav class="space-y-3">
                <a href="#" class="block px-4 py-2 bg-blue-800 hover:bg-blue-700 rounded">Dashboard</a>
                <a href="#" class="block px-4 py-2 bg-blue-800 hover:bg-blue-700 rounded">My Room</a>
                <a href="#" class="block px-4 py-2 bg-blue-800 hover:bg-blue-700 rounded">Courses</a>
                <a href="#" class="block px-4 py-2 bg-blue-800 hover:bg-blue-700 rounded">Notices</a>
            </nav>
        </aside>

        
        <main class="flex-1 space-y-6">
            
            <section>
                <h2 class="text-3xl font-semibold text-blue-100 mb-2">Welcome, Student</h2>
                <p class="text-blue-200">Here's your personalized dashboard with information relevant to you.</p>
            </section>

            
            <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
                <div class="bg-white bg-opacity-90 text-black p-4 rounded shadow-md hover:shadow-lg transition">
                    <h3 class="text-lg font-semibold text-blue-800">Room Information</h3>
                    <p class="mt-2">Room No: <strong>203</strong><br>Hostel: <strong>Block A</strong></p>
                </div>
                <div class="bg-white bg-opacity-90 text-black p-4 rounded shadow-md hover:shadow-lg transition">
                    <h3 class="text-lg font-semibold text-blue-800">My Courses</h3>
                    <ul class="list-disc list-inside mt-2">
                        <li>Web Programming</li>
                        <li>Data Structure</li>
                        <li>Next Generation Technology</li>
                    </ul>
                </div>
                <div class="bg-white bg-opacity-90 text-black p-4 rounded shadow-md hover:shadow-lg transition">
                    <h3 class="text-lg font-semibold text-blue-800">Profile Summary</h3>
                    <p class="mt-2">Name: <strong>Samrudha</strong><br>Reg No: <strong>WC123456</strong></p>
                </div>
                <div class="bg-white bg-opacity-90 text-black p-4 rounded shadow-md hover:shadow-lg transition">
                    <h3 class="text-lg font-semibold text-blue-800">Important Notices</h3>
                    <ul class="mt-2 list-disc list-inside text-sm">
                        <li>Mid-term exams start on July 10</li>
                        <li>Hostel inspection on June 20</li>
                    </ul>
                </div>
            </section>
        </main>
    </div>

    
    <footer class="bg-black bg-opacity-70 text-white text-center py-4 mt-auto">
        All rights are reserved to Willson College | developed by Samrudha
    </footer>

</body>
</html>
