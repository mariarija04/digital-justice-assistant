document.addEventListener("DOMContentLoaded", function () {
    const userTypeRadios = document.querySelectorAll('input[name="userType"]');
    const advocateFields = document.getElementById('advocateFields');
    const registrationNumberInput = document.getElementById('registrationNumber');
    const signupForm = document.getElementById('signupForm');
    const consultationForm = document.getElementById('consultationForm');
    const successMessage = document.getElementById('successMessage');
    const consultationButton = document.getElementById('consultationButton');

    // Add a change event listener to the user type radios
    userTypeRadios.forEach((radio) => {
        radio.addEventListener('change', function () {
            if (this.value === 'advocate') {
                advocateFields.style.display = 'block';
                registrationNumberInput.required = true;
            } else {
                advocateFields.style.display = 'none';
                registrationNumberInput.required = false;
            }
        });
    });

    // Add a form submission handler for the signup form
    signupForm.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the form from submitting

        const userType = document.querySelector('input[name="userType"]:checked').value;
        const username = document.querySelector('input[name="username"]').value;

        // Create a success message for the user
        const message = `Account created successfully for ${userType === 'advocate' ? 'Advocate' : 'General User'}: ${username}`;

        // Display the success message
        successMessage.style.display = 'block';
        successMessage.textContent = message;
    });

    // Add a form submission handler for the consultation form
    consultationForm.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the form from submitting

        // You can add your code here to handle the form submission, send a request, etc.

        // Display the success message
        successMessage.style.display = 'block';
        successMessage.textContent = 'Request sent. Waiting for advocate acceptance.';
    });

    // Add a click event listener to the consultation button
    consultationButton.addEventListener('click', function (e) {
        e.preventDefault();
        // You can add your code here to initiate the consultation request.
    });
});
