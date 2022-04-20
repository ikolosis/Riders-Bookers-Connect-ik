Riders Bookers Connect:

An Interactive System that allow all Multi-Modal Public Transport Riders (Eg. Train, Buses, Taxi, Carpooling etc.) to Post and share their Rides and be connected 
with people who wants to book or take a ride from various transport Stations Powered by Tigergraph Database Analytics.


This application was written with Tigergraph Database 100%, PHP, Ajax, JQUERY, Bootstraps, Css etc via Tigergraph Curl Restful API Calls.
All Database Transactions are done with Tigergraph Database Analytics 100% via Tigergraph Restful API Curl Calls using PHP Programming Language.



How To Test the Application:

Step 1.) Install Xampp Server on your Laptop/Desktop and ensure that PHP is installed and running.

Step 2.) You will need to First generate your Tigergraph Access token.  To this effect, edit tigergraph_token_generator.php file.
then enter your Tigergraph Cloud Database Credentials where appropriates.

A.) Tigergraph Cloud Database username
B.) Tigergraph Cloud Database Password
C.) Tigergraph Cloud Database Graph Name
D.) Tigergraph Cloud Database URL Instance  Eg: https://example.i.tgcloud.io

Once your are done, save it and run the Script at browser eg http://localhost/riders_bookers_connect/tigergraph_token_generator.php

 it will generate your Tigerghrap Access token by making Restful API Curl Request via PHP to your Tigergraph Cloud Database instance.
 Sample Screenshot:   https://fredjarsoft.com/screenshot_tigergraph_token.png



Step 3.) Open Tigergraphdb_table_vertex.txt file so that you will see all the Tigergraph vertexes and their respective data types/attributes that I created.

use the sample to create your own vertex in your graph within your Tigergraph Database Instance.


Step 4.) Edit settings.php files and enter all the necessary  Tigergraph Access tokens, Tigergraph Credentials, Google API Keys etc. where appropriates.

In settings.php file you will only need to edit and enter where appropriates.

A.) Tigergraph AccessToken obtained in Step 2 above.
B.) Tigergraph Cloud Database Graph Name
C.) Tigergraph Cloud Database URL Instance  Eg: https://example.i.tgcloud.io
D.) Google Map Keys. (Note that Just 1 Google API key is needed) This api key will serve for both Google Javascript Map API Key, 
Google Address Geolocation API, Google Address Reverse Geo-location API. Google directional Map etc.

To obtain this api key please visit https://console.developers.google.com
and create a project and then generate the Google API Key. you can also ensure that 
Google Javascript Map API Key, 
Google Address Geolocation API,
Google Address Reverse Geo-location API, 
Google directional Map etc. are enabled in the google dashboard console within your Google Project Application.


Just Hint, You can send us a Message at devpost.com if you will like me to send you my own Google Map API Key asap for faster testing.  Thanks



Note that Email Server configuration in the settings.php file is optional and may not be necessary. 
The essence is just to enable you to just send email messages from within the application.


Step 5.)It is time to run the application

Ensure that Php is still running in the xampp Server once again. Then Call up your browser and the application will be running at 
http://localhost/riders_bookers_connect/index.php


In case of further help, send me an email or better send me a message from devpost.com.   Enjoy.





