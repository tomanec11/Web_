<?php
if (isset($_POST['name'], $_POST['email'], $_POST['tel'])) {
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userTel = $_POST['tel'];
    // TODO: toto je funkční kód, ale je zakomentován aby se ukládala data pouze do DB
    /*
    //subject
    $emailSubject = 'HTML email';
    //to
    $to = 'tom.martinec@email.cz';
    //message
    $message = '<h1>Rezervováno</h1> . <p>Děkujeme za vaši rezervaci</p>';

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: Localhost sender<master@localhost>' . "\r\n";
    $headers .= "Reply-to: " . $userEmail; // odpovím na mail

    // Send email
    if(mail($to, $emailSubject, $message, $headers)){
        echo 'Děkujeme za kontaktování.';
    }else{
        echo 'Email sending failed.';
    }*/

    //MySQL-Connection

    $connection = mysqli_connect("localhost", "root", "", "user_contact");
    $sql = "INSERT INTO user_info (name, email, tel) VALUES ('$userName','$userEmail','$userTel')";

    $result = mysqli_query($connection, $sql);
    ?>
    <div class="px-4 py-3 my-5 text-center">
        <p class="display-5">Děkujeme za kontaktování</p>
    </div>
    <?php
}


