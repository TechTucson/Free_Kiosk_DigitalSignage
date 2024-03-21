# Puppy Linux Setup 

- While we'll be using Virtual Box the intent here is to use readily available hardware to create these kiosks.
- This article will not go into the specifics of installing or using VirtualBox. 
  
#### Step 1 Download Puppy Linux
- At the moment of writing this article we are using PuppyLinux JammyPup32( Ubuntu+Debian Base) The direct link to the ISO we used is here: https://sourceforge.net/projects/pb-gh-releases/files/JammyPup32_release/JammyPup32-22.04-240309.iso/download
- The latest or other PuppyLinux ISO's can be found here: https://forum.puppylinux.com/puppy-linux-collection
#### Step 2 Create a VirtualBox  
- We won't need many resources. As a test: I am using **1GB Memory**, **1 CPU**, and **8GB** Hard Drive (Though Only 1.5 GB Are Being Used)
- ![alt text](https://github.com/TechTucson/Free_Kiosk_DigitalSignage/blob/main/Machines/Kiosks/images/puppy/VirtualBox.PNG?raw=true)
- ![alt text](https://github.com/TechTucson/Free_Kiosk_DigitalSignage/blob/main/Machines/Kiosks/images/puppy/VirtualBox2.PNG?raw=true)
- ![alt text](https://github.com/TechTucson/Free_Kiosk_DigitalSignage/blob/main/Machines/Kiosks/images/puppy/VirtualBox2.PNG?raw=true)
- Start The Virtual Machine

#### Step 3 Create A Fat 32 Partition ( To Install Puppy Linux)
- Open a Command Prompt
- Open Gparted
- Select Your Disk
- Create a Partition Table
- Format it to Fat 32
- ![alt text](https://github.com/TechTucson/Free_Kiosk_DigitalSignage/blob/main/Machines/Kiosks/images/puppy/Partition.PNG?raw=true)
- ![alt text](https://github.com/TechTucson/Free_Kiosk_DigitalSignage/blob/main/Machines/Kiosks/images/puppy/Partition2.PNG?raw=true)
- ![alt text](https://github.com/TechTucson/Free_Kiosk_DigitalSignage/blob/main/Machines/Kiosks/images/puppy/Partition3.PNG?raw=true)
- Close GParted
#### Step 4 Install Puppy Linux Frugal
- Right Click on the Desktop
- Click Setup and Select Puppy Installer
- Select Frugalpup -Install/Manage Installs
- Click Puppy
  - Select This Puppy
  - Select the sda1/fat32 partition we created earlier
  - Create a folder and call it Puppy
  - Click OK
  - Click OK
- 
#### Step 5 Install BootLoader
- Right Click on the Desktop
- Click Setup and Select Puppy Installer
- Select Frugalpup -Install/Manage Installs
- Click Boot
