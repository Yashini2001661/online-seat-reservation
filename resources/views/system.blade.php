<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Seat Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/system.css') }}">
    <script src="https://kit.fontawesome.com/78191ce747.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/reservation.js') }}"></script>
    <script src="{{ asset('assets/js/seats.js') }}"></script>
    <script src="{{ asset('assets/js/cancel.js') }}"></script>

    <style>
        /* Basic styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        h1, h5 {
            color: #333;
        }

        .vertical-line {
            border-left: 2px solid #ccc;
            height: 100%;
        }

        /* Seat grid layout */
        .seat-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr); /* Change grid template for a modern look */
            gap: 10px;
            padding: 10px;
            justify-items: center;
        }

        .seat {
            width: 60px;
            height: 80px;
            background-color: #28a745;
            border-radius: 30% 30% 50% 50%; /* Rounded top with slight curve on the bottom */
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease; /* Smooth transition */
            position: relative;
        }

        /* Seat icon */
        .seat i {
            font-size: 20px;
            color: white;
        }

        /* Animation for selecting seats */
        .seat.selected {
            background-color: #ffc107 !important;
            transform: scale(1.1); /* Slight zoom effect */
        }

        .seat.booked {
            background-color: #dc3545;
            cursor: not-allowed;
        }

        .seat.available {
            background-color: #28a745;
        }

        /* Add hover effect */
        .seat:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

        /* Status label design */
        .status-label {
            margin-right: 20px;
        }

        .status-label div {
            width: 20px;
            height: 20px;
            display: inline-block;
            border-radius: 50%;
        }

        .available {
            background-color: #28a745;
        }

        .booked {
            background-color: #dc3545;
        }

        .selected {
            background-color: #ffc107;
        }

        /* Error message styling */
        .error-message {
            color: red;
            font-weight: bold;
            margin-top: 10px;
        }

        /* Smooth entrance animation for the grid */
        .seat-grid {
            animation: fadeInUp 1s ease-in-out;
        }

        /* Keyframes for smooth entrance animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

<!-- Logout Button -->
<div class="position-absolute top-0 end-0 p-3">
    <a href='/homeRoute' class="btn btn-light" title="Logout">
        Logout <i class="fas fa-sign-out-alt"></i>
    </a>
</div>
    
<div class="container mt-4">
    <div class="d-flex justify-content-between mb-4 mt-5">
        <h1>Seat Booking</h1>
        <form class="d-flex align-items-center">
            <label for="internId" class="me-2">Intern ID:</label>
            <input type="text" class="form-control me-2" value="{{ Auth::user()->emp_id }}" readonly style="width: 150px;">
        </form>
    </div>

    <div class="row">
        <!-- My Bookings Section -->
        <div class="col-md-5">
            <h5><b>My Bookings</b></h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Seat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="booking-table-body">
                    @foreach($userBookings as $booking)
                        <tr>
                            <td>{{ $booking->date }}</td>
                            <td>{{ str_pad($booking->seat_no, 2, '0', STR_PAD_LEFT) }}</td>
                            <td>
                                @if (now()->diffInDays($booking->date) > 0)
                                    <button class="btn btn-danger btn-sm" onclick="cancelBooking({{ $booking->id }})">Cancel</button>
                                @else
                                    <button class="btn btn-danger btn-sm" disabled>Cancel</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-1 d-flex justify-content-center align-items-center">
            <div class="vertical-line"></div>
        </div>

        <!-- Seat Selection Section -->
        <div class="col-md-6">
            <h5><b>Select Date</b></h5>
            <input type="date" class="form-control mb-3" id="date-picker" onchange="enableSeatSelection();">
            <div class="error-message" id="seat-error-message" style="display: none;">Please select a date first.</div>

            <h5><b>Select Seat</b></h5>
            <div class="seat-grid" id="seat-grid">
                <!-- Initial rendering of seats with airline seat icon -->
                @for($i = 1; $i <= 50; $i++)
                    <div class="seat available" 
                        data-seat-number="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}" 
                        onclick="selectSeat(this);">
                        <i class="fa-solid fa-seat-airline"></i>
                    </div>
                @endfor
            </div>

            <h5><b>Seat Status</b></h5>
            <div class="d-flex">
                <div class="status-label">
                    <b>Available Seat</b>
                    <div class="available"></div>
                </div>
                <div class="status-label">
                    <b>Booked Seat</b>
                    <div class="booked"></div>
                </div>
                <div class="status-label">
                    <b>Selected Seat</b>
                    <div class="selected"></div>
                </div>
            </div>
            <button class="btn btn-success mt-4" id="confirm-button" onclick="confirmBooking()">Confirm</button>    
        </div>
    </div>
</div>

</body>
</html>
