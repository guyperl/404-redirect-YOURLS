404 Redirect
====================

Plugin for [YOURLS](http://yourls.org). 

Description
-----------
A simple plugin that will set the 404 header if the link ID is unknown.


Installation
------------
1. In `/user/plugins`, create a new folder named `404-redirect`.
2. Drop these files in that directory.
3. Go to the Plugins administration page ( *eg* `http://sho.rt/admin/plugins.php` ) and activate the plugin.
4. Add " define( 'CON_404_PAGE', '/* Path to error page from webserver root*/' ); " to config.php
Example:
" define( 'CON_404_PAGE', 'errorpages/404.html' ); "
4. Have fun!

License
-------
Released under the [MIT](https://github.com/1Conan/404-redirect-YOURLS/blob/master/LICENSE) License.

Contact and bug reports
-----------------------
You may contact me at admin@1conan.com for further questions.

If you find a bug, please kindly open an issue here.

