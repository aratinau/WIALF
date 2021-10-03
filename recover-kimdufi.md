mount /dev/sda2 /mnt/
mount /dev/sda3 /mnt/home
mount sysfs /sys -t sysfs
mount -o bind /dev /dev
mount -o bind /dev/pts /dev/pts
mount -o bind /tmp /tmp

chroot /mnt
