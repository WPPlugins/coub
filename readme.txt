=== Coub ===
Contributors: Coub, ramiy
Tags: coub, videos, oEmbed, embed, shortcode
Requires at least: 3.5
Tested up to: 4.5
Stable tag: 1.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed looped videos with audio from coub.com into your WordPress site.

== Description ==

Create looped videos using [Coub.com](https://coub.com) online tools and embed them to your WordPress site.

= About Coub =

A [coub](https://coub.com) is a high-quality looped video with audio, up to 10 seconds long. Turn your favorite videos into an engaging, "living" photos, display your creative work in a novel ways. Use different video sources for your coub. Add custom audio. Share the result with friends and enjoy what others create.

https://www.youtube.com/watch?v=Vp7M6hRn9CI

= Coub WordPress Plugin =

This plugin enables site owners to embed coub looped videos into WordPress site using the video URL or video ID.

Choose any video from [coub.com](https://coub.com/explore), or [create](https://coub.com/create) your own! Copy the video URL and paste it to your post text editor. Then simply click over to the visual editor to confirm that it loads properly.

Alternatively, you can embed videos to your content using the `[coub id=""]` shortcode and the video ID.

= More Information =

For any questions or more information, please contact us at [contact@coub.com](mailto:contact@coub.com).

== Installation ==

= Installation =
1. In your WordPress Dashboard go to "Plugins" -> "Add Plugin".
2. Search for "Coub".
3. Install the plugin by pressing the "Install" button.
4. Activate the plugin by pressing the "Activate" button.

= Minimum Requirements =
* WordPress version 3.5 or greater.
* PHP version 5.2.4 or greater.
* MySQL version 5.0 or greater.

= Recommended Requirements =
* The latest WordPress version.
* PHP version 5.6 or greater.
* MySQL version 5.6 or greater.

== Screenshots ==
1. Pasting the URL to the text-editor.
2. Pasting the URL to the visual-editor.

== Frequently Asked Questions ==

= How do I embed videos from Coub? =

With this plugin you can use the URL to embed videos. Just paste the video URL into your post editor:
`https://coub.com/view/4211j`

= How do I set custom dimensions to my videos? =

Since wordpress 4.2, you can double click the embedded item to set max width and max height. It will add the WordPress `[embed]` shortcode:
`[embed width="600" height="400"]https://coub.com/view/4211j[/embed]`

**Note:** Doing it the WordPress way, using the `[embed]` shortcode, is backwards and forward compatible, and it works with all the themes.

= Can I customize the embedded item? =

For advanced customization, use `[coub id=""]` shortcode with the following attributes:

* **id** (required) - item id.
* **width** - item width.
* **height** - item height.
* **muted** - (true/false) show intro.
* **autostart** - (true/false) start the coub video automatically.
* **noControls** - (true/false) don't show player's control buttons.
* **hideTopBar** - (true/false) don't show control buttons located on top of the player.
* **noHDControl** - (true/false) don't show the HD mode button.
* **noSiteButtons** - (true/false) don't show the link to the Coub web site.
* **originalSize** - (true/false) show the video with its original dimensions.
* **startWithHD** - (true/false) start the video with the HD quality.

== Changelog ==

= 1.4 (2016-04-04) =
* Add shortcode.
* Move plugin files to 'includes' directory.

= 1.3 (2016-01-30) =
* Remove po/mo files from the plugin.
* Use [translate.wordpress.org](https://translate.wordpress.org/) to translate the plugin.

= 1.2 (2015-11-26) =
* Filter the code returned by the oEmbed provider and add supported parameters to the code.
* Add screenshots.

= 1.1 (2015-05-05) =
* Prevent direct access to main php file.
* Add i18n support.
* Add russian (ru_RU) traslation.
* Add hebrew (he_IL) traslation.

= 1.0 (2015-04-16) =
* Initial release.
* Register oEmbed provider.
