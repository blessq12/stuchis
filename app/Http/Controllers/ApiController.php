<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Classes\Telegram;

class ApiController extends Controller
{
    protected $telegram = null;
    public function __construct(){
        $api_token = '5927082192:AAHz4886SDaXLsAtRsnzNpoG6tfMpbNiMt8';
        $chat_id = '1055615093';
        $this->telegram = new Telegram($api_token, $chat_id);
    }
    public function carpets(){
        $carpets = Type::all();
        $response = [];
        foreach ($carpets as $carpet) {
            $carpet->getHeights;
            $response[] = $carpet;
        }
        return response()->json($response);
    }
    public function send(Request $request){
        $respone_text = '';

        $respone_text .= 'Имя клиента:' .$request->clientName . "\n";
        $respone_text .= 'Телефон:' .$request->clientPhone . "\n\n";

        if ($request->delivery){
            $respone_text .= "Доставка: да \n";
            if ($request->deliveryAddress){
                $respone_text .=  'Адрес доставки: '. $request->deliveryAddress . "\n" ;
            } else {
                $respone_text .=   'Адрес доставки не указан' ."\n";
            }
        }
        $respone_text .= '--- Ковер ---' . "\n\n";
        $respone_text .= 'Тип ковра: ' . $request->carpetType . "\n";
        $respone_text .= 'Высота ворса: ' . $request->carpetHeight . "\n\n";
        $respone_text .= "--- Доп. заргрязнения --- \n\n";
        $additional_str = '';
        foreach ($request->additional as $key => $value) {
            $additional_str .= $value . '/';
        }
        $respone_text .= $additional_str;

        $respone_text = urlencode($respone_text);

        return response()->json($this->telegram->sendMessage($respone_text));
    }
}
