- We'll need two (2) Kiosks Machines, one (1) Server.
- All three (3) need to be conected using a Internal Network.
- Within our Lab Environment we'll use two VirtualBox network cards per system and "Internal Network" and a "NAT Network"
  - The Nat Network is to we can get out to the internet
  - The Internal Network is so they can communicate with each other   
  - Give them static IPs. Within our Lab, we'll be using:
    -  10.10.10.10 Sever
    -  10.10.10.20 Kiosk 1
    -  10.10.10.30 Kiosk 2
  -  How to Give Puppy Linux a Static IP
    - Right Click > Setup > Internet Connection Wizard
      - Click Wireless/Wired Lan
      - Click Network Wizard
      - Select the Network Interface we are using
      - Click Static IP
      - No Need For Gateway or DNS
      - Click Save
      - Make sure you select to keep settings after the next Boot.
      - For good measure reboot and save the system. 
    
  -  Make sure you can SSH into the kiosk machines from the Server.
    - ping 10.10.10.20
    - ping 10.10.10.30
### Install SSH Server In Puppy Linux
  - Install DropBear SSH Server From Puppy Package Manager Reboot and Save
    - Install a couple of things
      - dropbear_2020.81-5
      - dropbear-bin_2020.81-3+deb11u1
      - dropbear_2020.81-3+deb11u1
     
#### Run this script 
- #!/bin/sh
- mkdir /etc/dropbear
- cd /etc/dropbear
- RSA_KEYFILE=/etc/dropbear/dropbear_rsa_host_key
- DSS_KEYFILE=/etc/dropbear/dropbear_dss_host_key
- dropbearkey -t dss -f $DSS_KEYFILE
- dropbearkey -t rsa -f $RSA_KEYFILE
- dropbear

## Reboot and Save
- Make sure you can ssh to your localhost, or at least get the prompt to log in
