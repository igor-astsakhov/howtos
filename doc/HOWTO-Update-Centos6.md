## Update Centos6 with new php

yum install http://rpms.remirepo.net/enterprise/remi-release-6.rpm
yum-config-manager --disable remi-php70
yum-config-manager --enable remi-php73
yum remove oracle-instantclient12.1-sqlplus
yum install oracle-instantclient18.5-*

#### Link the oracle librarys for SQL64
ln -sv /usr/lib/oracle/18.5/client64/lib/* /usr/lib64/

Do not forget to update the cron files and bashrcs of dirs
/usr/lib/oracle/18.5/client64/lib
LD_LIBRARY_PATH


yum install php-composer php-common php-soap php-cli php-xml php-pdo php-mysqlnd php-fpm php-snmp php-pecl-ssh2 php-json php-oci8 php-imap php-gd php-runtime php-pecl-memcache php-pecl-zip php-mbstring php-pecl-stomp php-process



// FOR MONGO
installed pear from the website
installed pecl

$ pear channel-update pear.php.net
$ pecl channel-update pecl.php.net
$ pecl install mongodb-1.4.4

