function activateUsernameInput() {
    var input = document.getElementById('username');
    input.focus(); // Focus on the input field
  }
  
  // Validaton
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        // Prevent form submission
        event.preventDefault();

        // Get form inputs
        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value.trim();
        const email = document.getElementById('email').value.trim();

        // Validate inputs
        if (username === '' || password === '' || email === '') {
            alert('Please fill in all fields.');
            return;
        }

        // Validate email format
        if (!isValidEmail(email)) {
            alert('Please enter a valid email address.');
            return;
        }

        // Optionally, you can add more validation here

        // If all validations pass, submit the form
        form.submit();
    });

    // Function to validate email format
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});






