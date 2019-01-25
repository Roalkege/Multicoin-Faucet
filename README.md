
# Installation Guide for the Multicoin Faucet
**This is working on Ubuntu 16.04, Altcoin Wallet installation _required_**

Before to start using this Guide you must have a full synced and running Wallet.

**_Install apache Webserver and php_**

`sudo apt-get install apache2`

`sudo apt-get install php`
___

**_Install and configure MySQL_**

`sudo apt-get install mysql-server`

-> While installing you will be pormted to set a root passwort, use a strong password and write it down some where!

The first step to configure mysql for production mode is to run

`mysql_secure_installation`

Then, when asked, enter your root password. 

Further I would deny the first two questions (n) and accept the remaining questions (y)#


___

**Install and configure the Faucet**


`cd /var/www/html`

`git clone https://github.com/WlanWerner/Multicoin-Faucet-Script.git`

`cp -r Multicoin-Faucet-Script/* /var/www/html/`

-> Now you have all the faucet Files in the Webserver root.

___

**Create Database with User**

`mysql -u root -p`

-> enter root password

You are now logged in as mysql User

`CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'password';`

->Replace newuser and password between the quotes

`CREATE DATABASE faucet;`

`Grant All Privileges ON faucet.* TO 'newuser'@'localhost';`

-> Replace the newuser with the User you created in the step above

`USE faucet;`
`SOURCE /var/www/html/faucet.sql;`
-> to fill in the Database with all it's necessary rows

Quit MySQL with 

`\q`

___

**Last Steps**

`nano config.php`

Now you just have to fill in the config with all necessary informations. The values are explained behind the // signs.




	
