# Raspberry-Pi-Alarm-Clock

##Architecture concept

![](http://i.imgur.com/SnVPmfZ.png)

###Alarm checker
A php script that connects to the database and looks for alarms in the current minute

###Alarm Storage
A MySQL Database that stores every alarm

###Message Builder
A Java Commandline Application that build sentences for the Text-To-Speech via API (i.e. Weather)

###Management Interface
A mobile friendly UI for creating and deleting the alarm

##Installation

sudo apt-get update
sudo apt-get install php5
sudo apt-get install apache2

if the pi is connected via hdmi during the installation: 
sudo amixer cset numid=3 1

apt-get install mpg123

###PHP config
sudo visudo -f /etc/sudoers

then below this lines,

includedir /etc/sudoers.d user_name ALL=(ALL)

I added a following line,

www-data ALL=(ALL) NOPASSWD: ALL

Sources:
http://danfountain.com/2013/03/raspberry-pi-text-to-speech/
http://razzpisampler.oreilly.com/ch07.html
