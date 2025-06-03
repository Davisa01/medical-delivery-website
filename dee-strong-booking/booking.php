<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $pickup = htmlspecialchars($_POST['pickup']);
    $delivery = htmlspecialchars($_POST['delivery']);
    $phone = htmlspecialchars($_POST['phone']);
    $datetime = htmlspecialchars($_POST['datetime']);
    $message = htmlspecialchars($_POST['message']);

    $to = "delivery@deestrongmedicaldelivery.net"; // replace with your real email
    $subject = "New Delivery Booking";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nPickup: $pickup\nDelivery: $delivery\nDate/Time: $datetime\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo "Booking request sent successfully!";
    } else {
        echo "Something went wrong. Please try again.";
    }
} else {
    // If someone accesses booking.php directly without POST
    header("HTTP/1.1 405 Method Not Allowed");
    echo "405 - Method Not Allowed";
}
?>
