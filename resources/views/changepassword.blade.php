<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/changepassword.css') }}">
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
        <form class="mx-auto" id="changePasswordForm">
            <h1 class="text-center"><b>Change Password</b></h1>
            
            <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputUsername" required>
            </div>
            
            <div class="mb-3">
                <label for="exampleInputNic" class="form-label">NIC</label>
                <input type="text" class="form-control" id="exampleInputNic" required>
            </div>
            
            <div class="mb-3">
                <label for="exampleInputPassword" class="form-label">New Password</label>
                <input type="password" class="form-control" id="newPassword" required>
            </div>
            
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" required>
            </div>
            
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-light" style="background-color: #0066cc; color: white;">
                    <b>Change Password</b>
                </button>
            </div>
        <div class="login-link">
          <a href='/loginRoute' class="no-underline">Login</a>
      </form>
    

    <!-- Modal for Success Message -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="successModalLabel">Success</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Password changed successfully!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
      document.getElementById('changePasswordForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
        
        // Validate passwords match
        const newPassword = document.getElementById('newPassword').value;
        const confirmPassword = document.getElementById('confirmPassword').value;
        
        if (newPassword === confirmPassword) {
          // Show success modal
          var successModal = new bootstrap.Modal(document.getElementById('successModal'));
          successModal.show();
          
          // You can also reset the form if desired
          this.reset();
        } else {
          alert("Passwords do not match.");
        }
      });
    </script>
</body>
</html>
