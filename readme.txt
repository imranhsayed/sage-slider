=== Sage Slider ===
Contributors: (gsayed786)
Tags: slider, shortcode
Requires at least: 4.6
Tested up to: 4.7
Stable tag: 4.3
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Sage Slider plugin allows you to add the slider at any place on frontend by calling a shortcode [sage-slider].
== Description ==

Sage Slider plugin allows you to add the slider at any place on frontend by calling a shortcode [sage-slider].It gives you options in customizer to add and modify slides.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the shortcode [sage_slider] to include the slider where you need it while creating a new post, a page or a sidebar widget.The shortcode value will be replaced by
the slider on the front end.

== Frequently Asked Questions ==

= I have included the shortcode [sage_slider] in the post or page content through backend. However it does not display on the front end =

Step 1. Check if your Plugin is activated.
Step 2. Ensure that your theme uses the_content function to display the content of the post or page, because that is required so that the shortcode API parses any registered shortcode.
Step 3. Deactivate all plugins and reactivate sage slider plugin.