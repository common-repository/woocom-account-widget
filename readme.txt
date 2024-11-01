=== WooCom Account Widget ===
Contributors: rnaby
Tags: woocommerce, widget, my-account, orders, user, login, logout,ecommerce
Requires at least: 4.0.0
Tested up to: 4.8
Requires PHP: 5.6
Stable tag: 1.0.0
License: GPL
License URI: https://www.gnu.org/licenses/gpl.txt

This widget is for WooCommerce, developed specially for developers, following **WordPress VIP** coding standard. Checked by PHPCodesniffer along with WordPress VIP Coding Standard.

== Description ==
This plugin provides a widget which will help user to login at widget as well as show various WooCommerce data in frontend. It is developed thinking about developers. Some filters and actions hook are provided to manipulate data regarding only this widget. That will help developers to modify the widget as well as modify the widget data explicitly. Lastly this plugin is developed following most of the rules for **WordPress VIP** coding standard and checked by **PHPCodesniffer**. So you can trust on the coding structure of this plugin.

= Requirements =
* WordPress 4.0
* PHP >= 5.6
* WooCommerce >= 2.0.0

= Features =
*   Lots of filter and action hooks.
*   Well documented code.
*   Checked by **PHPCodesniffer** with **WordPress VIP** coding standard.
*   Followed modern PHP development approach.
*   Already translated to 14 languages.

== Documentation ==
Here are some documentation for the provided hooks in this plugin-

= Filters =

* `woocom_aw_parent_construct_id_base` => Widget parent construct ID base filter hook.

* `woocom_aw_parent_construct_name` => Widget parent construct name filter hook.

* `woocom_aw_parent_construct_options` => Widget parent construct options filter hook.

* `woocom_aw_args_filter` => Widget args filter hook.

* `woocom_aw_instance_filter` => Widget instance filter hook.

* `woocom_aw_login_form_args_filter` => Login form arguments filter hook.

* `woocom_aw_lost_pass_url` => Lost password url filter hook.

= Actions =

* `woocom_aw_before_login_form` => Executes just before the login form.

* `woocom_aw_after_login_form` => Executes just after login form

* `woocom_aw_below_before_widget` => Executes just below the `$args['before_widget']`

* `woocom_aw_above_after_widget` => Executes just above `$args['after_widget']`;

> I'm thinking about adding some more hooks to this plugin. If you have any idea please share through the forum or direct email me at ***naby88@gmail.com*** or at ***naby88@live.com***.

You can also contribute through this SVN repository of WordPress.org as well as you can contribute here at this **[GitHub](https://github.com/rnaby/woocom-account-widget)** repository also.

== Installation ==
1. Upload the plugin to `wp-content/plugins` directory
2. Go to the **Plugins** menu at dashboard in backend to activate the **WooCom Account Widget** plugin.
3. After activation you\'ll find the widget at your widget area dashboard.

== Changelog ==

= Version 1.0.0 [2017-10-13] =

* Initial release
