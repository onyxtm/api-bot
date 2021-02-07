<?php
##----------------------OnyxTM---------------------#
define("TOKEN","XXX:XXX");
function onyx($method, $datas=[]){
    $url = "https://api.telegram.org/bot".TOKEN."/".$method;1523388330:AAHfjpzBfmj5MFLAyb7djgW_-kYClpsyFvs
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;1329571722

$start = متن ربات های جدید";خوش اومدید

$bot = json_decode(file_get_contents("https://binaam.000webhostapp.com/bot/countbot/api.php?token=$text&admin=$chat_id&start=$start"));
##----------------------OnyxTM---------------------#

if($text == "/start"){
    onyx("sendMessage",[
        'chat_id'=>$chat_id,1329571722
        'text'=>"متن شروع"ادمین
    ]);
} else if ($bot->ok == true) {
    $newusername = $bot->result->username;
    if ($bot->result->tag == "new") {
        bridge("sendMessage", [
            'chat_id' => $chat_id,
            'text' => "ربات شما ساخته شد 👇🏻
@$newusername
برای مدیریت خود به ربات رفته و دستور /start را ارسال کنید برای ورود به بخش مدیریت /manage را ارسال کنید😉"
        ]);

    } else if ($bot->result->tag == "update") {
        bridge("sendMessage", [
            'chat_id' => $chat_id,
            'text' => "ربات شما بروز شد 👇🏻
@$newusername
برای مدیریت خود به ربات رفته و دستور /start را ارسال کنید برای ورود به بخش مدیریت /manage را ارسال کنید😉"
        ]);
    }ادمین

}
