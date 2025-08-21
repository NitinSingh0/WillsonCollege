<?php
session_start();
include('../includes/dbconn.php');
include('../includes/check-login.php');
check_login();

if (isset($_POST['submit'])) {
    $regno = $_POST['regno'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $contactno = $_POST['contact'];
    $emailid = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "INSERT INTO userRegistration(regNo, firstName, middleName, lastName, gender, contactNo, email, password)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('sssssiss', $regno, $fname, $mname, $lname, $gender, $contactno, $emailid, $password);
    $stmt->execute();

    echo "<script>alert('Student has been Registered!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration | Willson College</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    function validatePassword() {
        let pass = document.forms["registration"]["password"].value;
        let confirm = document.forms["registration"]["cpassword"].value;
        if (pass !== confirm) {
            alert("Passwords do not match!");
            return false;
        }
        return true;
    }
    </script>
</head>
<body class="bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('../assets/images/img3.jpg'); background-blend-mode: lighten; background-color: rgba(255,255,255,0.9);">

    
    <header class="bg-blue-900 text-white px-6 py-4 flex justify-between items-center shadow-md">
        <h1 class="text-xl font-bold">Warden Panel</h1>
        <div class="space-x-4">
            <a href="#" class="hover:underline">Dashboard</a>
            <a href="../includes/logout.php" class="hover:underline">Logout</a>
        </div>
    </header>

    
    <div class="max-w-6xl mx-auto px-6 py-10 bg-white bg-opacity-90 rounded shadow-lg mt-6">
        <h2 class="text-2xl font-bold text-blue-900 mb-6">Student Registration Form</h2>

        <form method="POST" name="registration" onsubmit="return validatePassword();">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div>
                    <label class="block mb-1 text-sm font-medium">Registration Number</label>
                    <input type="text" name="regno" class="w-full border px-3 py-2 rounded" required>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium">First Name</label>
                    <input type="text" name="fname" class="w-full border px-3 py-2 rounded" required>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium">Middle Name</label>
                    <input type="text" name="mname" class="w-full border px-3 py-2 rounded" required>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium">Last Name</label>
                    <input type="text" name="lname" class="w-full border px-3 py-2 rounded" required>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium">Gender</label>
                    <select name="gender" class="w-full border px-3 py-2 rounded" required>
                        <option value="">Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium">Contact Number</label>
                    <input type="number" name="contact" class="w-full border px-3 py-2 rounded" required>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium">Email ID</label>
                    <input type="email" name="email" class="w-full border px-3 py-2 rounded" required>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium">Password</label>
                    <input type="password" name="password" class="w-full border px-3 py-2 rounded" required>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium">Confirm Password</label>
                    <input type="password" name="cpassword" class="w-full border px-3 py-2 rounded" required>
                </div>
            </div>

            <div class="mt-6 flex justify-center space-x-4">
                <button type="submit" name="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Register</button>
                <button type="reset" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Reset</button>
            </div>
        </form>
    </div>

   
    <footer class="bg-black text-white text-center py-4 mt-10">
        All rights reserved © Willson College | Developed by Samrudha
    </footer>
</body>
</html>
