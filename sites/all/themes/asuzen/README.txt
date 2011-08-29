About the ASU Zen Theme v. 6.x-3.x 
==================================== 
The ASU Zen theme was originally based off of the Zen theme
(http://drupal.org/project/zen) by Lullabot's Jeff Robbins.  The
ASU-specific modifications were made by Jeff Beeman, Kathy Marks and
Nathan Gudmunson using the templates defined in the Communications Guide
and within the ASU themes directory.  The server-side include files were
created by Chris Puleo. The 3.x release of ASUZEN was developed by Maximo
Mena.

The ASU Zen theme was designed to be as generic as possible in order to
provide optimal flexibility for site maintainers, while also pulling
from a core set of ASU template include files. The core template include
files are located in a global ASU themes directory in AFS and include
the standard ASU header, footer and various related images and CSS. This
means easier site maintenance for site administrators, as changes to the
core header and footer files immediately propagate out to any sites
using the theme. Pretty slick, huh?


Requirements 
============ 
Drupal 6.5 or higher:  While this theme could potentially work in
version of Drupal prior to 6.5, it is currently only verified to work in
Drupal 6.5 or higher.  Drupal 7 is not yet supported.


Installation
============
* Download and install the asuzen folder in your sites/all/themes
folder.  If the folder doesn't exist, create it. 
* Download the latest version of Zen 6 from
http://drupal.org/project/zen and put it in your /sites/all/themes
folder. The two themes should be side-by-side in the themes folder. The
ASU Zen subtheme is dependent on the Zen theme. 
* Go to your site's admin > site building > themes page and enable the
ASU Zen theme.


ASU Zen Components
========================
The theme comes with the following:

* Official ASU header, including:
	* Standard search with search range radio buttons (ASU GSA search
and local Drupal search)
	* Required username and login links
* Official footer links

These are provided as global files through server-side includes.

SIGN IN LINKS
Sign in links are automatically set for you and appear as a dynamically
generated list in the upper right above the search box. If the user is
not logged in, they will see the link "SIGN IN," which points at the
path /user.  If they are logged in, they will see their username and a
"SIGN OUT" link.  Per W.E.B., the username is no longer a link to the
user's profile page.

All official ASU sites must use single-sign on authentication, either
Web Auth or CAS.

AUTHENTICATION
WebAuth should be used with the ASU Zen theme.  Instructions for
downloading the WebAuth module can be found at
http://help.asu.edu/drupal/webauth.  


ASU Zen Options
========================

ENDORSED LOGO & SCOPED SEARCH
Refer to the Custom header section on http://help.asu.edu/node/2057
for instructions to request a non standard header. The path to the
ASU header can be changed on the ASUZEN theme settings page.

FIXED WIDTH LAYOUT
Enable fixed width layout from the ASUZEN theme settings page.

SITE NAME/LOGO/SLOGAN
If desired, upload a new site logo at
admin/build/themes/settings/asuzen.  If enabled, the logo, site name and
site slogan will all appear at the top of the left sidebar.

FOOTER MESSAGE
If desired, edit the footer message (at admin/settings/site-information)
to contain your department's address information.  Follow the format
below.  We recommend using Drupal's included contact module for email
contacts.

Sample footer message format:

<p>Department Name<br />
Mailing address of dept/office<br />
Physical address | <a href="http://www.asu.edu/map/">map</a><br />
Phone number and <a href="#">dept/office email</a><br />
<a href="#">contact</a></p>

REGIONS
The theme provides several regions in which to place blocks: 
	* Left sidebar - Right sidebar - Header: an area that spans the
entire width of the page, just below the ASU-branded header and menu
bars.
	* Content top: an area above the content, but between the sidebars
	* Content bottom: an area below the content, but between the
sidebars
	Footer: an area below the footer message (department address)


Accessibility
============= 
SITEMAP
Including a site map is especially helpful to users dependent on
assistive technology. Drupal can create a quick sitemap for you.  
	* Download the Sitemap Module (http://drupal.org/project/site_map).
	* Install the module in your /sites/all/modules folder (create
folder if necessary).
	* Enable the module in admin > site building > modules. 
	* Uncomment the "Skip to site map page" link provided under the
<body> tag on your page.tpl.php file.

For further suggestions on making your site more accessible, see
http://commguide.asu.edu/web/accessibility and


Support
=======
If you have trouble, many resources are available to you.

* Read the documentation (handbooks) on drupal.org, particularly
"Getting Started." 
* Search for 'drupal' on the Help Center site for answers and articles -
http://help.asu.edu.
* Attend ASU Drupal User Group meetings, held every fourth Thursday in
CPCOM 120.
* Visit the ASU Drupal Forum at drupal.asu.edu
* Subscribe to the WebCom listserv for ASU Drupal announcements -
http://lists.asu.edu/cgi-bin/wa?SUBED1=webcom&A=1
* Create a help (CRM) ticket with WebCon as the provider group -
https://www.asu.edu/go/support/createcase


To Do
=====
* A javascript for disseminating emergency announcements in the
header
