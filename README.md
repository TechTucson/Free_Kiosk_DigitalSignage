# Free_Kiosk_DigitalSignage

This project is aimed at the small and even midsize locations that want to push out digital signage without the costs. At the essence of DigitaSignance, you have Media and you have a Player. This project will scaffold various subprojects with the intent to have a fully working centrally managed solution. Here are the current thoughts behind the sub-projects:

## Security 
- Don't Trust anything please practice due diligence and due care.
- Understand what deploying this means to your environment.
- Segregrate Digital Signance Networking Environments.
- Coordiante with the rest of the Tech Folks (Security ,SysAdmins, Network, Developers, ...etc)

## Acknowledgements
- [https://github.com/codepo8/](https://github.com/codepo8/slide-show)
  - This project started as a clone of this repo.  
- My Colleagues that listen to my... well, whatever I say I guess.
- My Wife (For dealing with me)
- My Kids (Also for dealing with me)
- Family/Friends
- Everyone Else

## Requirements

- Basic Linux Knowledge
  - We'll use mainly Debian-based systems. ( Debian, PuupyLinux, and Maybe Ubuntu)
- Media Player's
  - VirtualBox for Testing. ( This method is great for testing before you transfer to bare metal)
  - Physical Devices. While having a virtualized Media Player is possible. To Push this out to production you'll need a system capable of running our Linux requirements.
  - SoC (Raspberry Pi, RockPi), I have a couple of those lying around and they are running Linux. I will more than likely test these out. 
- Basic Scripting ( Bash/Python/PHP)
  - This does not go very deep.
- Media
  - Images and Videos
  - Links to External/Internal Websites.
- Networking
  - Within our Lab Environment we'll use two VirtualBox network cards per system, an "Internal Network" and a "NAT Network"
  - The Nat Network is so we can get out to the internet
    - We can get rid of this network and keep things internal. 
  - The Internal Network is so they can communicate with each other   
    - Set static IPs. Within our Lab, we'll be using:
      -  10.10.10.10 Sever
      -  10.10.10.20 Kiosk 1
      -  10.10.10.30 Kiosk 2
  -  While there are many different options for networking, this project will not go into detail and only scratches the surface when dealing with networking. 

## Sub Project 1 ( V1)
This should get you up and running with displaying Media to a Screen. You'll be able to choose whether you want to display Images, Videos, or an External/Internal Site. This project will work only on the Media Player portion. I don't envision any automation here with most of the processes being manual. A reboot should get you back to a working state. 

You can find V1 here: https://github.com/TechTucson/Free_Kiosk_DigitalSignage/tree/main/v1

## Sub Project 2 (V2)
Here we'll add a central server running on Apache and PHP8.2 that will be used to display our media. We'll direct the Media Player that we set up in our previous project to display content from the server instead of Locally. 
You can find V2 here: https://github.com/TechTucson/Free_Kiosk_DigitalSignage/tree/main/v2

## Sub Project 3 (V3)
We'll need some type of centralization/admin area to manage our players remotely. Here are the current actions and Information that I can see wanting to add

- Is the Player Up ( Pingable)
- Reboot Player
- Set Player to Initial Configuration
- Display Emergency Message ( i.e. Shelter in Place)

## Sub Project 4 (V4)
These are just thoughts:

- DNS For Controlling Media
- PowerPoint Presentations
- GoogleSlideshows
- 

