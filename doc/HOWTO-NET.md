Downstairs:
    Linksys 10.0.2.17
    EA6700
    LAN MACB4:75:0E:52:13:D0
    WAN MACB4:75:0E:52:13:D0
    Wireless MACB4:75:0E:52:13:D2

    wl0 = chan 1 ; CW 20 MHz
        Frequency: 2412
        HWAddr [B4:75:0E:52:13:D2]

    wl1 - Chan 157 - 161 ; CW Wide 40MHz (HT40), Extention Channel: Lower
        Frequency: 5795
        HWAddr [B4:75:0E:52:13:E4]

Living Room:
    Nighthawk X6S Tri-Band Mesh Extender
    nighthawkx6s.aquaregiafx.com 10.0.2.72
    2.437 ghz chan 6
    local4.karinka.com 9C:C9:EB:14:BF:F6

    5Ghz - 1 (48)
    Channel:44 - 48(p)
    Frequency: 5230
    local5.karinka.com 9C:C9:EB:14:BF:F7

    5ghz - 2 (149)
    Channel: 149(p) + 153
    Frequency: 5755
    local5.karinka.com 9C:C9:EB:14:BF:F8

Garage: =======
    dLink - DEPRECATED!
    DIR-810L
    WAN: 6C:19:8F:ED:D4:35
    LAN:   6C:19:8F:ED:D4:34
    IP Address :  10.0.2.23

    2.4ghz 802.11 n/g/b [HWAddr 6C:19:8F:ED:D4:34]
    Channel 8 - 2,447 GHz
    Transmission Rate 54
    Auto 20/40 MHZ

    5 ghz 802.11 ac/n/a [HWAddr 6C:19:8F:ED:D4:36]
    Channel 157 - 5,785 GHz
    Auto 20/40 MHZ
    -------------------------------------------------

    Blackhawk - R6260
    Internet Port
    MAC Address9C:C9:EB:5C:0F:AD

    2.4ghz 802.11 n/g/b [HWAddr 6C:19:8F:ED:D4:34]
    Channel 11 - 2.462 GHz
    Transmission Rate 54
    20 MHz

    5 ghz 802.11 ac/n/a [HWAddr 6C:19:8F:ED:D4:36]
    Channel 149-153 - 5.755 GHz
    20/40 MHZ

    LAN     9C:C9:EB:5C:0F:AB
    10.0.2.70



Office:

(Channel 36-40)
0  R name="wlan1" mtu=1500 l2mtu=1600 mac-address=2C:C8:1B:90:33:B2 arp=enabled interface-type=QCA9984 mode=ap-bridge ssid="local5.karinka.com"
frequency=5190 band=5ghz-a/n/ac channel-width=20/40mhz-XX secondary-channel="" scan-list=default wireless-protocol=802.11 vlan-mode=no-tag vlan-id=1
wds-mode=disabled wds-default-bridge=none wds-ignore-ssid=no bridge-mode=enabled default-authentication=yes default-forwarding=yes
default-ap-tx-limit=0 default-client-tx-limit=0 hide-ssid=no security-profile=5ghz compression=no

(Channel 1)
1  R name="wlan2" mtu=1500 l2mtu=1600 mac-address=2C:C8:1B:1E:5A:87 arp=enabled interface-type=Atheros AR9300 mode=ap-bridge ssid="local4.karinka.com"
frequency=2412 band=2ghz-b/g/n channel-width=20mhz secondary-channel="" scan-list=default wireless-protocol=802.11 vlan-mode=no-tag vlan-id=1
wds-mode=disabled wds-default-bridge=none wds-ignore-ssid=no bridge-mode=enabled default-authentication=yes default-forwarding=yes
default-ap-tx-limit=0 default-client-tx-limit=0 hide-ssid=no security-profile=default compression=no





Meta for Living Room:
Wireless:
IP AddressDevice NameMAC AddressChannelSignal StrengthLink Rate
10.0.2.79qca-ioeboard74:40:BE:C2:59:416-60dbm72Mbps
10.0.2.76 blink-sync-module 00:03:7F:68:D4:36 6-48dbm 72Mbps
10.0.2.28<unknown>DE:6C:AC:1E:62:906-63dbm144Mbps
10.0.2.82<unknown>3E:23:08:5D:8E:C96-46dbm144Mbps
10.0.2.31ALINAS-MBP14:7D:DA:C5:C5:C148-66dbm390Mbps
10.0.2.75darkgreypadC4:2A:D0:67:F2:7D149-64dbm526Mbps
10.0.2.89<unknown>56:45:42:BC:1A:50149-70dbm526Mbp
Wired:
IP AddressDevice NameMAC Address
10.0.2.90ZBR434524400:07:4D:42:4D:9C
10.0.2.2<unknown>00:E0:4C:12:13:C6
-.-.-.-<unknown>2C:C8:1B:90:33:B0
10.0.2.7<unknown>5C:52:1E:64:0B:6D
10.0.2.23<unknown>6C:19:8F:ED:D4:34
10.0.2.62office74:40:BB:3E:7B:93
10.0.2.66Blackapple37A:15:42:44:0D:D5
10.0.2.78aerog12k80:45:DD:E5:31:ED
10.0.2.38<unknown>98:E7:43:7F:47:32
10.0.2.32LGwebOSTVA8:23:FE:3D:5F:FC
10.0.2.17<unknown>B4:75:0E:52:13:D0
-.-.-.-<unknown>B8:69:F4:3C:E2:A1
10.0.2.10ap1B8:69:F4:3C:E2:A2
10.0.2.3aerog12kD8:5E:D3:0E:7F:95
169.254.246.126<unknown>F0:46:3B:55:70:3E


 ~  i  howtos  nmcli dev wifi                                                                                                                       main 
IN-USE  BSSID              SSID                    MODE   CHAN  RATE        SIGNAL  BARS  SECURITY
        B8:69:F4:3C:E2:A5  local1.aquaregiafx.com  Infra  11    270 Mbit/s  97      ▂▄▆█  WPA2
        2C:C8:1B:1E:5A:87  local4.karinka.com      Infra  4     130 Mbit/s  87      ▂▄▆█  WPA2
        6C:19:8F:ED:D4:36  local5.karinka.com      Infra  157   135 Mbit/s  87      ▂▄▆█  WPA2
        6C:19:8F:ED:D4:34  local4.karinka.com      Infra  8     270 Mbit/s  85      ▂▄▆█  WPA2
*       2C:C8:1B:90:33:B2  local5.karinka.com      Infra  36    540 Mbit/s  84      ▂▄▆█  WPA2
        9C:C9:EB:14:BF:F6  local4.karinka.com      Infra  6     130 Mbit/s  82      ▂▄▆█  WPA2
        9C:C9:EB:14:BF:F7  local5.karinka.com      Infra  48    270 Mbit/s  70      ▂▄▆_  WPA2
        9C:C9:EB:14:BF:F8  local5.karinka.com      Infra  149   540 Mbit/s  70      ▂▄▆_  WPA2
        B4:75:0E:52:13:D2  local4.karinka.com      Infra  6     195 Mbit/s  64      ▂▄▆_  --
        B4:75:0E:52:13:E4  local5.karinka.com      Infra  52    405 Mbit/s  50      ▂▄__  WPA2
        98:DA:C4:7E:30:41  arris surfboard_EXT     Infra  11    130 Mbit/s  24      ▂___  WPA1 WPA2


