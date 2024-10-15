function validate() {
    // Get the form elements
    const username = document.getElementById('username');
    const email = document.getElementById('email');
    const mobile = document.getElementById('mobile');
    const bloodGroup = document.querySelector('select[name="blood-group"]');
    const address = document.getElementById('address');

    // Initialize error flags
    let isValid = true;
    let usernameError = '';
    let emailError = '';
    let mobileError = '';
    let bloodGroupError = '';
    let addressError = '';

    // Validate username
    if (username.value.trim() === '') {
        usernameError = 'Please enter your full name';
        isValid = false;
    }

    // Validate email
    if (email.value.trim() === '') {
        emailError = 'Please enter your email id';
        isValid = false;
    } else if (!email.value.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)) {
        emailError = 'Please enter a valid email id';
        isValid = false;
    }

    // Validate mobile number
    if (mobile.value.trim() === '') {
        mobileError = 'Please enter your mobile no.';
        isValid = false;
    } else if (!mobile.value.match(/^[0-9]{10}$/)) {
        mobileError = 'Please enter a valid 10-digit mobile no.';
        isValid = false;
    }

    // Validate address
    if (address.value.trim() === '') {
        addressError = 'Please enter your address';
        isValid = false;
    }

    // Display error messages
    document.querySelector('.warning-username').innerHTML = usernameError;
    document.querySelector('.warning-email').innerHTML = emailError;
    document.querySelector('.warning-mobile-no').innerHTML = mobileError;
    document.querySelector('.warning-address').innerHTML = addressError;

    // If the form is valid, redirect to campaigns.html
    if (isValid) {
        document.getElementById("popup").style.display = "block";
    }
    
    event.preventDefault();
}

function closePopup() {
    window.location.href = 'campaigns.html';
}