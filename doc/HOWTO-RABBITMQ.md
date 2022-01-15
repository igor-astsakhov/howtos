# ss -tunelp | grep 15672
tcp   LISTEN  0       128                    0.0.0.0:15672        0.0.0.0:*      users:(("beam.smp",pid=9525,fd=71)) uid:111 ino:39934 sk:9 <->

sudo firewall-cmd --add-port={5672,15672}/tcp --permanent
sudo firewall-cmd --reload

sudo rabbitmqctl add_user admin StrongPassword
sudo rabbitmqctl set_user_tags admin administrator
RabbitMQ User Management Commands
Delete User:

rabbitmqctl delete_user user
Change User Password:

rabbitmqctl change_password user strongpassword
Create new Virtualhost:

rabbitmqctl add_vhost /my_vhost
List available Virtualhosts:

rabbitmqctl list_vhosts
Delete a virtualhost:

rabbitmqctl delete_vhost /myvhost
Grant user permissions for vhost:

rabbitmqctl set_permissions -p /myvhost user ".*" ".*" ".*"
List vhost permissions:

rabbitmqctl list_permissions -p /myvhost
To list user permissions:

rabbitmqctl list_user_permissions user
Delete user permissions:

rabbitmqctl clear_permissions -p /myvhost user
