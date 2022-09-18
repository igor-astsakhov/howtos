- [HOME](../../../)
```
bluetoothctl
# power on
# agent on
# default-agent
# scan on
# pair 00:1F:20:76:5B:66
# trust 00:1F:20:76:5B:66
# connect 00:1F:20:76:5B:66
# info 00:1F:20:76:5B:66
```

```
wget https://www.dropbox.com/s/olqnqevf698lddo/fw-0a5c_216d.hcd
sudo cp fw-0a5c_216d.hcd /lib/firmware/
sudo cp fw-0a5c_216d.hcd /lib/firmware/brcm/BCM43142A0-0a5c_216d.hcd
sudo modprobe -r btusb
sudo modprobe btusb
```

[Link](http://askubuntu.com/questions/632336/bluetooth-broadcom-43142-isnt-working-on-ubuntu)


You need to install firmware.

Distribution of Broadcom firmware is not allowed by Broadcom license. So you need to get it yourself. It is a bit complex, but there is no other legal way.

Download Broadcom Windows 8 driver or FROM HERE.
Open this file by Archive Manager and find there bcbtums-win8x86-brcm.inf file.
Search this file for VID_0A5C&PID_21D7. These numbers are from your lsusb output

0a5c:21d7 Broadcom Corp. BCM43142 Bluetooth 4.0.

You will see some line ending with RAMUSB21D7

Search this file for RAMUSB21D7. You will find a section there like that:

[RAMUSB21D7.CopyList]
bcbtums.sys
btwampfl.sys
BCM43142A0_001.001.011.0122.0126.hex
That's what we are looking for. Name of the firmware file. BCM43142A0_001.001.011.0122.0126.hex

Now extract that firmware from the same cab file.

Then you need to convert this file from hex to hcd format.

Download the tool for that

```
git clone git://github.com/jessesung/hex2hcd.git
cd hex2hcd
make
```
You will get hex2hcd folder in your home directory.

Place the firmware file to your home folder and run

```
~/hex2hcd/hex2hcd ~/BCM43142A0_001.001.011.0122.0126.hex ~/BCM43142A0-0a5c-21d7.hcd
You see that 0a5c-21d7 is id of your adapter from lsusb.

Important: For kernel 4.2 you call this file as BCM.hcd instead.

~/hex2hcd/hex2hcd ~/BCM43142A0_001.001.011.0122.0126.hex ~/BCM.hcd
Now just copy BCM43142A0-0a5c-21d7.hcd to /lib/firmware/brcm directory by

sudo cp ~/BCM43142A0-0a5c-21d7.hcd /lib/firmware/brcm
For kernel 4.2

sudo cp ~/BCM.hcd /lib/firmware/brcm
Turn of your computer off and on again. Not just reboot!

Your adapter will get firmware and bluetooth should work.

All this looks complicated, but it is Broadcom lawyers to blame for that. Most of other vendors allow to re-distribute firmware under condition that it is done acompanied with the license.

That allows linux maintainers to include firmware in distributions.

But not in case of Broadcom. That's why it is not done an easy way.
```
