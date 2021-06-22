<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



    <title>PHP Ödevler</title>

</head>

<body>
    <div class="container-fluid">
        <?php
        echo '<span style="color: #1687a7;"><h1><center>Ödev 1 - Değişken tanımlama</center></h1></span><br>';

        $adu = "Adnan Menderes Üniversitesi";
        $myo = "Aydın Meslek Yüksekokulu";
        $no = "196001003";
        $isim = "Serdar";
        $soyisim = "Bilgili";


        echo "$adu<br><br>";
        echo "$myo<br><br>";
        echo "$isim<br><br>";
        echo "$soyisim<br><br>";
        echo "$no<br><br>";


        ?>

        <br>
        <br>

        <?php
        echo '<span style="color: #1687a7;"><h1><center>Ödev 2 - Devamını oku</center></h1></span><br><br>';
        echo '<span style="color: #ff1f1f;text-align:left;"><h3>Örnek 1</h3></span><br>';

        $dize = "Adnan Menderes Üniversitesi 03.07.1992 tarihli 3837 sayılı Yükseköğretim Kurumları Teşkilatı Hakkında 41 Sayılı 
        Kanun Hükmünde Kararnamenin değiştirilerek kabulüne dair 2809 Sayılı Kanun ile 78 ve 190 Sayılı Kanun Hükmünde 
        Kararnamelerde Değişiklik Yapılması Hakkında Kanun uyarınca 1992 yılında kurulmuştur.";
        print mb_strimwidth($dize, 0, 200, "... ");
        print '<a target="_blank" href="https://www.adu.edu.tr/tr/kurulus-ve-tarihce">devamını oku</a>';

        ?>
        <br>
        <br>


        <h3 style="color: red;">Örnek 2</h3>
        <h3>Adnan Menderes Üniversitesi</h3>
        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Hakkımızda</button>
        <div id="demo" class="collapse">
            Adnan Menderes Üniversitesi 03.07.1992 tarihli 3837 sayılı Yükseköğretim Kurumları Teşkilatı Hakkında 41 Sayılı
            Kanun Hükmünde Kararnamenin değiştirilerek kabulüne dair 2809 Sayılı Kanun ile 78 ve 190 Sayılı Kanun Hükmünde
            Kararnamelerde Değişiklik Yapılması Hakkında Kanun uyarınca 1992 yılında kurulmuştur.
            <a target="_blank" href="https://www.adu.edu.tr/tr/kurulus-ve-tarihce" class="btn btn-success btn-xs" role="button"> Devamını oku</a>
        </div>


        <br>
        <br>


        <?php
        echo '<span style="color: #1687a7;"><h1><center>Ödev 3 - Diziler</center></h1></span><br>';

        echo '<span style="color: #ff1f1f;text-align:left;"><h3>Örnek 1</h3></span><br>';
        $içerik = array(
            1, 2, 3, 4, 5, 6
        );

        $içerik = array(
            "id" => 1,
            "ad" => "Serdar",
            "soyad" => "Bilgili"
        );

        echo "<pre>";
        print_r($içerik);
        echo "</pre>";


        echo '<span style="color: #ff1f1f;text-align:left;"><h3>Örnek 2</h3></span><br>';
        echo $içerik["ad"] . " " . $içerik["soyad"];
        echo "<br><br><br>";

        echo '<span style="color: #ff1f1f;text-align:left;"><h3>Örnek 3 - Foreach Döngüsü İle Dizin Yazdırma</h3></span><br>';

        foreach ($içerik as $key => $bilgi) {
            echo "$key => $bilgi <br>";
        }

        echo "<br><br><br>";
        echo '<span style="color: #ff1f1f;text-align:left;"><h3>Örnek 3.1 - Foreach Döngüsü İle Dizin Yazdırma</h3></span><br>';
        echo "<br>";
        foreach ($içerik as $key => $value) {
            echo "$key => $value <br>";
        }


        echo "<br><br><br>";
        echo '<span style="color: #ff1f1f;text-align:left;"><h3>Örnek 4</h3></span><br>';
        $isimler[] = "Serdar";
        $isimler[] = "Ali";
        $isimler[] = "Görkem";

        echo "<pre>";
        print_r($isimler);
        echo "</pre>";


        echo "<br><br><br>";
        echo '<span style="color: #ff1f1f;text-align:left;"><h3>Örnek 5 - Boş Dizi Oluşturup Sonradan Değer Ekleme</h3></span><br>';

        $isimler = array();
        $isimler["isim1"] = "Serdar";
        $isimler["isim2"] = "Ali";
        $isimler["isim3"] = "Görkem";
        $isimler[0] = "Serdar Bilgili";

        echo "<pre>";
        print_r($isimler);
        echo "</pre>";


        echo "<br><br><br>";
        echo '<span style="color: #ff1f1f;text-align:left;"><h3>Örnek 6 - Çok Boyutlu Diziler</h3></span><br>';

        $içerik = array(
            "id" => 1,
            "ad" => "Serdar",
            "soyad" => "Bilgili",
            array(1, 2, 3, 4)
        );

        echo "<pre>";
        print_r($içerik);
        echo "</pre>";

        echo "1. Boyuttaki Elaman" . " " . $içerik["ad"] . "<br>";
        echo "1. Boyuttaki Elaman" . " " . $içerik["soyad"] . "<br>";



        echo "<br><br><br>";
        echo '<span style="color: #ff1f1f;text-align:left;"><h3>Örnek 7</h3></span><br>';

        $içerik = array(
            "id" => 2,
            "ad" => "Hasan",
            "soyad" => "Bilgili",
            "dersler" => array(
                "ders1" => "Java",
                "ders2" => "C#",
                "ders3" => "PHP"
            )
        );

        echo "<pre>";
        print_r($içerik);
        echo "</pre>";

        echo "1. Boyuttaki Elaman" . " " . $içerik["ad"] . "<br>";
        echo "1. Boyuttaki Elaman" . " " . $içerik["soyad"] . "<br>";
        echo "2. Boyuttaki Elaman" . " " . $içerik["dersler"]["ders1"] . "<br>";

        ?>
        <br>
        <br>
        <br>

        <div>
            <h1 style="text-align: center; color: #1687a7;">Ödev 4 - IF ELSE</h1><br><br><br>

            Ehliyet almak için yaş hesaplamak için
            <a target="_self" href="driverLicanse.php" class="btn btn-danger btn-xs" role="button"> Tıklayınız</a>
        </div>
        <br>
        <br>
        <br>
        <br>

        <br>
        <br>
        <br>

        <div>
            <h1 style="text-align: center; color: #1687a7;">Ödev 5 - Login</h1><br><br><br>

            Kullanıcı hesabınıza giriş yapmak için
            <a target="_self" href="login.php" class="btn btn-danger btn-xs" role="button"> Tıklayınız</a>
        </div>
        <br>
        <br>
        <br>
        <br>

        <br>
        <br>
        <br>

        <div>
            <h1 style="text-align: center; color: #1687a7;">Ödev 6 - For</h1><br><br><br>
            <?php
            echo '<span style="color: #ff1f1f;text-align:left;"><h3>Örnek 1</h3></span><br>';
            ?>
            <h3>For döngüsü ile plaka kodu listeleme.</h3>
            <select name="plaka" id="">
                <option value="">Plaka Kodunuzu Seçiniz</option>

                <?php
                for ($plakakodu = 1; $plakakodu <= 81; $plakakodu ++ ) { 
                    echo "<option value = $plakakodu > $plakakodu </option>";
                }
                ?>
            </select>
        <?php
        echo "<br><br><br>";
        echo '<span style="color: #ff1f1f;text-align:left;"><h3>Örnek 2</h3></span><br>';
        ?>
        For döngüsü ile sayının tek mi çift mi olduğunu bulmak için
        <a target="_self" href="single_or_double.php" class="btn btn-danger btn-xs" role="button"> Tıklayınız</a>
        
        <br>
        <br>
        <br>

        <?php
        echo '<span style="color: #ff1f1f;text-align:left;"><h3>Örnek 3</h3></span><br>';
        ?>
        <h3>For döngüsü ile dizi yazdırma</h3>
        <?php
        $friend = array("Yusuf" , "Ali" , "Görkem");

        $kisiler = count($friend);

        for ($i = 0; $i < $kisiler; $i ++) { 
            echo "Dizinin $i . Elemanı: " . $friend[$i] . "<br>";
        }
        ?>

        <br>
        <br>
        <br>
        
        <?php
        echo '<span style="color: #ff1f1f;text-align:left;"><h3>Örnek 4</h3></span><br>';
        ?>
        <h3>Foreach döngüsü ile dizi yazdırma</h3>
        <?php
        foreach ($friend as $friendlist) {
            echo $friendlist . "<br>";
        }
        ?>


        <br>
        <br>
        <br>


    </div>

</body>

</html>