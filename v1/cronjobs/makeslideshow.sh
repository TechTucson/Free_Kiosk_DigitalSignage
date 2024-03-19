#!bin/bash
cd /home/spot/temp
ls /opt/DigitalSignage/imgs> file1.txt
awk '{ print "\""$0"\""}' file1.txt > file2.txt
sed '$!s/$/' file2.txt > file3.txt
paste -s -d "" file3.txt > file4.txt

sed -i '16d' /home/spot/ds/slideshow.html
media=$(cat /home/spot/temp/file.txt)
sed -i -e "16i$media\\" /home/spot/ds/slideshow.html
