# modxcloud.com modrewrite for SEO links
website hosted at modxcloud.com uses NGINX modrewrite for SEO links and the mod_rewrite syntax is  different from the Apache mod_rewrite syntax

#### Coded with Love by modxdeveloper
[![Twitter]](http://twitter.com/modxdeveloper)
[![Youtube]](https://www.youtube.com/channel/UCcFgHxc6xQizEPzSFyOJHgg/videos)
[![Facebook]](http://facebook.com/pages/Modx-support/159804034043556)
[![Google+]](https://plus.google.com/109498197448404992305)
[![Email]](mailto:modx.customize@gmail.com)
 

## To install:
1. Download
2. Unzip the downloaded file.
3. Open NGIN_rewrite_WEB_ROULS.txt file and update it with your site's contexts data from MODX CMS RESOURCES TREE.
4. Insert the updated code into Configuration Rules (rewrites, redirects etc) textarea of the popup after clicking on "Adjust Web Rules" per your cloud  at https://dashboard.modxcloud.com
5. Create a plugin in MODX CMS MANAGER AREA in the elements tree from the downloaded: plugin.php
6. Update the plugin PHP code to your contexts data and activate it per OnHandleRequest event.
7. Done. If you have domain.com/contextX MODX will load data from that context. Setting maybe different, for example it can load contextX per contextX.domain.com etc..
 

## Features
* ** domain.com/contextX lets MODX load data from that context (contextX).
* ** contextX.domain.com lets MODX load data from that context (contextX).
 
## Compatibility
MODX Revolution

## Community
- ** Find a bug?** [Open an issue](https://github.com/modxcustomize/modxcloud.com_modrewrite_SEO_links/issues). Try to be as specific as possible.
- ** Have a feature request** [Open an issue](https://github.com/modxcustomize/modxcloud.com_modrewrite_SEO_links/issues). Tell me why this feature would be useful, and why you and others would want it.

