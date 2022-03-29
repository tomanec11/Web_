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
$connection = mysqli_connect("localhost", "root", "", "user_contact");
$sql = "SELECT * FROM rooms";

$result = mysqli_query($connection, $sql);
?>

<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Rezervace</h1>
</div>

<div class="bg-warning bg-opacity-75">
    <div class="container">
        <div class="album py-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php
                    while ($row = $result->fetch_array()) {
                        ?>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="<?php echo $row['photo'] ?>" alt="1">
                                <div class="card-body">
                                    <p class="card-text"><?php echo $row['content']?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a class="btn bg-warning" href="room_info.php?id=<?php echo $row['id'] ?>" role="button">Rezervovat</a>
                                        <p><?php echo $row['price']?> ,- / Noc</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once "footer.php"
?>
</div>
</body>
</html>