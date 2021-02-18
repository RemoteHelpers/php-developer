<?php
// работа с данным скриптом показана в видео на сайте http://rek9.ru/otpravka-zayavok-v-google-forms/
// формируем запись в таблицу google (изменить)
$url = "https://docs.google.com/forms/u/0/d/e/1FAIpQLSfZXDyGMixi8YdpaDO4z3pf6Od2_96pK-xQag1Xp96vG-Sesg/formResponse";
// сохраняем url, с которого была отправлена форма в переменную utm
// $utm = $_SERVER["HTTP_REFERER"];
// ссылка для переадресации (изменить)
$link = "/ty_page.html";

// массив данных (изменить entry, draft и fbzx)
$post_data = array (
 "entry.1259404181" => $_POST['name'],
 "entry.310511753" => $_POST['phone'],
 "entry.1761819024" => $_POST['email'],
 "draftResponse" => "[null,null,&quot;-9201025973705998906quot;]",
 "pageHistory" => "0",
 "fbzx" => "-9201025973705998906"
);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// указываем, что у нас POST запрос
curl_setopt($ch, CURLOPT_POST, 1);
// добавляем переменные
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
//заполняем таблицу google
$output = curl_exec($ch);
curl_close($ch);

//перенаправляем браузер пользователя на скачивание оффера по нашей ссылке
header('Location: '.$link);
?>