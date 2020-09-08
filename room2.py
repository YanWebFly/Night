import vk_api
from vk_api.bot_longpoll import VkBotLongPoll, VkBotEventType
from vk_api.utils import get_random_id

print ("started!")
def main():


    vk_session = vk_api.VkApi(token='5b2e2ccf7996cb1bb9e197d6bac403fe7aab0ed25b9d2b4a1b5c50a3d14ec52f5210b97741b9100a5e751')

    longpoll = VkBotLongPoll(vk_session, '196863106')
    vk = vk_session.get_api()

    for event in longpoll.listen():

        if event.type == VkBotEventType.MESSAGE_NEW:
            text = event.obj.text
            id_user = event.obj.from_id
            if text == "/dev python3 test":
                vk.messages.send(
                    user_id=event.obj.from_id,
                    random_id=get_random_id(),
                    message=("Python3.0 Was started! Compilator ready for get...", event.obj.text)
                )
                print("User ", id_user," text to cmd for test python")
            if text == "/dev compil room":
                vk.messages.send(
                    user_id=event.obj.from_id,
                    random_id=get_random_id(),
                    message=("Compil room = Room 2", event.obj.text)
                )
                print("User ", id_user, " text to cmd for test room")
            if text == "/dev room_one ready":
                if id_user == "444875208":
                    i = 0
                    while i == 1:
                        vk.messages.send(
                            user_id=event.obj.from_id,
                            random_id=get_random_id(),
                            message=("ok!", event.obj.text)
                        )
                        i = 1
                else:
                    vk.messages.send(
                        user_id=event.obj.from_id,
                        random_id=get_random_id(),
                        message=("it can only developer!", event.obj.text)
                    )

        if __name__ == "__main__":
            main()

