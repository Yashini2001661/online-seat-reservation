<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/booking.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMnT+gNI7eMXX05F23qM91e/1ZcTDeez3e7nWJx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/78191ce747.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-4">
    <!--------------------------- Logout Button --------------------------->
    <div class="position-absolute top-0 end-0 p-3">
        <a href='/homeRoute' class="btn btn-light" title="Logout">
            Logout <i class="fas fa-sign-out-alt"></i>
        </a>
    </div>

    <div class="d-flex justify-content-between mb-4 mt-5"> <!-- Added mt-5 for margin-top -->
        <h1>Seat Booking</h1>
        <form class="d-flex align-items-center">
            <label for="internId" class="me-2">Intern ID:</label>
            <input class="form-control" type="text" id="internId" placeholder="Enter ID" style="width: 150px;">
        </form>
    </div>



          <div class="row">
            <div class="col-md-4">
                <h5><b>My Bookings</h5></b>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Seat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="booking-table-body">
                        <tr>
                            <td>2024-09-24</td>
                            <td>05</td>
                            <td><button class="btn btn-danger btn-sm">Cancel</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-1 d-flex justify-content-center align-items-center">
                <div class="vertical-line"></div>
            </div>

            <div class="col-md-7">
                <h5><b>Select Date</h5></b>
                <input type="date" class="form-control mb-3" id="booking-date">

                <h5><b>Select Seat</h5></b>
                <div class="seat-grid">
                    <div class="seat available" data-seat-number="01">01</div>
                    <div class="seat available" data-seat-number="02">02</div>
                    <div class="seat available" data-seat-number="03">03</div>
                    <div class="seat available" data-seat-number="04">04</div>
                    <div class="seat available" data-seat-number="05">05</div>
                    <div class="seat available" data-seat-number="06">06</div>
                    <div class="seat available" data-seat-number="07">07</div>
                    <div class="seat available" data-seat-number="08">08</div>
                    <div class="seat available" data-seat-number="09">09</div>
                    <div class="seat available" data-seat-number="10">10</div>
                    <div class="seat available" data-seat-number="11">11</div>
                    <div class="seat available" data-seat-number="12">12</div>
                    <div class="seat available" data-seat-number="13">13</div>
                    <div class="seat available" data-seat-number="14">14</div>
                    <div class="seat available" data-seat-number="15">15</div>
                    <div class="seat available" data-seat-number="16">16</div>
                    <div class="seat available" data-seat-number="17">17</div>
                    <div class="seat available" data-seat-number="18">18</div>
                    <div class="seat available" data-seat-number="19">19</div>
                    <div class="seat available" data-seat-number="20">20</div>
                    <div class="seat available" data-seat-number="21">21</div>
                    <div class="seat available" data-seat-number="22">22</div>
                    <div class="seat available" data-seat-number="23">23</div>
                    <div class="seat available" data-seat-number="24">24</div>
                    <div class="seat available" data-seat-number="25">25</div>
                    <div class="seat available" data-seat-number="26">26</div>
                    <div class="seat available" data-seat-number="27">27</div>
                    <div class="seat available" data-seat-number="28">28</div>
                    <div class="seat available" data-seat-number="29">29</div>
                    <div class="seat available" data-seat-number="30">30</div>
                    <div class="seat available" data-seat-number="31">31</div>
                    <div class="seat available" data-seat-number="32">32</div>
                    <div class="seat available" data-seat-number="33">33</div>
                    <div class="seat available" data-seat-number="34">34</div>
                    <div class="seat available" data-seat-number="35">35</div>
                    <div class="seat available" data-seat-number="36">36</div>
                    <div class="seat available" data-seat-number="37">37</div>
                    <div class="seat available" data-seat-number="38">38</div>
                    <div class="seat available" data-seat-number="39">39</div>
                    <div class="seat available" data-seat-number="40">40</div>
                    <div class="seat available" data-seat-number="41">41</div>
                    <div class="seat available" data-seat-number="42">42</div>
                    <div class="seat available" data-seat-number="43">43</div>
                    <div class="seat available" data-seat-number="44">44</div>
                    <div class="seat available" data-seat-number="45">45</div>
                    <div class="seat available" data-seat-number="46">46</div>
                    <div class="seat available" data-seat-number="47">47</div>
                    <div class="seat available" data-seat-number="48">48</div>
                    <div class="seat available" data-seat-number="49">49</div>
                    <div class="seat available" data-seat-number="50">50</div>
                    <div class="seat available" data-seat-number="51">51</div>
                    <div class="seat available" data-seat-number="52">52</div>
                    <div class="seat available" data-seat-number="53">53</div>
                    <div class="seat available" data-seat-number="54">54</div>
                    <div class="seat available" data-seat-number="55">55</div>
                    <div class="seat available" data-seat-number="56">56</div>
                    <div class="seat available" data-seat-number="57">57</div>
                    <div class="seat available" data-seat-number="58">58</div>
                    <div class="seat available" data-seat-number="59">59</div>
                    <div class="seat available" data-seat-number="60">60</div>
                    <div class="seat available" data-seat-number="61">61</div>
                    <div class="seat available" data-seat-number="62">62</div>
                    <div class="seat available" data-seat-number="63">63</div>
                    <div class="seat available" data-seat-number="64">64</div>
                    <div class="seat available" data-seat-number="65">65</div>
                    <div class="seat available" data-seat-number="66">66</div>
                    <div class="seat available" data-seat-number="67">67</div>
                    <div class="seat available" data-seat-number="68">68</div>
                    <div class="seat available" data-seat-number="69">69</div>
                    <div class="seat available" data-seat-number="70">70</div>
                    <div class="seat available" data-seat-number="71">71</div>
                    <div class="seat available" data-seat-number="72">72</div>
                    <div class="seat available" data-seat-number="73">73</div>
                    <div class="seat available" data-seat-number="74">74</div>
                    <div class="seat available" data-seat-number="75">75</div>
                    <div class="seat available" data-seat-number="76">76</div>
                    <div class="seat available" data-seat-number="77">77</div>
                    <div class="seat available" data-seat-number="78">78</div>
                    <div class="seat available" data-seat-number="79">79</div>
                    <div class="seat available" data-seat-number="80">80</div>
                </div>

                <h5><b>Seat Status</h5></b>
                <div class="d-flex">
                    <div class="status-label">
                       <b> Available Seat</b>
                        <div class="available"></div>
                    </div>
                    <div class="status-label">
                        <b>Booked Seat</b>
                        <div class="booked"></div>
                    </div>
                </div>

                <button class="btn btn-success mt-4" id="confirm-button">Confirm</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Booking Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your seat has been booked successfully!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let selectedSeat = null;

        // Add click event to seats
        document.querySelectorAll('.seat.available').forEach(seat => {
            seat.addEventListener('click', function() {
                // Remove selected class from previously selected seat if any
                if (selectedSeat) {
                    selectedSeat.classList.remove('selected');
                }
                // Select the new seat
                selectedSeat = this;
                selectedSeat.classList.add('selected');
            });
        });

             
    document.addEventListener("DOMContentLoaded", function() {
        const dateInput = document.getElementById('booking_date');
        
        dateInput.addEventListener('focus', function() {
            const today = new Date();
            const dayOfWeek = today.getDay();
            const nextDay = new Date(today);
            nextDay.setDate(today.getDate() + 1); // Set next day
            
            dateInput.setAttribute('min', nextDay.toISOString().split('T')[0]); // Minimum date is tomorrow
            
            // Disable weekends
            for (let i = 0; i < 7; i++) {
                let date = new Date();
                date.setDate(today.getDate() + i);
                if (date.getDay() === 0 || date.getDay() === 6) { // Sunday or Saturday
                    dateInput.setAttribute('disabled', 'true');
                }
            }
        });
    });


        // Confirm button click event
        document.getElementById('confirm-button').addEventListener('click', function() {
            if (selectedSeat) {
                // Mark the selected seat as booked
                selectedSeat.classList.remove('available');
                selectedSeat.classList.add('booked');
                
                // Show confirmation modal
                var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
                confirmationModal.show();
                
                // Optionally, you can add the booking details to the My Bookings table
                const bookingDate = document.getElementById('booking-date').value;
                const bookingTableBody = document.getElementById('booking-table-body');
                const newRow = document.createElement('tr');
                newRow.innerHTML = `<td>${bookingDate}</td><td>${selectedSeat.dataset.seat-number}</td><td><button class="btn btn-danger btn-sm">Cancel</button></td>`;
                bookingTableBody.appendChild(newRow);
                
                // Reset selected seat
                selectedSeat = null;
            } else {
                alert("Please select a seat to confirm the booking.");
            }
        });
    </script>
</body>
</html>
