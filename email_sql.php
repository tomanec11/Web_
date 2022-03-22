<?php
if (isset($_POST['Fname'], $_POST['Lname'], $_POST['email_mess'], $_POST['mess'])) {
    $userFName = $_POST['Fname'];
    $userLName = $_POST['Lname'];
    $userEmailMess = $_POST['email_mess'];
    $userMess = $_POST['mess'];
    // TODO: toto je funkční kód, ale je zakomentován aby se ukládala data pouze do DB
    /*
    //subject
    $emailSubject = 'HTML email';
    //to
    $to = 'tom.martinec@email.cz';
    //message
    $message = $userMess;

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: Localhost sender<master@localhost>' . "\r\n";
    $headers .= "Reply-to: " . $userEmailMess; // odpovím na mail

    // Send email
    if(mail($to, $emailSubject, $message, $headers)){
        echo 'Děkujeme za kontaktování.';
    }else{
        echo 'Email sending failed.';
    }*/

    //MySQL-Connection

    $connection = mysqli_connect("localhost", "root", "", "user_contact");
    $sqlMess = "INSERT INTO costumer_message (name, surname, email, mess) VALUES ('$userFName','$userLName','$userEmailMess','$userMess')";

    $result = mysqli_query($connection, $sqlMess);
    ?>
    <div class="px-4 py-3 my-5 text-center">
        <p class="display-5">Děkujeme za kontaktování</p>
    </div>
    <?php
}
?>

<?php
if (isset($_POST['room'], $_POST['First_name'], $_POST['Last_name'], $_POST['email'], $_POST['tel'],)) {
    $userRoom = $_POST['room'];
    $userFirstName = $_POST['First_name'];
    $userLastName = $_POST['Last_name'];
    $userEmail = $_POST['email'];
    $userTel = $_POST['tel'];

    //MySQL-Connection

    $connection = mysqli_connect("localhost", "root", "", "user_contact");
    $sqlBook = "INSERT INTO costumer_book (room,Fname, Lname, email, tel) VALUES ('$userFirstName','$userLastName','$userEmail','$userTel')";

    $result_Book = mysqli_query($connection, $sqlBook);
    ?>
    <div class="px-4 py-3 my-5 text-center">
        <p class="display-5">Děkujeme za kontaktování</p>
    </div>
    <?php
}

