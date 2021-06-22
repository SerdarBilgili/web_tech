<h3>Giriş yapmak için hesap bilgilerinizi giriniz.</h3>

<form action="" method="POST">
        Kullanıcı Adı: <input type="text" name="user"> <br>
        Şifre: <input type="password" name="pass"> <br>
        <button type="submit">Giriş</button>
        <h4>Deneme kullanıcı adı "admin" şifresi "33"</h4>
</form>

<?php

$pass = 33;
$user = "admin";

if ($user == $_POST["user"] and $pass == $_POST["pass"]) {
    echo "Hoşgeldin $user";
} else {
    echo "Girdiğiniz bilgiler hatalı kontrol edip yeniden deneyin.";
}

?>