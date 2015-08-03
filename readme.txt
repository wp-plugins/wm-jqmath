=== WM JqMath ===
Contributors: Carlos Santos, webmind.pt
Tags: jqmath, plugin, wordpress, webmind, wm
Requires at least: 3.3
Tested up to: 4.2.3
Stable tag: 1.1
License: MIT
License URI: http://opensource.org/licenses/MIT

Create math formulas on your posts and pages using jqMath from MathScribe

== Description ==

WM jqMath plugin is a very simple plugin that adds the jqMath library and styles.

You will be able to add math formulas by directly entering the standard syntax of jqMath or by using a shortcode where you can also add CSS styles.

Current WM jqMath features:

   *  Insert directly a jqMath expression on your post or page like: $$y={-b±√{b^2-4ac}}/{2a}$$
   
   *  Insert a jqMath using a shortcode with CSS styles like: [jqmath expr="$$y={-b±√{b^2-4ac}}/{2a}$$" style="color: navy; font-size: 20pt"]
   

The jqMath library was written by Dave Barton from Mathscribe. You can find further information regarding jqMath by clicking <a href="http://www.mathscribe.com/author/jqmath.html" target="_blank">here</a>

We want to thank Dave for developing this great library!

== Installation ==

1. Upload 'plugin-name.php' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

The usage of this plugin is quite straight forward. You just need to know how to use the jqMath syntax. However, if you have any questions please read this FAQ:

= How can I insert a formula? =

Just enter the formula directly in the post/page editor using jqMath syntax or by using a shortcode

= When using the syntax $$...$$ the formula appears ona new line and aligned to the center. Can I change this? =

Yes. If you don’t want a formula centered on a new line, just write it as $...$ instead of $$...$$.
Please find more information about the jqMath syntax here: <a href="http://www.mathscribe.com/author/jqmath.html" target="_blank">Mathscribe jqMath</a>

= How can I change the color of the formula? =

Using the shortcode and the CSS style color. Example: [jqmath expr="$$y=f(x)$$" style="color: darkgreen"]
You can also use jqMqth syntax. Please read more information by following the link above.

= Can I change the font size for the formula? =

Using the shortcode and the CSS style font-size. Example: [jqmath expr="$$y=f(x)$$" style="font-size: 16pt"]
You can also use jqMqth syntax. Please read more information by following the link above.

= Where can I find more information to style formulas? =
* <a href="http://www.mathscribe.com/author/jqmath.html" target="_blank">Mathscribe jqMath</a>
* <a href="http://stackoverflow.com/questions/11805054/jqmath-highlight-box-like-bbox-in-mathjax-mathjs" target="_blank">http://stackoverflow.com/questions/11805054/jqmath-highlight-box-like-bbox-in-mathjax-mathjs</a>
* <a href="http://stackoverflow.com/questions/12106035/is-it-possible-to-style-jqmath-display-with-another-font-on-webpages" target="_blank">http://stackoverflow.com/questions/12106035/is-it-possible-to-style-jqmath-display-with-another-font-on-webpages</a>

= Can I add multiple formulas? =

Yes, you can enter any formula anywhere you want using directly the jqMath syntax or using the shortcodes.

== Screenshots ==

1. Editing a post with math formulas
2. Viewing the post

== Changelog ==

= 1.1 =
* jqMath library updated to version 0.4.3

= 1.0 =
* First release

== Upgrade Notice ==

= 1.1 =
This version fixes a security related bug. Please upgrade ASAP.
