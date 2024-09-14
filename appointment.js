document.addEventListener('DOMContentLoaded', function () {
    // Initialize EmailJS with your User ID
    emailjs.init("uqi5QfwM53gNss19Z"); // Replace 'YOUR_USER_ID' with your actual User ID from EmailJS

    // Add event listener to the form submission
    document.getElementById('contact-form').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission

        // Send the email using EmailJS
        emailjs.sendForm('service_xlb0ldw', 'template_jomgx04', this) // Replace with your actual Service ID and Template ID
            .then(function () {
                console.log('SUCCESS!');
                alert('Appointment request sent successfully.');
            }, function (error) {
                console.log('FAILED...', error);
                alert('Failed to send appointment request.');
            });
    });
});
