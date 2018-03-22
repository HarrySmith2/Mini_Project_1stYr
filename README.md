# Mini_Project_1stYr
------------------------------------------------------Welcome to our project!------------------------------------------------------

Feel free to download, edit and do whatever you wish with our project code!

This is a project designed by a group of first year Ethical Hacking and Cybersecurity students attending Coventry univeristy.

The aim of this project was to design and set up a wireless network that users will be allowed to connect to. 
After connecting, a small amount of data collection on the user will occur.

We have desgined a very basic set of webpages that will copy the OUI of a MAC address aswell as an email.
The email is then hashed using the handy PHP module "hash" and both the MAC address and hashed Email are stored in a database. 

We felt that this is simply proof of concept code, and it can be expanded upon to make it into a more 
mallicious and/or nefarious portable Wi-Fi network.

However, we do not want to be expelled from the University, so we may come back to this at a later date, to make it more potent. ;-)

The main write up documents are "ProjectIgnorance_HowTo" and "ProjectIgnorance_WriteUp" if you are interested. 

Thank you for taking a look, have a nice day!


In the "code" directory there are several documents:

CaptivePortalFinal.php = The main Captive Portal page a user will see after connecting to our network.

Valid+Store.php = The php script that runs on submission of the form on the Captive Portal page.
                  This will hash the user's email and save it to the database.
                
Email_input.html = The page opened by Valid+Store.php, explaining to the user what the network and project is about. 

DefualtGWSetup.sh = Bash script that refreshes and runs the setup for the Wi-Fi network. 

CovFreeWifi_DB.sql = SQL used for creating the database (MySql).

There is also an images folder, these images are displayed on the webpages as simple decoration.
