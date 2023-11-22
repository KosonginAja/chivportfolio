<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Sesuaikan ini dengan alamat email Anda
    $to = "martisdony7@gmail.com";
    $subject = "Pesan dari: $name";

    $message = "Nama: $name\n";
    $message .= "Email: $email\n";
    $message .= "Subjek: $subject\n";
    $message .= "Pesan:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
