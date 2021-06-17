=== Teduca Palettes ===
Tags: palette, palettes, color, display, colors, copy and paste, copy, branding
Donate link: https://paypal.me/ozonostudio
Requires at least: 4.1
Tested up to: 5.7
Requires PHP: 5.2.4
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Display color palettes on your website using a simple shortcode.

== Description ==
Teduca Palettes help you to showcase a group on colors on your website using a simple shortcode.

The plugin don\'t have limits about how many colors you can use, the displayed colors always have the same size, the first color you use on the shortcode can be used to feature that color a little more than the rest.

The colors expand when you hover the color to display the hex color, after that you can click on the color text to copy the color hex to your clipboard.

**Use the shortcode to insert your group **
`[palette colors="CDF0EA, F9F9F9, F6C6EA, C490E4" title="Unicorn" height="400px"]`

**Or you can call it directly with PHP in your theme**
`<?php teduca_palettes( array('#CDF0EA', 'F9F9F9', '#F6C6EA', 'C490E4'), "Unicorn", "400px" ); ?>`

You can use the shortcode with # or without, 3 or 6 color code, doesn\'t matter, the action still can handle it.

**Options:**

* Height: The default size if you don\'t input anything is 250px
* Title: You can use you own or leave it empty.
* Colors: You can use from 1 to as many you want, if your height is too small to display the colors you can increase it using the height option.
* Width: By default this option is 100%.

== Installation ==
1. Add plugin to the `/wp-content/plugins/` directory
1. Activate the plugin through the \'Plugins\' menu in WordPress
1. Use shortcode on any page to display the color palette.

== Frequently Asked Questions ==
Please visit the [Teduca](https://teduca.club/colores) page to see an active page with the color palettes displayed

== Screenshots ==
1. Can be used with any text editor
2. Define your heights, title and colors

== Changelog ==
= 1.0 =
* June 17, 2021
* Built with love