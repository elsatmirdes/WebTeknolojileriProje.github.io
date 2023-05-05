<?php

  if (isset($_POST['name'], $_POST['email'],$_POST['phone'],$_POST['message']  )
    && ($_POST['name']!='')
    && ($_POST['email']!='')
    && ($_POST['phone']!='')
    && ($_POST['message']!='')) {
    echo "Mesajınız alındı...";
    $isimSoyisim = $_POST['name'];
    $mail = $_POST['email'];
    $telefon = $_POST['phone'];
    $mesaj = $_POST['message'];

    echo "<br>"."İsim Soyisim: " ."<b>". $isimSoyisim . "</b>" . "<br>";
    echo "E-Mail Adresi: " . "<b>" . $mail . "</b>" . "<br>";
    echo "Telefon No: " ."<b>". $telefon ."</b>". "<br>";
    echo "Mesaj: " . "<b>" . $mesaj ."</b>". "<br>";
  }
  
  else{
    echo"Bilgilerinizi Kontrol Edip Tekrar Giriş Yapın.<br>
    Eksik Bilgi Girdiniz...";
  }

  echo "<p> <a href='iletisim.html'>&lt;GERİ DÖN&gt;</a></p> ";
?>