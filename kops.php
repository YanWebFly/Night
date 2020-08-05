<?php

require_once('simplevk-master/autoload.php');
require './vendor/autoload.php';
require 'dab.php';


use DigitalStar\vk_api\vk_api;
use DigitalStar\vk_api\Message;
use DigitalStar\vk_api\VkApiException;

$vk_key = "5b2e2ccf7996cb1bb9e197d6bac403fe7aab0ed25b9d2b4a1b5c50a3d14ec52f5210b97741b9100a5e751";
$confirm = "770869b8";
$v = "5.103";

$vk = vk_api::create($vk_key, $v)->setConfirm($confirm);
$my_msg = new Message($vk);
$data = json_decode(file_get_contents('php://input'));

$vk->sendOK();

$message = $data->object->message->text;
$cmd = mb_strtolower($message, 'utf-8');
$id = $data->object->message->from_id;

if ($cmd == "/dev create room") {
    $vk->sendMessage($id, "Идёт создание комнат...");
    $new_room_one = R::dispense('roomone');
    $new_room_one->room_id = "1";
    $new_room_one->user_one = NULL;
    $new_room_one->user_two = NULL;
    $new_room_one->user_three = NULL;
    $new_room_one->user_four = NULL;
    $new_room_one->user_five = NULL;
    $new_room_one->user_six = NULL;
    $new_room_one->room_user_one = NULL;
    $new_room_one->room_user_two = NULL;
    $new_room_one->room_user_three = NULL;
    $new_room_one->room_user_four = NULL;
    $new_room_one->room_user_five = NULL;
    $new_room_one->room_user_six = NULL;
    $new_room_one->item_user_one = NULL;
    $new_room_one->item_user_two = NULL;
    $new_room_one->item_user_three = NULL;
    $new_room_one->item_user_four = NULL;
    $new_room_one->item_user_five = NULL;
    $new_room_one->item_user_six = NULL;
    $new_room_one->room_owner = NULL;
    $new_room_one->seeker = NULL;
    R::store($new_room_one);
    $new_room_two = R::dispense('roomtwo');
    $new_room_two->room_id = 2;
    $new_room_two->user_one = NULL;
    $new_room_two->user_two = NULL;
    $new_room_two->user_three = NULL;
    $new_room_two->user_four = NULL;
    $new_room_two->user_five = NULL;
    $new_room_two->user_six = NULL;
    $new_room_two->room_user_one = NULL;
    $new_room_two->room_user_two = NULL;
    $new_room_two->room_user_three = NULL;
    $new_room_two->room_user_four = NULL;
    $new_room_two->room_user_five = NULL;
    $new_room_two->room_user_six = NULL;
    $new_room_two->item_user_one = NULL;
    $new_room_two->item_user_two = NULL;
    $new_room_two->item_user_three = NULL;
    $new_room_two->item_user_four = NULL;
    $new_room_two->item_user_five = NULL;
    $new_room_two->item_user_six = NULL;
    $new_room_two->room_owner = NULL;
    $new_room_two->seeker = NULL;
    R::store($new_room_two);
    $new_room_three = R::dispense('roomthree');
    $new_room_three->room_id = 3;
    $new_room_three->user_one = NULL;
    $new_room_three->user_two = NULL;
    $new_room_three->user_three = NULL;
    $new_room_three->user_four = NULL;
    $new_room_three->user_five = NULL;
    $new_room_three->user_six = NULL;
    $new_room_three->room_user_one = NULL;
    $new_room_three->room_user_two = NULL;
    $new_room_three->room_user_three = NULL;
    $new_room_three->room_user_four = NULL;
    $new_room_three->room_user_five = NULL;
    $new_room_three->room_user_six = NULL;
    $new_room_three->item_user_one = NULL;
    $new_room_three->item_user_two = NULL;
    $new_room_three->item_user_three = NULL;
    $new_room_three->item_user_four = NULL;
    $new_room_three->item_user_five = NULL;
    $new_room_three->item_user_six = NULL;
    $new_room_three->room_owner = NULL;
    $new_room_three->seeker = NULL;
    R::store($new_room_three);
    $new_room_four = R::dispense('roomfour');
    $new_room_four->room_id = 4;
    $new_room_four->user_one = NULL;
    $new_room_four->user_two = NULL;
    $new_room_four->user_three = NULL;
    $new_room_four->user_four = NULL;
    $new_room_four->user_five = NULL;
    $new_room_four->user_six = NULL;
    $new_room_four->room_user_one = NULL;
    $new_room_four->room_user_two = NULL;
    $new_room_four->room_user_three = NULL;
    $new_room_four->room_user_four = NULL;
    $new_room_four->room_user_five = NULL;
    $new_room_four->room_user_six = NULL;
    $new_room_four->item_user_one = NULL;
    $new_room_four->item_user_two = NULL;
    $new_room_four->item_user_three = NULL;
    $new_room_four->item_user_four = NULL;
    $new_room_four->item_user_five = NULL;
    $new_room_four->item_user_six = NULL;
    $new_room_four->room_owner = NULL;
    $new_room_four->seeker = NULL;
    R::store($new_room_four);
    $new_room_five = R::dispense('roomfive');
    $new_room_five->room_id = 5;
    $new_room_five->user_one = NULL;
    $new_room_five->user_two = NULL;
    $new_room_five->user_three = NULL;
    $new_room_five->user_four = NULL;
    $new_room_five->user_five = NULL;
    $new_room_five->user_six = NULL;
    $new_room_five->room_user_one = NULL;
    $new_room_five->room_user_two = NULL;
    $new_room_five->room_user_three = NULL;
    $new_room_five->room_user_four = NULL;
    $new_room_five->room_user_five = NULL;
    $new_room_five->room_user_six = NULL;
    $new_room_five->item_user_one = NULL;
    $new_room_five->item_user_two = NULL;
    $new_room_five->item_user_three = NULL;
    $new_room_five->item_user_four = NULL;
    $new_room_five->item_user_five = NULL;
    $new_room_five->item_user_six = NULL;
    $new_room_five->room_owner = NULL;
    $new_room_five->seeker = NULL;
    R::store($new_room_five);
    $new_room_six = R::dispense('roomsix');
    $new_room_six->room_id = 6;
    $new_room_six->user_one = NULL;
    $new_room_six->user_two = NULL;
    $new_room_six->user_three = NULL;
    $new_room_six->user_four = NULL;
    $new_room_six->user_five = NULL;
    $new_room_six->user_six = NULL;
    $new_room_six->room_user_one = NULL;
    $new_room_six->room_user_two = NULL;
    $new_room_six->room_user_three = NULL;
    $new_room_six->room_user_four = NULL;
    $new_room_six->room_user_five = NULL;
    $new_room_six->room_user_six = NULL;
    $new_room_six->item_user_one = NULL;
    $new_room_six->item_user_two = NULL;
    $new_room_six->item_user_three = NULL;
    $new_room_six->item_user_four = NULL;
    $new_room_six->item_user_five = NULL;
    $new_room_six->item_user_six = NULL;
    $new_room_six->room_owner = NULL;
    $new_room_six->seeker = NULL;
    R::store($new_room_six);
    $new_room_seven = R::dispense('roomseven');
    $new_room_seven->room_id = 6;
    $new_room_seven->user_one = NULL;
    $new_room_seven->user_two = NULL;
    $new_room_seven->user_three = NULL;
    $new_room_seven->user_four = NULL;
    $new_room_seven->user_five = NULL;
    $new_room_seven->user_six = NULL;
    $new_room_seven->room_user_one = NULL;
    $new_room_seven->room_user_two = NULL;
    $new_room_seven->room_user_three = NULL;
    $new_room_seven->room_user_four = NULL;
    $new_room_seven->room_user_five = NULL;
    $new_room_seven->room_user_six = NULL;
    $new_room_seven->item_user_one = NULL;
    $new_room_seven->item_user_two = NULL;
    $new_room_seven->item_user_three = NULL;
    $new_room_seven->item_user_four = NULL;
    $new_room_seven->item_user_five = NULL;
    $new_room_seven->item_user_six = NULL;
    $new_room_seven->room_owner = NULL;
    $new_room_seven->seeker = NULL;
    R::store($new_room_seven);
    $vk->sendMessage($id, "%fn% комнаты созданы!");
    exit();
}

//Настройка
if ($cmd == "/dev setting up") {
    $new_setting_up_one = R::dispense("roomsettings");
    $new_setting_up_one->room_id = 1;
    $new_setting_up_one->ready = yes;
    $new_setting_up_one->uiid = NULL;
    $new_setting_up_one->owner = NULL;
    R::store($new_setting_up_one);
    $new_setting_up_two = R::dispense("roomsettings");
    $new_setting_up_two->room_id = 1;
    $new_setting_up_two->ready = yes;
    $new_setting_up_two->uiid = NULL;
    $new_setting_up_two->owner = NULL;
    R::store($new_setting_up_two);
}

//кнопки
$cgame = $vk->buttonText("&#11088; Создать игру", "green", ['command' => 'create_game']);
$crgame = $vk->buttonText("&#128273; Присоединиться к игре", "blue", ['command' => 'join_game']);
$profile = $vk->buttonText("&#128100; Профиль", "blue", ['command' => 'profile']);
$shop = $vk->buttonText("&#127978; Магазин", "blue", ['command' => 'shop']);
$return = $vk->buttonText("&#128281; Вернуться в меню", "red", ['command' => 'return']);

if (isset($data->object->payload)) {
        $payload = json_decode($data->object->payload, True);
    } else {
        $payload = null;
    }

    $payload = $payload['command'];

/*if ($payload == "create_game) {
    if ()
}*/
    

