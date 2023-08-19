<?php
namespace App\Classes;

class Telegram
{
    public function __construct($api_token = null, $chat_id = null){
        if ($api_token && $chat_id){
            $this->api_token = $api_token;
            $this->chat_id = $chat_id;
        }
    }
    public function sendMessage($text = null){
        if ($text){
            $link = "https://api.telegram.org/bot$this->api_token/sendMessage?chat_id=$this->chat_id&text=".$text;
            if (file_get_contents($link)){
                return 'Message successfully sended';
            } else {
                return 'Error on server side';
            }
        } else {
            return 'Your message is empty';
        }
    }
}
