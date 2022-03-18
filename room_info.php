<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script rel="stylesheet" src="js/bootstrap.min.js"></script>
    <title>Ubytovani</title>
</head>
<body>
<?php
include_once "header.php";
// otevřu DB connect
$conn = new mysqli("localhost", "root", "", "user_contact");
?>
<?php
if (isset($_GET['id'])) {
    $rooms = $conn->prepare('
       SELECT * FROM rooms
        WHERE id = ?');

    /*$rooms = $conn->prepare('
        SELECT * FROM rooms
        LEFT JOIN rooms_extra_info
        ON rooms.id = rooms_extra_info.forkey_id
        WHERE id = ?
        ');*/
    $rooms->bind_param("i", $_GET['id']);
    $rooms->execute();

    $result = $rooms->get_result();
    if ($result->num_rows === 0){
        exit('<div class="px-4 py-5 my-5 text-center">
                <h1 class="display-5 fw-bold">Pokoj neexistuje</h1>
              </div>');
    }

    $room = $result->fetch_assoc();
    $rooms->close();


} else {
    exit('<div class="px-4 py-5 my-5 text-center">
                <h1 class="display-5 fw-bold">Pokoj neexistuje</h1>
          </div>');
}

$result = NULL;
?>

    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold"><?php echo $room['name'] ?></h1>
    </div>
<div class="container justify-content-end row">

    <table class="table-responsive py-4 col-lg-8">
        <thead class="thead-dark">
        </thead>
        <tbody>
        <tr>
            <th scope="row" class="text-end px-3">WC</th>
            <td><?php echo $room['name'] ?></td>
        </tr>
        <tr>
            <th scope="row" class="text-end px-3">Sprchový kout</th>
            <td><?php echo $room['name'] ?></td>
        </tr>
        <tr>
            <th scope="row" class="text-end px-3">Umyvadlo</th>
            <td><?php echo $room['name'] ?></td>
        </tr>
        <tr>
            <th scope="row" class="text-end px-3">TV</th>
            <td><?php echo $room['name'] ?></td>
        </tr>
        <tr>
            <th scope="row" class="text-end px-3">Postele</th>
            <td><?php echo $room['name'] ?></td>
        </tr>
        <tr>
            <th scope="row" class="text-end px-3">Skříň</th>
            <td><?php echo $room['name'] ?></td>
        </tr>
        </tbody>
    </table>

    <div class="py-5 col-lg-4 text-center">
        <img src="<?php echo $room['photo']?>" alt="1" width="100%" height="100%">
    </div>


    <form action="room_info.php.php" method="POST" class="form p-5">
        <div class="form-group">
            <label for="room" class="form-label">Pokoj</label>
            <input type="text" class="form-control" name="Pokoj" value="<?php echo $room['name'] ?>" tabindex="1" required>
        </div>
        <div class="form-group">
            <label for="name" class="form-label">Jméno a příjmení</label>
            <input type="text" class="form-control" name="name" placeholder="Jméno příjmení" tabindex="2" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="email@email.cz" tabindex="3" required>
        </div>
        <div class="form-group">
            <label for="tel" class="form-label">Telefonní číslo</label>
            <input type="tel" class="form-control" name="tel" value="+420" tabindex="4" required>
        </div>

        <div>
            <button type="submit" class="btn btn-warning my-3 px-5">Rezervovat</button>
        </div>
        </div>
    </form>
</div>

<?php
include_once "email_sql.php";
include_once "footer.php"
?>
</body>
</html>
