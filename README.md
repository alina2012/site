Сайт интернет-магазина
Пользовательские сценарии:
	1. Регистрация
	2. Авторизация
	3. Сброс пароля
	4. Изменение контактных данных
	5. Выбор товаров, изменение количества, добавление в корзину
	6. Оформление заказа
	7. Просмотр статуса заказа

***
Руководство по установке:
Для запуска приложения на Ubuntu 18.04 необходимо установить Apache, MySQL и PHP с помощью команд:
$ sudo apt-get install apache2
$ sudo apt-get install mysql-server
$ sudo apt-get install php libapache2-mod-php
Исходный код необходимо закгружать в папку /var/www/html
Для работы с базой данных необходимо установить phpMyAdmin:
$ sudo apt-get install phpmyadmin 
(дамп базы данных находится в репозитории)

***
Для тестирования приложения используется phpunit. Устанавливается с помощью команд:
$ sudo apt-get install curl php-cli php-mbstring git unzip
$ sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer (для установки composer)
В папке проетка: $ composer require --dev phpunit/phpunit ^latest
Тестирование запускается командой: vendor/bin/phpunit

***
Документация автоматически генерируется и сохраняется в папку docs с помощью doxygen
Для установки: $ sudo apt-get install doxygen
Генерация документации запускается с помощью команды: doxygen Doxyfile