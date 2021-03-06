# Raspberry-Pi-Alarm-Clock

![Logo](https://raw.githubusercontent.com/JanWerder/Raspberry-Pi-Alarm-Clock/master/Management%20interface/images/logo.png)

##Architecture concept

![](http://i.imgur.com/SnVPmfZ.png)

###Alarm checker
A php script that connects to the database and looks for alarms in the current minute

###Alarm Storage
A MySQL Database that stores every alarm

###Message Builder
A Java Commandline Application that build sentences for the Text-To-Speech via API (i.e. Weather)
It uses forecast.io for its JSON API, so you will need an API Key.
Configure the parameters for the linex in the config.properties in the src folder

###Management Interface
A mobile friendly UI for creating and deleting the alarm

##Installation

sudo apt-get update

sudo apt-get install php5

sudo apt-get install apache2

if the pi is connected via hdmi during the installation: 
sudo amixer cset numid=3 1

sudo apt-get install mpg123

sudo apt-get install mysql-server mysql-client php5-mysql

sudo apt-get install libapache2-mod-auth-mysql php5-mysql phpmyadmin

sudo nano /etc/php5/apache2/php.ini

add: extension=mysql.so 

###PHP config
sudo nano /etc/sudoers

add: www-data ALL=(ALL) NOPASSWD: ALL

Sources:
http://danfountain.com/2013/03/raspberry-pi-text-to-speech/
http://razzpisampler.oreilly.com/ch07.html
