#installing lnmp
echo "mysql-server-5.7 mysql-server/root_password password root" | sudo debconf-set-selections
echo "mysql-server-5.7 mysql-server/root_password_again password root" | sudo debconf-set-selections
sudo apt-get -y install mysql-server-5.7 mysql-client-5.7 nginx php7.0-fpm php7.0-curl php7.0-dev php7.0-gd php7.0-json php7.0-mysql php7.0-opcache php7.0-pspell php7.0-readline php7.0-sqlite3 php7.0-tidy php7.0-xml php7.0-xmlrpc php7.0-bz2 php7.0-intl php7.0-mbstring php7.0-mcrypt php7.0-soap php7.0-xsl php7.0-zip

#setting mysql security
/vagrant/provisioning/mysql_secure.sh
sudo service mysql restart

#copying nginx configs
sudo cp /vagrant/provisioning/configs/trello.local /etc/nginx/sites-available
sudo ln -s /etc/nginx/sites-available/trello.local /etc/nginx/sites-enabled/trello.local
sudo cp /vagrant/provisioning/configs/api.trello.local /etc/nginx/sites-available
sudo ln -s /etc/nginx/sites-available/api.trello.local /etc/nginx/sites-enabled/api.trello.local
sudo cp /vagrant/provisioning/configs/dev.trello.local /etc/nginx/sites-available
sudo ln -s /etc/nginx/sites-available/dev.trello.local /etc/nginx/sites-enabled/dev.trello.local
sudo mkdir /etc/nginx/includes
sudo cp -R /vagrant/provisioning/configs/nginx-php-fpm.conf /etc/nginx/includes/php-fpm.conf
sudo cp -R /vagrant/provisioning/configs/php-fpm.conf /etc/php/7.0/fpm/php-fpm.conf

sudo service php7.0-fpm reload
sudo service nginx reload