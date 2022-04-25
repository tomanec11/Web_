<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/png" href="image/favicon.jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script rel="stylesheet" src="js/bootstrap.min.js"></script>
    <title>Vila Taťána</title>
</head>
<body>
<?php
include_once "header.php";
// otevřu DB connect
$conn = new mysqli("sql.endora.cz:3310", "martinectomascz", "Tajgr2002", "martinectomascz");
?>
<?php
if (isset($_GET['id'])) {
    /*$rooms = $conn->prepare('
       SELECT * FROM rooms
        WHERE id = ?');*/

    $rooms = $conn->prepare('
        SELECT * FROM rooms
        LEFT JOIN rooms_extra_info
        ON rooms.id = rooms_extra_info.id_forkey
        WHERE id = ?
        ');

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
<div class="container">
    <div class="row">
        <div class="col-5 col-sm py-5">
            <table class="table-responsive ">
                <tbody>
                <tr>
                    <th scope="row" class="text-end px-3">WC</th>
                    <td><?php echo $room['wc'] ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-end px-3">Sprchový kout</th>
                    <td><?php echo $room['sprcha'] ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-end px-3">Umyvadlo</th>
                    <td><?php echo $room['umyvadlo'] ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-end px-3">TV</th>
                    <td><?php echo $room['tv'] ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-end px-3">Postele</th>
                    <td><?php echo $room['postel'] ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-end px-3">Skříň</th>
                    <td><?php echo $room['skrin'] ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-end px-3">Cena</th>
                    <td><?php echo $room['price'] ?> ,- / noc</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="py-5 col-4 col-sm-5">
            <img src="<?php echo $room['photo']?>" alt="1" width="100%" height="100%">
        </div>
    </div>

    <hr>

    <form action="room_info.php?id=<?php echo $room['id']?>" method="POST" class="form">
        <div class="form-group">
            <label for="room" class="form-label">Pokoj</label>
            <input type="text" class="form-control" name="room" value="<?php echo $room['name'] ?>" tabindex="1" required>
        </div>
        <div class="form-group">
            <label for="First_name" class="form-label">Jméno</label>
            <input type="text" class="form-control" name="First_name" placeholder="Jméno" tabindex="2" required>
        </div>
        <div class="form-group">
            <label for="Last_name" class="form-label">Příjmení</label>
            <input type="text" class="form-control" name="Last_name" placeholder="Příjmení" tabindex="3" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="email@email.cz" tabindex="4" required>
        </div>
        <div class="form-group">
            <label for="tel" class="form-label">Telefonní číslo</label>
            <input type="tel" maxlength = "9" class="form-control" name="tel" placeholder="+420"  tabindex="5" required>
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
