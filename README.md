# Raspberry-Pi-Alarm-Clock

##Architecture concept

![](http://i.imgur.com/SnVPmfZ.png)

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
