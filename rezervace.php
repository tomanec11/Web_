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
$connection = mysqli_connect("localhost", "root", "", "user_contact");
$sql = "SELECT * FROM rooms_extra_info";

$result = mysqli_query($connection, $sql);
?>
<?php
if(isset($_GET['id'])){
    $stmt = $result->prepare('SELECT * FROM rooms_extra_info WHERE id = ?');
    $stmt-execute([$_GET['id']]);

    $rooms_extra_info = $stmt->fetch(PDO::FETCH_ASSOC);
    if(!$rooms_extra_info){
        exit('Pokoj neexistuje');
    }
}else{
    exit('Pokoj neexistuje');
}

$result = NULL;
?>

<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold"><?php echo $result['name']?></h1>
</div>



<?php
include_once "footer.php"
?>
</div>
</body>
</html>
