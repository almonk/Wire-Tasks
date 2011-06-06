# Wire tasks
## A command line interface to the Processwire CMS

This is a very early work in progress / proof of concept for a little suite of tools to aid with the development of Processwire sites.

### Installation
* Clone this repo into your processwire root (where the index.php is)
* cd into it (e.g. cd tasks)
* From here you can now run the task scripts, (e.g. php install)

### Current methods
*install*
Makes the assets & config.php file writeable

*sessions empty*
Empties the sessions directory

*cache empty*
Empties the cache

*sitemap*
Outputs the sitemap with ids and paths

*fields*
Same as above but lists all the fields used per page

*sitemappaths*
Outputs the sitemap as a list of slugs

*setup*
Creates the folders needed for PW to run within assets. If you get weird 503 errors when installing/moving PW, then try running this command.