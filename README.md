# Mini_Project_1stYr
------------------------------------------------------Welcome to our project!------------------------------------------------------

This is a project designed by a group of first year Ethical Hacking and Cybersecurity students attending Coventry univeristy.

Our first year project made us design a wireless network which could be run off of a BeagleBone Black.

We thought to investigate how "easy" it is for an individual to trust a Wi-Fi hotspot in a public place with their personal data.

We have desgined a very basic set of webpages that act as a captive portal complete with a submission page and terms and conditons. 
The PHP code will copy the OUI of a MAC address and upon user submission, their E-mail and MAC address will be saved to a SQL database.

The email is then hashed using the handy PHP module "hash". 

Subsequently, both the MAC address and hashed Email are stored in a database. 

This is simply proof of concept code, and it can be expanded upon to make it into a more mallicious and/or nefarious portable Wi-Fi network.

However, we do not want to be expelled from the University, so we may come back to this at a later date, to make it more potent!

The main write up documents are "ProjectIgnorance_HowTo" and "ProjectIgnorance_WriteUp" if you are interested. 

Thank you for taking a look, have a nice day!


----------------------------------------------------------------------------------------------------------------------------------------
# Where is the code?
In the "code" directory there are several documents:

CaptivePortalFinal.php = The main Captive Portal page a user will see after connecting to our network.

Valid+Store.php = The php script that runs on submission of the form on the Captive Portal page.
                  This will hash the user's email and save it to the database.
                
Email_input.html = The page opened by Valid+Store.php, explaining to the user what the network and project is about. 

DefualtGWSetup.sh = Bash script that refreshes and runs the setup for the Wi-Fi network. 

CovFreeWifi_DB.sql = SQL used for creating the database (MySql).

There is also an images folder, these images are displayed on the webpages as simple decoration.
