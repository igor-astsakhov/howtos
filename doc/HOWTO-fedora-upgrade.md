


## Fedora Upgrade Server

sudo dnf upgrade --refresh
sudo dnf system-upgrade download --releasever=44

sudo dnf system-upgrade reboot

cat /etc/fedora-release

sudo dnf autoremove


### Workstation to Server


sudo dnf groupinstall "Fedora Server"
sudo systemctl enable --now cockpit.socket
sudo dnf groupremove "Fedora Workstation"
sudo systemctl set-default multi-user.target
cat /etc/os-release

