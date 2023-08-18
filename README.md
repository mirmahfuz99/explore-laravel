PUSHER App Keys 

app_id = "1654703"
key = "fd47984aada1dd97771b"
secret = "ec5e289e3ec2d1125992"
cluster = "ap2"

open xampp from terminal:
sudo /opt/lampp/manager-linux-x64.run

Stopping commend MySQL and apache2

sudo service mysql stop
sudo /etc/init.d/mysql stop

sudo /etc/init.d/apache2 stop


mysql -u root -p

nautilus /opt

//create db.sqlite file
touch database/db.sqlite