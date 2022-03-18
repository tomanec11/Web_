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

    <a class="btn bg-warning" href="#" role="button">Rezervovat</a>

    <!--- <div class="py-5 my-5 col-lg-4 text-end">
            <p class="card-text fw-bold fs-5">WC</p>
            <p class="card-text fw-bold fs-5">Sprchový kout</p>
            <p class="card-text fw-bold fs-5">Umyvadlo</p>
            <p class="card-text fw-bold fs-5">TV</p>
            <p class="card-text fw-bold fs-5">Postele</p>
            <p class="card-text fw-bold fs-5">Skříň</p>
        </div>
        <div class="py-5 my-5 col-lg-4">
            <p class="card-text fw-bold fs-5"><?php echo $room['name']?></p>
            <p class="card-text fw-bold fs-5"><?php echo $room['name']?></p>
            <p class="card-text fw-bold fs-5"><?php echo $room['name']?></p>
            <p class="card-text fw-bold fs-5"><?php echo $room['name']?></p>
            <p class="card-text fw-bold fs-5"><?php echo $room['name']?></p>
            <p class="card-text fw-bold fs-5"><?php echo $room['name']?></p>
        </div>
    <div class="py-5 my-5 col-lg-4 col-md-2 text-start">
        <p class="card-text fs-5 text-start"><span class="fw-bold fs-5">WC</span><?php echo $room['name']?></p>
        <p class="card-text fs-5"><span class="fw-bold">Sprchový kout</span><?php echo $room['name']?></p>
        <p class="card-text fs-5"><span class="fw-bold">Umyvadlo</span> <?php echo $room['name']?></p>
        <p class="card-text fs-5"><span class="fw-bold">TV</span> <?php echo $room['name']?></p>
        <p class="card-text fs-5"><span class="fw-bold">Postele</span> <?php echo $room['name']?></p>
        <p class="card-text fs-5"><span class="fw-bold">Skříň</span> <?php echo $room['name']?></p>
    </div>-->

</div>



<?php
include_once "footer.php"
?>
</div>
</body>
</html>
