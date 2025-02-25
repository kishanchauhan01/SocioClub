<?php include('navbar.php'); ?>

<style>
  body {
    background-color: rgb(34, 34, 34);
    /* Dark background */
    color: #fff;
    /* White text */
  }

  .container {
    background-color: rgb(45, 45, 45);
    /* Slightly lighter dark background for the form */
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    /* Shadow for depth */
  }

  .form-label {
    color: #fff;
    /* White labels */
  }

  .form-control {
    background-color: #555;
    /* Dark input background */
    color: #fff;
    /* White text in inputs */
    border: 1px solid #777;
    /* Border color */
  }

  .form-control:focus {
    background-color: #666;
    /* Darker background on focus */
    border-color: #007bff;
    /* Bootstrap primary color on focus */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    /* Shadow on focus */
  }

  .form-control.error {
    border-color: red;
    /* Red border for error */
  }

  .error-message {
    color: red;
    /* Red color for error messages */
    font-size: 0.9rem;
    /* Smaller font size for error messages */
  }

  .text-center.py-3 {
    background-color: #333;
    /* Dark footer background */
    color: #fff;
    /* White text for footer */
  }
</style>

<div class="container mt-5">
  <h2 class="text-center mb-4">Contact Us</h2>
  <p class="text-center">We would love to hear from you! If you have any questions or feedback, please fill out the form below.</p>

  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="submit_contact.php" method="POST" id="contactForm">
        <div class="mb-3">
          <label for="name" class="form-label">Your Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
          <div class="error-message" id="nameError"></div>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Your Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
          <div class="error-message" id="emailError"></div>
        </div>
        <div class="mb-3">
          <label for="mobile" class="form-label">Your Mobile Number</label>
          <input type="text" class="form-control" id="mobile" name="mobile" maxlength="10" required pattern="\d{10}">
          <div class="error-message" id="mobileError"></div>
        </div>
        <div class="mb-3">
          <label for="subject" class="form-label">Subject</label>
          <input type="text" class="form-control" id="subject" name="subject" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Your Message</label>
          <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
        <div class="mb-3 text-center">
          <button type="submit" class="btn btn-primary">Send Message</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="text-center py-3">
  <p class="mb-0">© 2025 Socioclub. All rights reserved.</p>
</div>

<script>
  document.getElementById('contactForm').addEventListener('submit', function(event) {
    let valid = true;

    // Clear previous error messages
    document.getElementById('nameError').innerText = '';
    document.getElementById('emailError').innerText = '';
    document.getElementById('mobileError').innerText = '';

    // Validate name
    const name = document.getElementById('name').value.trim();
    if (name === '') {
      document.getElementById('nameError').innerText = 'Enter your name';
      document.getElementById('name').classList.add('error');
      valid = false;
    } else {
      document.getElementById('name').classList.remove('error');
    }

    // Validate email
    const email = document.getElementById('email').value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Simple email regex
    if (email === '' || !emailPattern.test(email)) {
      document.getElementById('emailError').innerText = 'Enter a valid email address';
      document.getElementById('email').classList.add('error');
      valid = false;
    } else {
      document.getElementById('email').classList.remove('error');
    }

    // Validate mobile number
    const mobile = document.getElementById('mobile').value.trim();
    const mobilePattern = /^\d{10}$/; // 10 digit mobile number
    if (mobile === '' || !mobilePattern.test(mobile)) {
      document.getElementById('mobileError').innerText = 'Enter a valid mobile number';
      document.getElementById('mobile').classList.add('error');
      valid = false;
    } else {
      document.getElementById('mobile').classList.remove('error');
    }

    // Prevent form submission if validation fails
    if (!valid) {
      event.preventDefault();
    }
  });
</script>