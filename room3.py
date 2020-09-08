import vk_api
import pymysql
import datetime
import time
import requests
from vk_api.bot_longpoll import VkBotLongPoll, VkBotEventType
from vk_api.utils import get_random_id

print ("started!")

con = pymysql.connect('s99533uj.beget.tech', 's99533uj_gugimo', 'ze&*LK0Q', 's99533uj_gugimo')

cur = con.cursor()
print ("Data Base is ready!")
print ("===============================================================")
print ("███╗░░██╗██╗░██████╗░██╗░░██╗████████╗██████╗░░█████╗░████████╗")
print ("████╗░██║██║██╔════╝░██║░░██║╚══██╔══╝██╔══██╗██╔══██╗╚══██╔══╝")
print ("██╔██╗██║██║██║░░██╗░███████║░░░██║░░░██████╦╝██║░░██║░░░██║░░░")
print ("██║╚████║██║██║░░╚██╗██╔══██║░░░██║░░░██╔══██╗██║░░██║░░░██║░░░")
print ("██║░╚███║██║╚██████╔╝██║░░██║░░░██║░░░██████╦╝╚█████╔╝░░░██║░░░")
print ("╚═╝░░╚══╝╚═╝░╚═════╝░╚═╝░░╚═╝░░░╚═╝░░░╚═════╝░░╚════╝░░░░╚═╝░░░")
print ("===============================================================")
print ("Name: NightBot")
print ("Version: 1,0 BETA")
print ("Author: TheYan")
print ("Develop with WINGAPOUR")
print ("---------------------------------------------------------------")
print ("Room_id: 3")
print ()
print ()
print ()

print ("I'm ready for get commands!")

def main():

    vk_session = vk_api.VkApi(token='5b2e2ccf7996cb1bb9e197d6bac403fe7aab0ed25b9d2b4a1b5c50a3d14ec52f5210b97741b9100a5e751')

    longpoll = VkBotLongPoll(vk_session, '196863106')
    vk = vk_session.get_api()
    print("NB >> Connected!")

    for event in longpoll.listen():

        if event.type == 

    for event in longpoll.listen():
        if __name__ == "__main__":
            main()