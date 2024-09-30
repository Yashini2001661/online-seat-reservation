<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/adminpanel.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMnT+gNI7eMXX05F23qM91e/1ZcTDeez3e7nWJx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/78191ce747.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Logout Button -->
    <div class="position-absolute top-0 end-0 p-3">
        <a href='/homeRoute' class="btn btn-light" title="Logout">
            Logout <i class="fas fa-sign-out-alt"></i>
        </a>
    </div>

    <h1 class="centered-heading"><b>Admin Panel-Reserved Seats</b></h1>

 <!-- Centered Date Selection -->
<div class="d-flex justify-content-center align-items-center mt-4 mb-4">
    <div class="me-2">
        <label for="date-picker" class="me-1"><b>Select Date:</b></label>
        <input type="date" id="date-picker" class="form-control d-inline" style="width: 180px;">
    </div>
</div>

<!-- Table -->
<!-- Attendance Table -->
<div class="container mt-4">
    <!-- Present Trainees Table -->
    
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Date</th>
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Seat No</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Attendance</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2024.09.26</td>
                <td>001</td>
                <td>Jhon Joe</td>
                <td>12</td>
                <td>0714412580</td>
                <td>john.doe@example.com</td>
                <td><input type="checkbox"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>2024.09.26</td>
                <td>002</td>
                <td>Jane Smith</td>
                <td>13</td>
                <td>0714412581</td>
                <td>jane.smith@example.com</td>
                <td><input type="checkbox"></td>
            </tr>
            <tr>
                <td>3</td>
                <td>2024.09.26</td>
                <td>003</td>
                <td>Michael Johnson</td>
                <td>14</td>
                <td>0714412582</td>
                <td>michael.johnson@example.com</td>
                <td><input type="checkbox"></td>
            </tr>
        </tbody>
    </table>

    <!-- Save Attendance Button -->
    <div class="text-center mt-4">
        <a href='/adminpanelRoute' class="btn btn-light" style="background-color: #0066cc; color: white; border:none;">
          Save Attendance
        </a>
    </div>

    <div class="container text-center mt-4">
    <div class="d-flex justify-content-left">
        <div class="view-attendance me-3"> 
            <a href='/viewattendenceRoute'><b>View Attendance &rarr;</b></a>
        
        <div class="container text-center mt-4">
    <div class="d-flex justify-content-left">
        <div class="view-attendance me-3">
            <a href="{{ route('download.attendance.csv') }}"><b>Print Booking Details &rarr;</b></a>
        </div>
    </div>
</div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-DfXdz0Bq1Z5b9U73rZPRgYPXFR2h6G3jT5QXcZ9P/qohzS8ht29p5E8sF3vW1qBQ" crossorigin="anonymous"></script>

</body>
</html>
