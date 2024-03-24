# Version 2 Readme
Sub-Project 2 (v2) of our project will focus on adding a central server running on Apache and PHP8.2 that will be used to display our media. We'll direct the Media Player that we set up in our previous project to display content from the server instead of Locally. 

### Debian 12 Server Setup
Take a look at the instructions for installing Debian Server for our needs here:https://github.com/TechTucson/Free_Kiosk_DigitalSignage/blob/main/Machines/Server/Debian_Server.md 

## Once you have a working Debian 12 Server with Apache and PHP Installed

### Clone this Repo
- git clone
- sudo cp -R v2/html/* /var/www/html/.
  
### Test the Setup
- Sample images exist in the following two folders **screen1** and **screen2** and **emergency**
- Browse to https://127.0.0.1/index.php



### Add your Media
- Add Your Media to /var/www/html/screen1
- Add Your Media to /var/www/html/screen2
- Add Your Media to /var/www/html/emergency

### Connect your Kiosks to your server
- You'll notice that you can start your slideshow depending on the directory by browsing to https://127.0.0.1/index.php?dir=DIRECTORY
  - https://127.0.0.1/index.php?dir=screen1
  - https://127.0.0.1/index.php?dir=screen2
  - https://127.0.0.1/index.php?dir=emergency
 
  ##


