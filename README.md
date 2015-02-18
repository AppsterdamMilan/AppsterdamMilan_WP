# AppsterdamMilan_WP
WordPress theme for the Appsterdam Milan website.

### Install & setup
Move the folder (or clone the repo) in your **WordPress/wp-content/themes/** folder, then open the terminal on the theme folder location and run

	npm install

to install **Grunt** plugins used for develop the theme and

	bower install

to install frontend libraries managed by **Bower**.

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