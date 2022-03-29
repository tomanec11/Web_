<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/png" href="image/favicon.jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script rel="stylesheet" src="js/bootstrap.min.js"></script>
    <title>Vila Taťána</title>
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
    <div class="row">
        <div class="col-lg-6 col-sm-6">
            <form action="kontakt.php" method="POST" class="form">
                <div class="form-group">
                    <label for="name" class="form-label">Příjmení</label>
                    <input type="text" class="form-control" name="Fname" placeholder="Jméno" tabindex="1" required>
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Příjmení</label>
                    <input type="text" class="form-control" name="Lname" placeholder="Příjmení" tabindex="2" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email_mess" placeholder="email@email.cz" tabindex="3" required>
                </div>
                <div class="form-group form">
                    <label for="mess" class="form-label">Zpráva</label>
                    <input type="text" class="form-control" name="mess" tabindex="4">
                </div>
                <div>
                    <button type="submit" class="btn btn-warning my-3 px-5">Odeslat</button>
                </div>
            </form>
        </div>

        <div class="col-lg-6 col-sm">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d163.25404030503174!2d17.75967658887245!3d49.10441235889933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47136f5f3d737d37%3A0xa743cce52e9f1512!2zVmlsYSBUYcWlw6FuYSx1Ynl0b3bDoW7DrSBMdWhhxI1vdmljZSAtIEppxZnDrSBNYXJ0aW5lYw!5e0!3m2!1scs!2scz!4v1647960598317!5m2!1scs!2scz" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>


<?php
include_once "email_sql.php";
include_once "footer.php";
?>
</body>
</html>