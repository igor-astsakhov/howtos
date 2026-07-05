### How to Network Route ###


Guide to explain some linux routing skills.

#### 1. Specific Port Forwarding (Optional)
If you specifically need to forward incoming traffic on a specific port (e.g., port 80) 
to a different internal IP address (e.g., 192.168.1.50), use the following rich rule:

```bash
sudo firewall-cmd --permanent --zone=external --add-rich-rule='rule family=ipv4 forward-port port=80 protocol=tcp to-addr=192.168.1.50'
```
