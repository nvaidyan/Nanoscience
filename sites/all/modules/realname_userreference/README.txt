
The Realname CCK User Reference Widget module adds a new widget to the User Reference
CCK field type that uses the Realnames for autocompletion.

If the widget is configured without any view the autocomplete suggestions and the already filled-in values :
- are in the form "Realname (name)" if the Realname and the Name are different
- are in the form "name" if they are the same

If the widget is configured with a view the autocomplete suggestions have the same behaviour, however when a value is chosen or for the already filled-in values, the display will just be the Name of the user.

Dependencies
------------
 * nodereference (part of CCK)
 * content (part of CCK)
 * realname 6.x-1.x-dev

Install
-------
Installing the Realname CCK User Reference is simple:

1) Copy the realname_userreference folder to the sites/all/modules folder in your installation.

2) Enable the module using Administer -> Modules (/admin/build/modules)

3) Add or edit a CCK User Reference field from admin/content/node-type/[type]/fields and choose the new widget.

Credits
-------

Realname CCK User Reference was written by Guillaume Duveau (guix, http://drupal.org/user/173213).
Its' largely inspired by Node Reference URL Widget (http://drupal.org/project/nodereference_url) written by Quicksketch (http://drupal.org/user/35821).
