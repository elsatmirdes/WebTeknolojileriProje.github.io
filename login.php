<?php
  

    $mail = $_POST['email'];
    $password = $_POST['password'];

    $userMail = "b221210579@sakarya.edu.tr";
    $userPassword = "b221210579";

    if($mail == $userMail && $password == $userPassword){

        echo "<br>"."Hoşgeldiniz "."<b>"."b221210579"."</b>";
    }
    else{
        echo "Kullanıcı adı veya şifre hatalı !";
    }


    echo "<p> <a href='login.html'>&lt;GERİ DÖN&gt;</a></p> ";
?>