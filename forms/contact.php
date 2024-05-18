<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $mobile = $_POST['Mobile.no'];
    $nid = $_POST['NID.no'];
    $dob = $_POST['DOB'];
    $gender = $_POST['Gender'];
    $address = $_POST['Address'];
    $message = $_POST['Message'];

    // Set up email parameters
    $to = "test@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMobile: $mobile\nNID: $nid\nDOB: $dob\nGender: $gender\nAddress: $address\nMessage: $message";
    $headers = "From: $name <$email>";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us! We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // If not a POST request, redirect back to the contact form
    header("Location: contact-form.html");
}
?>
