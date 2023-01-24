# ansible-helm

Задача написать сервис записывающий все ip-адреса в таблицу базы данных,которые заходили на страницу.
Использовал nginx+php. 


Для создание базы данных в k8s использовал готовый postgres helm чарт от Bitnami.
Переопределил переменный, добавил создание таблице, добавил storageclass.
На моем k8s кластере настроено динамическое создание pv, pvc ресурсов.

 
docker image: https://hub.docker.com/r/defosa/nginx-php


ansible:
ansible-playbook main.yml

hosts.ini - файл с переменными.

![image](https://user-images.githubusercontent.com/85503821/214376183-d46d7cb7-ae60-4572-b739-6ab82f2883c0.png)
