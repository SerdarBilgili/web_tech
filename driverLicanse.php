<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ehliyet Yaşı Hesaplama</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <?php
        if ($_POST) {
            $yas = $_POST["giris"];

            if ($yas >= 18) {
                echo "<h1 class='text-light bg-success'>Ehliyet alacak yaştasın. Yaşın: $yas</h1>";
            } else {
                $kalan_yil = 18 - $yas;
                echo "<h2 class='text-light bg-danger'>Malesef ehliyet alamazsın. Yaşın: $yas
                       Ehliyet alabilmek için $kalan_yil yıl sonra başvuru yapabilirsin.
                       </h2>";
            }
        }
        ?>

        <hr>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <label for="yas">Yaşınız</label>
                <input type="text" class="form-control" name="giris" required>
            </div>
            <button type="submit" name="kontrol" class="btn btn-outline-dark">Kontrol Et</button>
            <button type="submit" name="home" class="btn btn-outline-info" onclick="location.href='index.php'">Ana Sayfa</button>
        </form>
    </div>

</body>

</html>