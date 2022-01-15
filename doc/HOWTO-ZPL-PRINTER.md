lpinfo -v

lpadmin -p godex -E -v usb://GODEX/G500?serial=162203C6 -m raw -o usb-unidir-default=true

lpstat -v

lpr -P godex test.ezpl
