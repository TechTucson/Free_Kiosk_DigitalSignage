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
  - Create a FAT 32 300 MB Partition    
- Create an EXT4 Partition with the rest of the available space
- Apply
- Set Flag "Boot" On the FAT32 Partition
- Close GParted
#### Step 4 Install Puppy Linux Frugal
- Right Click on the Desktop
- Click Setup and Select Puppy Installer
- Select Frugalpup -Install/Manage Installs
- Click Puppy
  - Select This Puppy
  - Select the sda2/ext4 partition we created earlier
  - Create a folder and call it Puppy
  - Click OK
  - Click OK
#### Step 5 Install BootLoader
- Right Click on the Desktop
- Click Setup and Select Puppy Installer
- Select Frugalpup -Install/Manage Installs
- Click Boot
  - Select our sda1/fat32 partition we created
  - Click OK
  - Click OK
  - Select Our Partition once again sda1
  - Click OK
  - Click OK
  - Click OK
#### Step 6 Remove ISO and Reboot
- Shut Down your Machine
- Remove the Mounted ISO
- Start the Machine
#### Step 7 Install Firefox
- Right Click on the Desktop
- Click Setup and Select Puppy Installer
- Click the Second TAB "Install Applications"
- Click "Puppy Package Manager"
- Click Continue to Puppy Package Manager if you are prompted to install browsers.
- Search for firefox-esr
  - You'll see a lot of utilities but only one  application
  - Install firefox-esr_115.7.0-esr-1 (lastest available at time of writing this how-to)
- Test that Firefox works.
#### Step 8 Reboot and Save your Puppy Install
- PuppyLinux works like a live cd. When you reboot you are given the option to SAVE. If you do not save all of your changes for that session will not persist.
- Make sure you hit **SAVE**
#### Step 9 Verify
- Let's make sure that Firefox is installed.
- You are all done with this part. 
## Version Moving Foward
- These steps will be used for V2 Forward. If you want to stay at V1 please stop here.

### Install SSH Server In Puppy Linux
  - Install DropBear SSH Server From Puppy Package Manager Reboot and Save
    - Install a couple of things
      - dropbear_2020.81-5
      - dropbear-bin_2020.81-3+deb11u1
      - dropbear_2020.81-3+deb11u1
     
#### Run these commands to finish up the DropBear Install

    dropbearkey -t dss -f /etc/dropbear/dropbear_dss_host_key
    dropbearkey -t rsa -f /etc/dropbear/dropbear_rsa_host_key
    dropbear

### Add user to Kiosk
- sudo adduser kiosk
- set password
## Reboot and Save
- Make sure you can ssh to your localhost, or at least get the prompt to log in

# Networking 
## For the Internal Network We'll use 10.10.10.20 For Screen 1, 10.10.10.30 For Screen 2, and so on. The subnet will be 255.255.255.0.
## Gateway and DNS, leave empty.
How to Give Puppy Linux a Static IP:
-Right Click > Setup > Internet Connection Wizard
- Click Wireless/Wired Lan
- Click Network Wizard
- Select the Network Interface we are using
- Click Static IP
- No Need For Gateway or DNS
- Click Save
- Make sure you select to keep settings after the next Boot.
## Reboot and Save
For good measure reboot and save the system.


