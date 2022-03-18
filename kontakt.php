<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script rel="stylesheet" src="js/bootstrap.min.js"></script>
    <title>Ubytovani</title>
</head>
<body>
<?php
include_once "header.php";
//include_once "email_sql.php";
?>
<div class="container my-5">
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Kontakt</h1>
    </div>

    <form action="kontakt.php" method="POST" class="form">
        <div class="form-group">
            <label for="name" class="form-label">Jméno a příjmení</label>
            <input type="text" class="form-control" name="name" placeholder="Jméno příjmení" tabindex="1" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="email@email.cz" tabindex="2" required>
        </div>
        <div class="form-group">
            <label for="tel" class="form-label">Telefonní číslo</label>
            <input type="tel" class="form-control" name="tel" tabindex="3" required>
        </div>

        <div>
            <button type="submit" class="btn btn-warning my-3 px-5">Odeslat</button>
        </div>
</div>
    </form>

<?php
include_once "email_sql.php";
include_once "footer.php";
?>
</body>
</html>