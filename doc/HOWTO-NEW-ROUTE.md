### How to Network Route ###


Guide to explain some linux routing skills.

#### Step 1: Enable Kernel IP Forwarding


Open your terminal and check the current status:

```bash
sysctl net.ipv4.ip_forward
```

If it outputs 0, enable it temporarily for your current session:

```sudo sysctl -w net.ipv4.ip_forward=1```

To make this change permanent across reboots, edit or create a configuration file at /etc/sysctl.d/99-ipforward.conf:

```echo "net.ipv4.ip_forward = 1" | sudo tee -a /etc/sysctl.d/99-ipforward.conf```

#### 2. enable masq from ext to int to ext

Enable Masquerading (Required for NAT/routing traffic out to the internet):

```
# firewall-cmd --zone=external --add-masquerade --permanent
```

Allow traffic to forward between interfaces:By default, firewalld drops traffic moving between zones.
You can allow this by adding rich rules between the specific interfaces. 

For example, if routing traffic from an internal interface (eth1) to an external interface (eth0):

sudo firewall-cmd --permanent --zone=external --add-rich-rule='rule family=ipv4 in-interface=eth1 accept'

Reload the Firewall to apply your changes:

```
# firewall-cmd --reload
```

#### 1. Specific Port Forwarding (Optional)

If you specifically need to forward incoming traffic on a specific port (e.g., port 80) 
to a different internal IP address (e.g., 192.168.1.50), use the following rich rule:

```bash
sudo firewall-cmd --permanent --zone=external --add-rich-rule='rule family=ipv4 forward-port port=80 protocol=tcp to-addr=192.168.1.50'
```
