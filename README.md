# Autenticazione
[[!TOC]]

## Impostazioni
### Vagrant
* Progetto di partenza: moodle-control-repo-oracle
* Share: autenticazione /var/www/html/autenticazione (puo' variare) es:
``` 
...
    config.vm.synced_folder "/home/matteo/Scrivania/PhpProjects/Moodle17Index","/var/www/html/"
    config.vm.synced_folder "$PHPP", "/var/www/html/locale/"
...

```
* Virtual host da aggiungere: si puo' partire dal 000-default.conf e configurare 
    la documentroot perché punti alla cartella di share. La porta è comodo 
    sia la 80. es */etc/apache2/sites-available/locale.conf*:
```
<VirtualHost *:80>
           # The ServerName directive sets the request scheme, hostname and port that
           # the server uses to identify itself. This is used when creating
           # redirection URLs. In the context of virtual hosts, the ServerName
           # specifies what hostname must appear in the request's Host: header to
           # match this virtual host. For the default virtual host (this file) this
           # value is not decisive as it is used as a last resort host regardless.
           # However, you must set it for any further virtual host explicitly.
           #ServerName www.example.com
   
           ServerAdmin webmaster@localhost
           DocumentRoot /var/www/html/locale
   
           # Available loglevels: trace8, ..., trace1, debug, info, notice, warn,
           # error, crit, alert, emerg.
           # It is also possible to configure the loglevel for particular
           # modules, e.g.
           #LogLevel info ssl:warn
   
           ErrorLog ${APACHE_LOG_DIR}/error.log
           CustomLog ${APACHE_LOG_DIR}/access.log combined
   
           # For most configuration files from conf-available/, which are
           # enabled or disabled at a global level, it is possible to
           # include a line for only one particular virtual host. For example the
           # following line enables the CGI configuration for this host only
           # after it has been globally disabled with "a2disconf".
           #Include conf-available/serve-cgi-bin.conf
   </VirtualHost>

```    
    

* Pacchetti da aggiungere: phpunit.phar, xdebug.
    * download and put phpunit.phar on */usr/local/lib/phpunitlib/*:
    ```
    sudo mkdir /usr/local/lib/phpunitlib
    cd /usr/local/lib/phpunitlib
    sudo wget -O phpunit https://phar.phpunit.de/phpunit-6.phar
    sudo chmod +x phpunit
    sudo ln -s /usr/local/lib/phpunitlib/phpunit /usr/bin/phpunit
   
    ```
