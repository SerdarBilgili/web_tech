<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Single or Double</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<h3>For döngüsü ile sayının tek mi çift mi olduğunu bulma.</h3>

        <div class="container-fluid">
        <?php
            if ($_POST) {
            $sayi = $_POST["giris"];
            // $sayi= ["giris"];
	        if($sayi%2==0)
	        {
		    echo("Sayı Çift");
	        }
	        else
	        {
		    echo("Sayı Tek");
	        }
        }

        ?>

        <hr>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <label for="sayi">Sayı</label>
                <input type="text" class="form-control" name="giris" required>
            </div>
            <button type="submit" name="kontrol" class="btn btn-outline-dark">Kontrol Et</button>
            <button type="submit" name="home" class="btn btn-outline-info" onclick="location.href='index.php'">Ana Sayfa</button>
        </form>
    </div>


        </div>
        <br>
        <br>
        <br>
        <br>