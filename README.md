# ansible-helm

Задача написать сервис который будет записывать все ip-адреса которые заходили на страницу.
Использовал nginx+php. 


Для создание базы данных в k8s использовал готовый postgres helm чарт от Bitnami.
Переопределил переменный, добавил создание таблице, добавил storageclass.
На моем k8s кластере настроено динамическое создание pv, pvc ресурсов.

 
docker image: https://hub.docker.com/r/defosa/nginx-php


ansible:
ansible-playbook main.yml

hosts.ini - файл с переменными.

