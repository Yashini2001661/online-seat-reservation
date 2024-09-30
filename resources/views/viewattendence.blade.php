<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Attendance</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/78191ce747.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/viewattendence.css') }}">
   
</head>

<body>
    <!-- Logout Button -->
    <div class="position-absolute top-0 end-0 p-3">
        <a href='/homeRoute' class="btn btn-light" title="Logout">
            Logout <i class="fas fa-sign-out-alt"></i>
        </a>
    </div>

    <!-- Page Heading -->
    <h1 class="text-center mt-4">View Attendance</h1>

    <!-- Filter Controls and Buttons Centered -->
    <div class="container text-center mt-4">
        <div class="d-flex justify-content-center align-items-center mb-3">
            <!-- Date Selection -->
            <div class="me-2">
                <label for="date-picker" class="me-1"><b>Select Date:</b></label>
                <input type="date" id="date-picker" class="form-control d-inline" style="width: 180px;">
            </div>
            
            <!-- Trainee ID Selection -->
            <div class="me-2">
                <label for="trainee-id" class="me-1"><b>Trainee ID:</b></label>
                <select id="trainee-id" class="form-control d-inline" style="width: 180px;">
                    <option value="">Select Trainee ID</option>
                    <option value="001">001</option>
                    <option value="002">002</option>
                    <option value="003">003</option>
                    <option value="004">004</option>
                </select>
            </div>

            <!-- Search and Clear Buttons -->
            <div>
                <button type="button" class="btn btn-primary me-2" style="background-color: #0066cc;">
                    Search <i class="fas fa-search"></i>
                </button>
                <button type="button" class="btn btn-secondary" style="background-color: #0066cc;">
                    Clear <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>

   <!-- Attendance Table -->
   <div class="container mt-4">
    <!-- Present Trainees Table -->
    <h4 class="text-center"><b>Present Trainees</h4></b>
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
            </tr>
            <tr>
                <td>2</td>
                <td>2024.09.26</td>
                <td>002</td>
                <td>Jane Smith</td>
                <td>13</td>
                <td>0714412581</td>
                <td>jane.smith@example.com</td>
            </tr>
            <tr>
                <td>3</td>
                <td>2024.09.26</td>
                <td>003</td>
                <td>Michael Johnson</td>
                <td>14</td>
                <td>0714412582</td>
                <td>michael.johnson@example.com</td>
            </tr>
            <tr>
                <td>4</td>
                <td>2024.09.26</td>
                <td>004</td>
                <td>Emily Davis</td>
                <td>15</td>
                <td>0714412583</td>
                <td>emily.davis@example.com</td>
            </tr>
        </tbody>
    </table>

    <!-- Absent Trainees Table -->
    <h4 class="text-center"><b>Absent Trainees</h4></b>
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
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2024.09.26</td>
                <td>005</td>
                <td>Sarah Connor</td>
                <td>16</td>
                <td>0714412584</td>
                <td>sarah.connor@example.com</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2024.09.26</td>
                <td>006</td>
                <td>James Bond</td>
                <td>17</td>
                <td>0714412585</td>
                <td>james.bond@example.com</td>
            </tr>
        </tbody>
    </table>
</div>

    <!-- Mark Attendance Link -->
    <div class="text-center mt-4">
        <a href='/adminpanelRoute' class="btn btn-light" style="background-color: #0066cc; color: white; border:none;">
            Mark Attendance <i class="fas fa-check"></i>
        </a>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
