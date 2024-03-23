# Free_Kiosk_DigitalSignage

This project is aimed at the small and even midsize locations that want to push out digital signage without the costs. At the essence of DigitaSignance, you have Media and you have a Player. This project will scaffold various subprojects with an intent to have a fully working centrally managed solution. Here are the current thoughts behind the sub-projects:

## Requirements

- Basic Linux Knowledge
  - We'll use mainly Debian-based systems. ( Debian, PuupyLinux, and Maybe Ubuntu)
- Media Player's
  - VirtualBox for Testing. ( This method is great for testing before you transfer to bare metal)
  - Physical Devices. While having a virtualized Media Player is possible. To Push this out to production you'll need a system capable of running our Linux requirements.
  - SoC (Raspberry Pi, RockPi), I have a couple of those lying around and they are running Linux. I will more than likely test these out. 
- Basic Scripting ( Bash/Python/PHP)
  - This does not go very deep.  

## Sub Project 1 ( V1)
This should get you up and running with displaying Media to a Screen. You'll be able to choose whether you want to display Images, Videos, or an External Site. I don't envision any automation here with most of the processes being manual. A reboot should get you back to a working state. 
### Piece1
The Player
Debian, 
Puppy Linux
### Piece2
The Content
Images ,Videos
WebSites
Powepoints?
