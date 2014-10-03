# Penny WordPress Theme

## About:

**Author:** David Chandra Purnama ( [@turtlepod](http://twitter.com/turtlepod) / [shellcreeper.com](http://shellcreeper.com/) )

Penny theme is an clean and simple responsive theme built with search-engine optimization (SEO) in mind by utilizing the most current HTML5 conventions and [Schema.org](http://schema.org) microdata.

Penny design is inspired by [Twenty Twelve Theme](https://wordpress.org/themes/twentytwelve). 

More info: [Penny Theme](http://genbutheme.com/themes/penny/)

### Content, Excerpt, and Thumbnail Display:

Penny do not display auto-excerpt. If user do not input excerpt, in archive type pages (archives pages, blog pages, search pages) full content will be displayed with no thumbnail. To display thumbnail user need to input the excerpt manually from excerpt meta box in post edit screen.

### Theme Layout and Sidebar:

Penny is powered with 2 Layout, You can set the layout globally via WordPress customizer or using Layout Meta Box in post edit screen.
* Content (No Sidebar)
* Content / Sidebar

Info:
* **Content**: Main content of the page.
* **Sidebar**: Primary Sidebar (300px width).

### Navigation Menus:

Penny have two navigation menus.
* **Primary Navigation**: located below header with search form on the right side. On mobile device will use toggle and using menu name as toggle. When not set, it will display link to home page.
* **Footer Links**: will be displayed as simple links in footer area. If not set, will not displayed.

### Custom Background:

Penny have custom background feature you can set custom background via WP Customize or background settings page.

### Custom Header Image:

Penny have custom header feature you can set custom header image via WP Customize or header settings page.
Header image is used as logo, image size is 150px x 150px, but will be displayed as 75px x 75px to make it retina-ready (not pixelated in high-res mobile device) 

### Editor Style:

Penny is using editor style, so you'll see what you get in your WordPress visual editor.

### Translation Ready:

You can translate Penny using provided po and mo file.


### Links

* [Github project page](https://github.com/turtlepod/penny)
* [Theme page](http://genbutheme.com/themes/penny/)
* Need a custom theme or plugin for your WordPress website? [I can help](http://shellcreeper.com/services/).

## Copyright & license

This theme is licensed under the [GNU General Public License](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html), version 2 (GPL) or later.

2014 © [Genbu Media](http://genbu.me/). All rights reserved.

## Changelog:

### 1.0.0
* Update to Hybrid Core 2.0.2
* Change theme page to genbutheme.com
* Now using Tamatebako, deprecated functions used in tamatebako.
* Use tamatebako to register menus, deprecate: penny_register_menus(), penny_primary_menu_fallback_cb()
* Use tamatebako to register sidebar, deprecate: penny_register_sidebars(),
* Use h3 for widget title, for accessibility purpose, deprecate: penny_sidebar_args(),
* Use tamatebako to load scripts and styles, deprecate: penny_head_script(), penny_enqueue_js(), penny_register_css(),
* Change layout from "layout-2c-l" to "layout-content-sidebar" "layout-1c" to "layout-content" and add this feature in customizer and post option as meta box.

### 0.1.1
* Fix theme tag

### 0.1.0
* Initial version

