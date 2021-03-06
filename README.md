# AppsterdamMilan_WP
WordPress theme for the Appsterdam Milan website.

### Install & setup
You need to have [NodeJS](http://nodejs.org/) and [Bower](http://bower.io/) installed on your computer.
Move the folder (or clone the repo) in your **WordPress/wp-content/themes/** folder, then open the terminal on the theme folder location and run

	bower install

to install frontend libraries managed by **Bower**.

[Grunt](http://gruntjs.com/) is needed only if you want to edit the theme and use the built-in actions, in that case run the command  

	npm install

to install **Grunt** plugins used for develop the theme.

Then go on your WordPress site admin area and activate the theme on the *Appearance* -> *Themes* screen.

### Overview
The theme is based on few libraries

- Bootstrap by Twitter
- Font Awesome
- jQuery

On the WordPress side the theme is based on few basic templates and **Custom Post Types**.

### Grunt actions
Grunt is used for watch and compile .less and .css files.

Open the terminal on theme folder location and just run the

	grunt

default command to intialize the actions, there are no others Grunt tasks.

### WordPress theme features
This theme take advantage of some common WordPress theme development features:

- Custom post types (Videos & Talklab)
- *(soon)* Shortcodes
- Custom login page logo
- Post featured/cover image

### Disqus
The comment/moderation features are delegated to the Disqus platform, so there isn't any implementation of the basic WordPress comment system.
