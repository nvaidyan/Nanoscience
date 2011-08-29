DESCRIPTION
------------------------
A module containing helper functions and settings for enabling ASU Webauth based
authorization into Drupal.

Contains settings for defining auto-registration behavior, which pages to 
require webauth for and more.




REQUIREMENTS
------------------------
* Currently only works on Windows, Linux or Unix servers due to the required 
Webauth Verify Client.




INSTALLATION
------------------------
* Before proceeding with installation, it is recommended that you setup a user,
generally the #1 user in the site (uid=1) to have a user name that is *not* a
webauth user name (i.e. site_admin).  This will allow you to login to the site
even if webauth is down or if the webauth module is badly configured.

* Download Webauth Verify Client at http://asu.edu/webauth/downloads.htm and 
place into an appropriate folder on your server (ex: /usr/local/bin/verify).
This step is not needed if you are on a UTO webhosting platform. 

* Place the asu_webauth folder into an appropriate location on the server for 
modules, http://site.asu.edu/sites/all/modules/.

* Enable the asu_webauth module, which can be found on admin/build/modules under
the heading "ASU - Authentication / Authorization"

* Configure the module at admin/settings/asu_webauth (details below)




CONFIGURATION
------------------------
* Go to admin/settings/asu_webauth to configure

* Set location of Verify Client - this path should include the name of the 
verify client (ex: /usr/local/bin/verify)

* Set the Verify URI (the URI Verify should use for verifying Webauth cookies). 
It is recommended that you check the box next to "Verify on every page view"

* Set login / logout settings.  "callapp" allows you to set which page users 
should be redirected to upon successful login.  If left blank, users will be 
redirected to the page they are currently on.  "onLogoutURL" allows you to 
define a url to send the user to upon successful logout (ex: the site homepage).
Keep it blank to just send the user back to the page they're on.

* The module can be configured to automatically register users that login to the
site via webauth.  Turn this on if you would like all users to automatically 
become local Drupal account holders.  Otherwise, keep this disabled and manually
add user ids via admin/user/user/create

* It is recommended that you keep "Users cannot change email address", "Users 
cannot change password" and "Obfuscate local login form" checked, as they ensure
varying levels of accident prevention.

* If you will be obfuscating the local login form, be sure to provide some 
instructions for the user on how to login using the "Login form text" field.

* Setup the role that webauth users should receive when entering the site.  It
is highly recommended that you make this role *not* 'authenticated user', as
it will make every user, even site admins, have to be webauth'd in order to
maintain a session.  It is generally recommended to setup a new role called
'webauth user', and configure the module to automatically assign that role to
any webauth'd users.

* You can require Webauth login for specified pages or all pages, the choice is 
yours.  Wildcards are permitted for the "specific pages" setting.  If "all 
pages" is set, the values set in "specific pages" will be ignored.