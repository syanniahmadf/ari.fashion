<?php
if($_POST) {
    // Ambil nilai-nilai dari formulir
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Konfigurasi penerima email
    $to = "syanniahmadfauzan03@gmail.com"; // Ganti dengan alamat email penerima
    
    // Header email
    $headers = "From: $email" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    
    // Kirim email
    if(mail($to, $subject, $message, $headers)) {
        echo "Your message has been sent. Thank you!";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
} else {
    // Jika bukan metode POST, alihkan ke halaman kontak
    header("Location: /contact.html");
}
?>
