#!bin/bash
# Create Listing of Files into file1.txt
ls /home/spot/html/imgs > file1.txt
# Add ""
awk '{ print "\""$0"\""}' file1.txt > file2.txt
#Add Commas
sed '$!s/$/,/' file2.txt > file3.txt
#Add All on one line
paste -s -d "" file3.txt > file4.txt
#Delete line 16 to prepare for new Line
sed -i '16d' /home/spot/html/slideshow.html
#Add contents of file four to an attribute"
media=$(cat file4.txt)
#Add Line 16 with the attribute.  
sed -i -e "16i$media\\" /home/spot/ds/slideshow.html
