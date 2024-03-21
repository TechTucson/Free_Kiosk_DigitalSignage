# Version 1 Readme

This first iteration is strictly a manual process. Updating of Media while scripted still requires human interaction. 

## Puppy Linux Setup
Take a look at the instructions for installing PuppyLinux for our needs here: https://github.com/TechTucson/Free_Kiosk_DigitalSignage/blob/main/Machines/Kiosks/PuppyLinux.md

## Copy Code
- git clone
- Copy html to /home/spot/html
- Copy cronjobs to /home/spot/cronjobs
- Copy startup to /home/spot/autostart
- Copy /home/spot/autostart/firefox_local.sh to ~Startup/firefox_local.sh

  ## Add Your Personal Media
  - Sample Media Exists in /home/spot/html/imgs
  - Replace with media of your need
  ## Run Script to Prepare your Slidehow
  
  - cd /home/spot/cronjobs
    -chmod +x makeslideshow.sh
    -./makeslideshow.sh
    
## Reboot Puppy Linux 
- Make Sure to Hit **Save**
