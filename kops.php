<?php

require_once('simplevk-master/autoload.php');
require './vendor/autoload.php';
require 'dab.php';


use DigitalStar\vk_api\vk_api;
use DigitalStar\vk_api\Message;
use DigitalStar\vk_api\VkApiException;

$vk_key = "5b2e2ccf7996cb1bb9e197d6bac403fe7aab0ed25b9d2b4a1b5c50a3d14ec52f5210b97741b9100a5e751";
$confirm = "0b22475f";
$v = "5.103";

$vk = vk_api::create($vk_key, $v)->setConfirm($confirm);
$my_msg = new Message($vk);
$data = json_decode(file_get_contents('php://input'));

$vk->sendOK();

$message = $data->object->message->text;
$cmd = mb_strtolower($message, 'utf-8');
$id = $data->object->message->from_id;
$users_get = R::findOne("users", "user_id = ?", [$id]);

if ($data->type == "message_new") {

    if (!$users_get) {
        $user_new = R::dispense("users");
            $user_new->user_id = $id;
            $user_new->score = 0;
            $user_new->games = 0;
            $user_new->ready = yes;
            $user_new->stat = NULL;
            R::store($user_new);
            exit();
    }

if ($cmd == "/dev create room") {
    $vk->sendButton($id, "Идёт создание комнат...", [[]]);
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
    $new_setting_up_two->room_id = 2;
    $new_setting_up_two->ready = yes;
    $new_setting_up_two->uiid = NULL;
    $new_setting_up_two->owner = NULL;
    R::store($new_setting_up_two);
    $new_setting_up_three = R::dispense("roomsettings");
    $new_setting_up_three->room_id = 3;
    $new_setting_up_three->ready = yes;
    $new_setting_up_three->uiid = NULL;
    $new_setting_up_three->owner = NULL;
    R::store($new_setting_up_three);
    $new_setting_up_four = R::dispense("roomsettings");
    $new_setting_up_four->room_id = 4;
    $new_setting_up_four->ready = yes;
    $new_setting_up_four->uiid = NULL;
    $new_setting_up_four->owner = NULL;
    R::store($new_setting_up_four);
    $new_setting_up_five = R::dispense("roomsettings");
    $new_setting_up_five->room_id = 5;
    $new_setting_up_five->ready = yes;
    $new_setting_up_five->uiid = NULL;
    $new_setting_up_five->owner = NULL;
    R::store($new_setting_up_five);
    $new_setting_up_six = R::dispense("roomsettings");
    $new_setting_up_six->room_id = 6;
    $new_setting_up_six->ready = yes;
    $new_setting_up_six->uiid = NULL;
    $new_setting_up_six->owner = NULL;
    R::store($new_setting_up_six);
    $new_setting_up_seven = R::dispense("roomsettings");
    $new_setting_up_seven->room_id = 7;
    $new_setting_up_seven->ready = yes;
    $new_setting_up_seven->uiid = NULL;
    $new_setting_up_seven->owner = NULL;
    R::store($new_setting_up_seven);
    $vk->sendMessage($id, "%fn% комнаты настроены!");
    exit();
}


//кнопки
$cgame = $vk->buttonText("&#11088; Создать игру", "green", ['command' => 'create_game']);
$crgame = $vk->buttonText("&#128273; Присоединиться к игре", "blue", ['command' => 'join_game']);
$profile = $vk->buttonText("&#128100; Профиль", "blue", ['command' => 'profile']);
$shop = $vk->buttonText("&#127978; Магазин", "blue", ['command' => 'shop']);
$return = $vk->buttonText("&#128281; Вернуться в меню", "red", ['command' => 'return']);

if ($cmd == "начать") {
    $vk->sendButton($id, "Вот список кнопок...", [[$cgame],[$crgame],[$profile, $shop]]);
    exit();
}

if (isset($data->object->message->payload)) {
        $payload = json_decode($data->object->message->payload, True);
    } else {
        $payload = null;
    }

    $payload = $payload['command'];
	
		
    if ($payload == "return") {
        $users_get->stat = "ready";
        R::store($users_get);
    }

if ($payload == "create_game") {
    if ($users_get->ready != yes) {
        $vk->sendMessage($id, "Нельзя выполнять эту команду во время игры!");
        exit();
    }
    $room = R::findOne("roomsettings", "ready = ?", ["yes"]);
    if (!$room) {
        $vk->sendMessage($id, "Все комнаты заняты!\nПопробуйте повторить позже...");
        exit();
    } else {
        $vk->sendMessage($id, "Комната создаётся...");
        $room->ready = "no";
        $room->owner = $id;
            $password = "";
    function gen_password($length = 6)
{				
	$chars = "abcdefghijklmnopqrstuvwxyz1234567890!-_";
	return substr(str_shuffle($chars), 0, $length);
}
 
    $gen = gen_password(10);
    $password = "$id-$gen";
        $room->uuid = $password;
        R::store($room);
        $info_done = R::findOne("roomsettings", "uuid = ?", [$password]);
        $room_idf = $info_done->room_id;
        if ($room_idf == 1) {
            $room_text = "roomone";
        }
        if ($room_idf == 2) {
            $room_text = "roomtwo";
        }
        if ($room_idf == 3) {
            $room_text = "roomthree";
        }
        if ($room_idf == 4) {
            $room_text = "roomfour";
        }
        if ($room_idf == 5) {
            $room_text = "roomfive";
        }
        if ($room_idf == 6) {
            $room_text = "roomsix";
        }
        if ($room_idf == 7) {
            $room_text = "roomseven";
        }
        $set_room = R::load($room_text, 1);
        $set_room->user_one = $id;
        $set_room->room_owner = $id;
        R::store($set_room);
        $vk->sendButton($id, "Комната создана!\n==\nНомер комнаты - $info_done->room_id\nГотовность: Ожидание игроков\nТокен для входа: $info_done->uuid\nМинимальное кол-во игроков: 3\nМаксимальное кол-во игроков: 6\n==\nАвтор: YnBrk_98", [[]]);
        exit();
    }
}
    if ($payload == "join_game"){
        if ($users_get->ready != yes) {
            $vk->sendMessage($id, "Нельзя выполнять эту команду во время игры!");
            exit();
        }
        if (!$users_get) {
            $user_new = R::dispense("users");
            $user_new->user_id = $id;
            $user_new->score = 0;
            $user_new->games = 0;
            $user_new->ready = yes;
            $user_new->stat = NULL;
            R::store($user_new);
        }
        $users_get->stat = "token";
        R::store($users_get);
        $vk->sendButton($id, "Введите токен, чтобы войти в игру:", [[$return]]);
        exit();
    }
	


    if ($data->type == "message_new") {
        if ($users_get->stat == "token") {
            $find_game = R::findOne("roomsettings", "uuid = ?", [$message]);
            if ($find_game) {
                if ($find_game->room_id == 1) {
                    $runa = "roomone";
                }
                if ($find_game->room_id == 2) {
                    $runa = "roomtwo";
                }
                if ($find_game->room_id == 3) {
                    $runa = "roomthree";
                }
                if ($find_game->room_id == 4) {
                    $runa = "roomfour";
                }
                if ($find_game->room_id == 5) {
                    $runa = "roomfive";
                }
                if ($find_game->room_id == 6) {
                    $runa = "roomsix";
                }
                if ($find_game->room_id == 7) {
                    $runa = "roomseven";
                }
                if ($find_game->ready == "game") {
                    $vk->sendMessage($id, "Игра уже началась...");
                    exit();
                }
                $room_set = R::findOne($runa, "room_id = ?", [$find_game->room_id]);

                //Закрытие дыры
                if ($room_set->user_one == $id || $room_set->user_two == $id || $room_set->user_three == $id || $room_set->user_four == $id || $room_set->user_five == $id || $room_set->user_six == $id) {
                    $vk->sendMessage($id, "ERROR!\nНельзя вступить в игру несколько раз!");
                    exit();
                }


                //Подключение комнаты
                if ($room_set) {
                    if ($room_set->user_one == "") {
                        $room_set->user_one = $id;
                    } else {
                        if ($room_set->user_two == "") {
                            $room_set->user_two = $id;
                        } else {
                            if ($room_set->user_three == "") {
                                $room_set->user_three = $id;
                            } else {
                                if ($room_set->user_four == "") {
                                    $room_set->user_four = $id;
                                } else {
                                    if ($room_set->user_five == "") {
                                        $room_set->user_five = $id;
                                    } else {
                                        if ($room_set->user_six == "") {
                                            $room_set->user_six = $id;
                                        } else {
                                            $vk->sendMessage($id, "Игра заполнена!");
                                            exit();
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                $lola = 0;
                if ($room_set->user_one != "") {
                    $lola = $lola + 1;
                }
                if ($room_set->user_two != "") {
                    $lola = $lola + 1;
                }
                if ($room_set->user_three != "") {
                    $lola = $lola + 1;
                }
                if ($room_set->user_four != "") {
                    $lola = $lola + 1;
                }
                if ($room_set->user_five != "") {
                    $lola = $lola + 1;
                }
                if ($room_set->user_six != "") {
                    $lola = $lola + 1;
                }
                $own = $find_game->owner;
                $own_name_i = $vk->request("users.get", ["user_ids" => $own]); 
                $own_fname = $own_name_i[0]['first_name'];
                $own_lname = $own_name_i[0]['last_name'];
                if ($find_game->owner == $id) {
                    $vin_close = $vk->buttonText("Выйти из игры", "red", ['command' => 'admin_close']);
                } else {
                    $vin_close = $vk->buttonText("Выйти из игры", "red", ['command' => 'close_game']);
                }
                $vk->sendButton($id, "Вы вошли в игру!\n==\nНомер комнаты: $find_game->room_id\nСоздатель: @id$own ($own_fname $own_lname)\nКол-во игроков: $lola", [[$vin_close]]);
                $users_get->stat = "wait";
                $users_get->ready = "no";
                R::store($users_get);
                R::store($room_set);
                R::store($find_game);
            } else {
                $vk->sendMessage($id, "Вы ввели несуществующий токен!");
            }
        }
    }

	
    if ($payload == "close_game") {
        if ($users_get->stat == "wait") {
            $find_game = R::findOne("roomsettings", "uuid = ?", [$message]);
            if ($find_game->room_id == 1) {
                $runa = "roomone";
            }
            if ($find_game->room_id == 2) {
                $runa = "roomtwo";
            }
            if ($find_game->room_id == 3) {
                $runa = "roomthree";
            }
            if ($find_game->room_id == 4) {
                $runa = "roomfour";
            }
            if ($find_game->room_id == 5) {
                $runa = "roomfive";
            }
            if ($find_game->room_id == 6) {
                $runa = "roomsix";
            }
            if ($find_game->room_id == 7) {
                $runa = "roomseven";
            }
            $gu_kill = R::findOne($runa, "room_id = ?", [$find_game->room_id]);
            if ($gu_kill) {
                if ($gu_kill->user_one == "") {
                    $gu_kill->user_one = NULL;
                } else {
                    if ($gu_kill->user_two == "") {
                        $gu_kill->user_two = NULL;
                    } else {
                        if ($gu_kill->user_three == "") {
                            $gu_kill->user_three = NULL;
                        } else {
                            if ($gu_kill->user_four == "") {
                                $gu_kill->user_four = NULL;
                            } else {
                                if ($gu_kill->user_five == "") {
                                    $gu_kill->user_five = NULL;
                                } else {
                                    if ($gu_kill->user_six == "") {
                                        $gu_kill->user_six = NULL;
                                    }
                                    $users_get->stat = "ready";
                                    $users_get->ready = "yes";
                                    R::store($gu_kill);
                                    R::store($users_get);
                                    }
                                }
                            }
                        }
                    }
                }
        } else {
            $vk->sendMessage($id, "Вы не можете сейчас использовать эту команду!");
        }
    }
    

    if ($payload == "admin_close") {
        $users_get->stat = "ready";
        $users_get->ready = "yes";
        $find_game = R::findOne("roomsettings", "uuid = ?", [$message]);
            if ($find_game->room_id == 1) {
                $runa = "roomone";
            }
            if ($find_game->room_id == 2) {
                $runa = "roomtwo";
            }
            if ($find_game->room_id == 3) {
                $runa = "roomthree";
            }
            if ($find_game->room_id == 4) {
                $runa = "roomfour";
            }
            if ($find_game->room_id == 5) {
                $runa = "roomfive";
            }
            if ($find_game->room_id == 6) {
                $runa = "roomsix";
            }
            if ($find_game->room_id == 7) {
                $runa = "roomseven";
            }
            $gu_kill = R::findOne($runa, "room_id = ?", [$find_game->room_id]);
            $find_game->uuid = NULL;
            $find_game->ready = yes;
            $gu_kill->user_one = NULL;
            $gu_kill->user_two = NULL;
            $gu_kill->user_three = NULL;
            $gu_kill->user_four = NULL;
            $gu_kill->user_five = NULL;
            $gu_kill->user_six = NULL;
            $gu_kill->room_user_one = NULL;
            $gu_kill->room_user_two = NULL;
            $gu_kill->room_user_three = NULL;
            $gu_kill->room_user_four = NULL;
            $gu_kill->room_user_five = NULL;
            $gu_kill->room_user_six = NULL;
            $gu_kill->item_user_one = NULL;
            $gu_kill->item_user_two = NULL;
            $gu_kill->item_user_three = NULL;
            $gu_kill->item_user_four = NULL;
            $gu_kill->item_user_five = NULL;
            $gu_kill->item_user_six = NULL;
            $gu_kill->room_owner = NULL;
            $gu_kill->seeker = NULL;
            R::store($find_game);
            R::store($gu_kill);
            R::store($users_get);
            $vk->sendButton($id, "Игра удалена!", [[]]);
            exit();
        }
}
exit(); 

