
Verify the partitions available on the server: fdisk -l
Choose which device you wish to use (such as /dev/sda or /dev/sdb)
Run fdisk /dev/sdX (where X is the device you would like to add the partition to)
Type ‘n’ to create a new partition.
Specify where you would like the partition to end and start.  You can set the number of MB of the partition instead of the end cylinder.  For example:  +1000M
Type ‘p’ to view the partition, and type ‘w’ to save the partition
Run the command ‘partprobe’ to have the OS detect the new partition table.  If it still does not detect the partition table, you might need a reboot.
Format the partition by doing:  ‘mke2fs -j /dev/sdaX’ – where X is the number of the partition you have created.
Create a directory where you wish to mount the new drive, for example: /newpartition.  ‘mkdir -p /newpartition’
To mount, you can use the following command: ‘mount /dev/sdaX /newpartition’
If you would like the drive to be mounted automatically each time you boot, add the following to /etc/fstab: ‘/dev/sdaX /newpartition ext3 defaults 1 2’
