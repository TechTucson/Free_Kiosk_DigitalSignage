# Debian 12 Setup 

- While we'll be using Virtual Box, in a production environment you can use what you have available. 
- This article will not go into the specifics of installing or using VirtualBox. 
  
#### Step 1 Download Debian 12
- At the moment of writing this article we are using Debian 12 The direct link to the ISO we used is here: https://cdimage.debian.org/debian-cd/current/amd64/iso-cd/debian-12.5.0-amd64-netinst.iso
- The latest or other Debian ISO's can be found here: https://www.debian.org/CD/netinst/
  
#### Step 2 Create a VirtualBox  
- We won't need many resources. As a test: I am using **1GB Memory**, **1 CPU**, and **8GB** Hard Drive (Though Only 2.5 GB Are Being Used)
- Start The Virtual Machine
- Create a User
  - Make sure to remember the password
- Make sure to remember the root password  
- The only step that we will vary from the defaults is when selecting the software to install:
- 

1. Install Debian Base
2. Install PHP
3. Install Apache
4. Enable and Start Apache
5. Copy Files
6. Create User For Updating Media

