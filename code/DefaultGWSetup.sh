echo "Routing Default Gateway to 192.168.7.1"
sudo /sbin/route add default gw 192.168.7.1
echo "Gateway set, Internet enabled."
echo "Starting up Wifi AP"
sudo /etc/init.d/hostapd restart
sudo /etc/init.d/isc-dhcp-server restart
echo "Complete, Wi-Fi Access Point enabled"
