- We'll need two (2) Kiosks Machines, one (1) Server.
- All three (3) need to be conected using a Internal Network.
- Within our Lab Environment we'll use two VirtualBox network cards per system and "Internal Network" and a "NAT Network"
  - The Nat Network is to we can get out to the internet
  - The Internal Network is so they can communicate with each other   
  - Give them static IPs. Within our Lab, we'll be using:
    -  10.10.10.10 Sever
    -  10.10.10.20 Kiosk 1
    -  10.10.10.30 Kiosk 2
    
  -  Make sure you can SSH into the kiosk machines from the Server.
    - ping 10.10.10.20
    - ping 10.10.10.30



